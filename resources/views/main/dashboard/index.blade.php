<x-app-main-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Dashboard</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Statistics</li>
            </ul>
        </div>

        <div class="row row-cols-xxxl-3 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-3">
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-1 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Category</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="gridicons:multiple-users"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-2 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Link</p>
                                <h6 class="mb-0">15</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-3 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total View</p>
                                <h6 class="mb-0">500</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="fluent:people-20-filled"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-xl-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="mb-0">Your Last Link</h6>
                    </div>
                    <div class="card-body p-24">
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table sm-table mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col" class="text-center">Short Link</th>
                                        <th scope="col" class="text-center">Date</th>
                                        <th scope="col" class="text-center">Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="s.i-am.host/catatanHeru"
                                                class="text-primary-600 text-decoration-none">s.i-am.host/catatanHeru</a>
                                        </td>
                                        <td>30 July 2024, 08:0</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="s.i-am.host/catatanHeru"
                                                class="text-primary-600 text-decoration-none">s.i-am.host/catatanHeru</a>
                                        </td>
                                        <td>30 July 2024, 08:0</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="s.i-am.host/catatanHeru"
                                                class="text-primary-600 text-decoration-none">s.i-am.host/catatanHeru</a>
                                        </td>
                                        <td>30 July 2024, 08:0</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="s.i-am.host/catatanHeru"
                                                class="text-primary-600 text-decoration-none">s.i-am.host/catatanHeru</a>
                                        </td>
                                        <td>30 July 2024, 08:0</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="s.i-am.host/catatanHeru"
                                                class="text-primary-600 text-decoration-none">s.i-am.host/catatanHeru</a>
                                        </td>
                                        <td>30 July 2024, 08:0</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <button class="btn btn-primary-600"><iconify-icon icon="icon-park-outline:link" class="me-2" style="display:inline-block"></iconify-icon> Create Short Links</button>
        </div>
    </div>
</x-app-main-layout>