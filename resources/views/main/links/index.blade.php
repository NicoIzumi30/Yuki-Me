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
        <div class="modal-footer">
            <a href="{{route('link.create')}}" class="btn btn-primary-600" ><iconify-icon icon="ic:outline-plus"
                    style="display: inline-block"></iconify-icon> Create Short Link</a>
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
                                    <th scope="col">Long Link</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Action</th>
                                </tr>   
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Buku Catatan Docs
                                    </td>
                                    <td>
                                        Catatan
                                    </td>
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon>   </td>
                                    <td><a href="https://docs.google.com/document/d/1b2GHMxsvVcJgYf7isGtJ0DwHA-lbtvF2/edit?usp=sharing&ouid=117530526653861550397&rtpof=true&sd=true" class="text-primary">https://docs.google.com/document/....</a></td>
                                    <td>30 July 2024, 08:0</td>
                                    <td>100</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
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
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Buku Catatan Docs
                                    </td>
                                    <td>
                                        Catatan
                                    </td>
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon>   </td>
                                    <td><a href="https://docs.google.com/document/d/1b2GHMxsvVcJgYf7isGtJ0DwHA-lbtvF2/edit?usp=sharing&ouid=117530526653861550397&rtpof=true&sd=true" class="text-primary">https://docs.google.com/document/....</a></td>
                                    <td>30 July 2024, 08:0</td>
                                    <td>100</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
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
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Buku Catatan Docs
                                    </td>
                                    <td>
                                        Catatan
                                    </td>
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon>   </td>
                                    <td><a href="https://docs.google.com/document/d/1b2GHMxsvVcJgYf7isGtJ0DwHA-lbtvF2/edit?usp=sharing&ouid=117530526653861550397&rtpof=true&sd=true" class="text-primary">https://docs.google.com/document/....</a></td>
                                    <td>30 July 2024, 08:0</td>
                                    <td>100</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
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
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Buku Catatan Docs
                                    </td>
                                    <td>
                                        Catatan
                                    </td>
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon>   </td>
                                    <td><a href="https://docs.google.com/document/d/1b2GHMxsvVcJgYf7isGtJ0DwHA-lbtvF2/edit?usp=sharing&ouid=117530526653861550397&rtpof=true&sd=true" class="text-primary">https://docs.google.com/document/....</a></td>
                                    <td>30 July 2024, 08:0</td>
                                    <td>100</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
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
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Buku Catatan Docs
                                    </td>
                                    <td>
                                        Catatan
                                    </td>
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon>   </td>
                                    <td><a href="https://docs.google.com/document/d/1b2GHMxsvVcJgYf7isGtJ0DwHA-lbtvF2/edit?usp=sharing&ouid=117530526653861550397&rtpof=true&sd=true" class="text-primary">https://docs.google.com/document/....</a></td>
                                    <td>30 July 2024, 08:0</td>
                                    <td>100</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
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
                            </tbody>
                        </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

    @endpush
</x-app-main-layout>