<x-app-main-layout>
    <x-slot name="title">
        Category
    </x-slot>
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Category</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Category</li>
            </ul>
        </div>
        <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createCategoryModalLabel">Create Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="name" id="categoryName">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @foreach ($categories as $category)
            <div class="modal fade" id="updateCategoryModal{{$category->id}}" tabindex="-1"
                aria-labelledby="updateCategoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateCategoryModalLabel">Update Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('category.update', $category->slug)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}"
                                        id="categoryName">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="modal-footer">
            <button type="button" class="btn btn-primary-600" data-bs-toggle="modal"
                data-bs-target="#createCategoryModal"><iconify-icon icon="ic:outline-plus"
                    style="display: inline-block"></iconify-icon> Create Category</button>
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-xl-12">
                <div class="card basic-data-table">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table bordered-table mb-0" id="dataTable" data-page-length="10">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col" class="text-center">Category Name</th>
                                        <th scope="col" class="text-center">Total Link</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">
                                                {{$category->name}}
                                            </td>
                                            <td class="text-center">
                                                {{$category->links_count}}
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#updateCategoryModal{{$category->id}}"
                                                    class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="delete-btn w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center"
                                                    data-slug="{{ $category->slug }}">
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
        <script type="text/javascript">
            $(document).on('click', '.delete-btn', function (e) {
                e.preventDefault();
                var categorySlug = $(this).data('slug'); 
                var url = '/category/' + categorySlug; 
                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Kategori ini akan dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                _method: 'DELETE',
                                _token: '{{ csrf_token() }}'
                            },
                            success: function (response) {
                                Swal.fire(
                                    'Dihapus!',
                                    'Kategori telah berhasil dihapus.',
                                    'success'
                                ).then(() => {
                                    location.reload();
                                });
                            },
                            error: function (response) {
                                Swal.fire(
                                    'Gagal!',
                                    'Kategori gagal dihapus.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
</x-app-main-layout>