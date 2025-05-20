<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 col-xl-6 grid-margin stretch-card">
                <div class="row w-100 flex-grow">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Data Jumlah Buku</p>
                                <p class="text-muted">25% Buku Pinjaman Setiap Minggu</p>
                                <div class="row mb-3">
                                    <div class="col-md-7">
                                        <div class="d-flex justify-content-between traffic-status">
                                            <div class="item">
                                                <p class="mb-">Jumlah Buku</p>
                                                <h5 class="font-weight-bold mb-0">1.000</h5>
                                                <div class="color-border"></div>
                                            </div>
                                            <div class="item">
                                                <p class="mb-">Buku Masuk</p>
                                                <h5 class="font-weight-bold mb-0">800</h5>
                                                <div class="color-border"></div>
                                            </div>
                                            <div class="item">
                                                <p class="mb-">Buku Keluar</p>
                                                <h5 class="font-weight-bold mb-0">100</h5>
                                                <div class="color-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="nav nav-pills nav-pills-custom justify-content-md-end"
                                            id="pills-tab-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                                    href="#pills-health" role="tab" aria-controls="pills-home"
                                                    aria-selected="true">
                                                    Day
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill"
                                                    href="#pills-career" role="tab" aria-controls="pills-profile"
                                                    aria-selected="false">
                                                    Week
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill"
                                                    href="#pills-music" role="tab" aria-controls="pills-contact"
                                                    aria-selected="false">
                                                    Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <canvas id="audience-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Pengunjung</p>
                                    <p class="text-success font-weight-medium">20.15 %</p>
                                </div>
                               
                                <canvas id="balance-chart" height="130"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <p class="card-title">Membaca Buku</p>
                                    <p class="text-success font-weight-medium">45.39 % </p>
                                </div>
                               
                                <canvas id="task-chart" height="130"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 grid-margin stretch-card">
                <div class="row w-100 flex-grow">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Jumlah Buku</p>
                                <p class="text-muted">Last update: 2 Hours ago</p>
                                <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                                    id="regional-chart-legend"></div>
                                <canvas height="280" id="regional-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <p class="card-title mb-0 me-1">Aktivitas Pengunjung</p>
                                    <div class="badge badge-info badge-pill">2</div>
                                </div>
                                <div class="d-flex flex-wrap pt-2">
                                    <div class="me-4 mb-lg-2 mb-xl-0">
                                        <p>Membaca</p>
                                        <h4 class="font-weight-bold mb-0">77.15 %</h4>
                                    </div>
                                    <div>
                                        <p>Melihat</p>
                                        <h4 class="font-weight-bold mb-0">14.15 %</h4>
                                    </div>
                                </div>
                            </div>
                            <canvas height="150" id="activity-chart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <p class="card-title">Jumlah Pengunjung</p>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <p class="text-muted">Last update: 2 Hours ago</p>
                                    <div
                                        class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                                        <div class="item me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="color-bullet"></div>
                                                <h5 class="font-weight-bold mb-0">50</h5>
                                            </div>
                                            <p class="mb-">Pengunjung</p>
                                        </div>
                                        <div class="item me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="color-bullet"></div>
                                                <h5 class="font-weight-bold mb-0">92%</h5>
                                            </div>
                                            <p class="mb-">Membaca</p>
                                        </div>
                                        <div class="item me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="color-bullet"></div>
                                                <h5 class="font-weight-bold mb-0">16%</h5>
                                            </div>
                                            <p class="mb-">Melihat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <canvas height="170" id="status-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
      