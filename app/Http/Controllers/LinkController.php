<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Category;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
class LinkController extends Controller
{

    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $links = Link::with('category')->get();
        } else {
            $links = auth()->user()->links()->with('category')->get();
        }
        return view('main.links.index', compact('links'));
    }
    public function create()
    {
        if (auth()->user()->role == 'admin') {
            $categories = Category::all();
        } else {
            $categories = auth()->user()->categories()->get();
        }
        return view('main.links.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
            'long_url' => ['required', 'string', 'max:255'],
            'short_url' => ['required', 'string', 'max:255','regex:/^[a-zA-Z0-9_-]+$/'],
        ]);
        $slug = Link::createUniqueSlug($request->title);
        $shortUrl = 's.i-am.host' . $request->short_url;
        $filePath = 'public/qrcodes/' . $slug . '.png';
        if ($request->category_id !== 0) {
            $category = Category::where('id', $request->category_id)->first();
            if ($category->user_id != auth()->user()->id) {
                abort(403);
            }
        }
        if (!Storage::exists('public/qrcodes')) {
            Storage::makeDirectory('public/qrcodes');
        }
        QrCode::format('png')
            ->size(300)
            ->generate('https://' . $shortUrl, storage_path('app/' . $filePath));
        $data = [
            'title' => $request->title,
            'long_url' => $request->long_url,
            'short_url' => $shortUrl,
            'slug' => $slug,
            'qrcode' => $slug . '.png',
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id
        ];
        Link::create($data);
        return to_route('link')->withSuccess('Link berhasil ditambahkan');
    }
}
