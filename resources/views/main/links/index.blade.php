<x-app-main-layout>
    <x-slot name="title">
        Manage Links
    </x-slot>
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Manage Links</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Manage Links</li>
            </ul>
        </div>
        <div class="modal fade" id="showQRModal" tabindex="-1" aria-labelledby="showQRModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="showQRModalLabel">Show QR</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" alt="" id="qrImage" class="w-100">
                    </div>
                    <div class="modal-footer">
                        <a id="downloadQR" download  class="btn btn-success">Download</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="row gy-4 mt-1">
                <div class="col-xl-12">
                    <div class="card basic-data-table">
                        <div class="card-body">
                            <form action="{{ route('link.store') }}" id="createLink" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" id="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category_id" id="category"
                                            class="form-control @error('category_id') is-invalid @enderror">
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Tanpa
                                                Kategori
                                            </option>
                                            @foreach ($categories as $category)
                                                @if ($category->id != 1)
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="long_url" class="form-label">Long Link</label>
                                        <input type="text" class="form-control @error('long_url') is-invalid @enderror"
                                            name="long_url" id="long_url" value="{{ old('long_url') }}" required>
                                        @error('long_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="short_link" class="form-label">Short Link</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-base">s.i-am.host/</span>
                                            <input type="text"
                                                class="form-control @error('short_url') is-invalid @enderror"
                                                name="short_url" id="short_link" value="{{ old('short_url') }}"
                                                required>
                                        </div>
                                        @error('short_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="my-3">
                                <div class="modal-footer mb-3">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mt-1">
                <div class="col-xl-12">
                    <div class="card basic-data-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table bordered-table mb-0" id="dataTable" data-page-length="10">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                No
                                            </th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Short Link</th>
                                            <th scope="col">Long Url</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($links as $link)  
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $link->title }}
                                                </td>
                                                <td>
                                                    {{ $link->category->name }}
                                                </td>
                                                <td><a href="{{ $link->short_url }}"
                                                        class="text-primary">{{ $link->short_url }}</a>
                                                    <iconify-icon icon="fa-regular:copy"
                                                        class="d-inline-block text-secondary"
                                                        data-link="{{ $link->short_url }}"
                                                        onclick="copyLink(this)"></iconify-icon>
                                                </td>
                                                <td><a href="{{ $link->long_url }}"
                                                        class="text-primary">{{ Str::limit($link->long_url, 15, '...') }}</a>
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($link->created_at)->format('Y-m-d') }}</td>
                                                <td>{{ $link->visits }}</td>
                                                <td>
                                                    <a href="javascript:void(0)"
                                                        class="show-qr w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center"
                                                        data-qrcode="{{ $link->qrcode }}">
                                                        <iconify-icon icon="bx:qr"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            <script>
                let short_link = document.getElementById('short_link');
                short_link.addEventListener('keydown', function (e) {
                    if (e.key === ' ') {
                        e.preventDefault(); // Prevent space input
                    }
                });
                document.getElementById('createLink').addEventListener('submit', function (e) {
                    var input = document.getElementById('short_link');
                    var regex = /^[a-zA-Z0-9_-]+$/;  // Update regex to not allow spaces
                    if (!regex.test(input.value)) {
                        input.classList.add('is-invalid');
                        e.preventDefault();  // Prevent form submission
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                function copyLink(element) {
                    const link = element.getAttribute('data-link');
                    const textarea = document.createElement('textarea');
                    textarea.value = link;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);
                    Swal.fire({
                        title: 'Success',
                        text: 'Link nya sudah berhasil di copy kak',
                        icon: 'success'
                    });
                }
                $('.show-qr').on('click', function () {
                    var qrFile = $(this).data('qrcode');
                    $('#qrImage').attr('src', '/storage/qrcodes/' + qrFile);
                    $('#downloadQR').attr('href', '/storage/qrcodes/' + qrFile);
                    $('#showQRModal').modal('show');
                });

            </script>
        @endpush
</x-app-main-layout>