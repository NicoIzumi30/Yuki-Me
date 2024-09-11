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
            $categories = Category::all();
        } else {
            $categories = Category::where('user_id', auth()->user()->id)->get();
        }
        if (auth()->user()->role == 'admin') {
            $links = Link::with('category')->get();
        } else {
            $links = Link::with('category')->where('user_id', auth()->user()->id)->get();
        }
        return view('main.links.index', compact('links', 'categories'));
    }
    public function create()
    {
        if (auth()->user()->role == 'admin') {
            $categories = Category::all();
        } else {
            $categories = Category::where('user_id', auth()->user()->id)->get();
        }
        return view('main.links.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'numeric', 'exists:categories,id'],
            'long_url' => ['required', 'url', 'max:255'],
            'short_url' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_-]+$/'],
        ], [
            'short_url.regex' => 'Cuma bisa huruf, angka, "-", dan "_" aja nih kak',
            'category_id.exists' => 'Pilih kategori yang bener dong.',
            'long_url.required' => 'Yang u mau pendekin apa woi, ngapain gak di isi',
            'short_url.required' => 'Masa short link nya gak di isi sih, is dong bang.',
            'title.required' => 'Ngasih judul aja males bang, jangan dikosongin dong.',
            'title.max' => 'Ngasih judul panjang amat bang, 255 aja bolehnya ini',
            'long_url.max' => 'Gak bisa nih, kepanjangan link punya u',
            'short_url.max' => 'Lu mau bikin short link atau nulis cerita sih, panjang amat',
            'long_url.url' => 'Harus link yang valid dong bang',
        ]);
        $shortUrl = 's.i-am.host/' . $request->short_url;
        if (Link::where('short_url', $shortUrl)->exists()) {
            return back()
                ->withErrors(['short_url' => 'Link yang mau u pakai udah pernah dipake, ganti dong.'])
                ->withInput();  // Menyimpan input sebelumnya
        }
        $slug = Link::createUniqueSlug($request->title);
        $category = Category::findOrFail($request->category_id);
        if ($category->user_id != auth()->user()->id && $category->id !== 1) {
            abort(403, 'Unauthorized action.');
        }
        $filePath = 'public/qrcodes/' . $slug . '.png';
        if (!Storage::exists('public/qrcodes')) {
            Storage::makeDirectory('public/qrcodes');
        }
        QrCode::format('png')
            ->size(500)
            ->margin(5)
            ->color(0, 0, 0)
            ->backgroundColor(255, 255, 255)
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
    
        return to_route('link')->withSuccess('Short link berhasil dibuat nih kak 🫶');
    }
    
}
