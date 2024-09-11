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
                <li>-</li>
                <li class="fw-medium">Create Links</li>
            </ul>
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-xl-12">
                <div class="card basic-data-table">
                    <div class="card-body">
                        <form action="{{route('link.store')}}" id="createLink" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="" disabled selected>Select Category</option>
                                        <option value="1">Tanpa Kategori</option>
                                        @foreach ($categories as $category)
                                            @if($category->id != 1)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="long_url" class="form-label">Long Link</label>
                                    <input type="text" class="form-control" name="long_url" id="long_url" required>
                                    @error('long_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="short_link" class="form-label">Short Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-base">s.i-am.host/</span>
                                        <input type="text" class="form-control" name="short_url" id="short_link"
                                            required>
                                    </div>
                                    <div class="invalid-feedback">Input hanya boleh huruf, angka, "-", dan "_".</div>
                                    <!-- <input type="text" class="form-control" id="shortLink" required> -->
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
        </script>
    @endpush
</x-app-main-layout>