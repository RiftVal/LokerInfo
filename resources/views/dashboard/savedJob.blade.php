@include('layouts/header');
    <div class="container">
        <div class="header-card">
            <h1>Pekerjaan Disimpan</h1>
            <p>Daftar pekerjaan yang telah Anda simpan untuk referensi mendatang.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-briefcase"></i> Total Pekerjaan</h5>
                        <p class="card-text fs-4">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-calendar-check"></i> Disimpan Bulan Ini</h5>
                        <p class="card-text fs-4">5</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person"></i> Lamaran Aktif</h5>
                        <p class="card-text fs-4">3</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul Pekerjaan</th>
                        <th>Perusahaan</th>
                        <th>Lokasi</th>
                        <th>Gaji</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Software Engineer</td>
                        <td>PT Teknologi Masa Depan</td>
                        <td>Jakarta</td>
                        <td>Rp10.000.000 - Rp15.000.000</td>
                        <td>
                            <button class="btn btn-sm btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#viewModal">
                                <i class="bi bi-eye"></i> Lihat
                            </button>
                            <button class="btn btn-sm btn-danger btn-icon">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>UI/UX Designer</td>
                        <td>PT Kreatif Digital</td>
                        <td>Bandung</td>
                        <td>Rp8.000.000 - Rp12.000.000</td>
                        <td>
                            <button class="btn btn-sm btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#viewModal">
                                <i class="bi bi-eye"></i> Lihat
                            </button>
                            <button class="btn btn-sm btn-danger btn-icon">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@include('layouts/footer');