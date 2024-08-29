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
        <div class="modal fade" id="createShortLink" tabindex="-1" aria-labelledby="createShortLinkLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createShortLinkLabel">Create Short Link</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Select Category</option>
                                <option value="catatan">Catatan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="longLink" class="form-label">Long Link</label>
                            <textarea name="longLink" id="longLink" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="shortLink" class="form-label">Short Link</label>
                            <div class="input-group">
                                <span class="input-group-text bg-base">s.i-am.host/</span>
                                <input type="text" class="form-control">
                            </div>
                            <!-- <input type="text" class="form-control" id="shortLink" required> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary-600" data-bs-toggle="modal"
                data-bs-target="#createShortLink"><iconify-icon icon="ic:outline-plus"
                    style="display: inline-block"></iconify-icon> Create Short Link</button>
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
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon></td>
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
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon></td>
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
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon></td>
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
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon></td>
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
                                    <td><a href="https://s.i-am.host/bukuCatatan" class="text-primary">s.i-am.host/bukuCatatan</a> <iconify-icon icon="fa-regular:copy" class="d-inline-block text-secondary"></iconify-icon></td>
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
</x-app-main-layout>