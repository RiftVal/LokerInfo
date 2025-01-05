@include('layouts/header');
    <div class="container my-5">
        <h1 class="text-center">Pekerjaan Disimpan</h1>
        <p class="text-center text-muted">Berikut adalah daftar pekerjaan yang telah Anda simpan untuk ditinjau kembali.</p>
        <div class="row">
            <!-- Job Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Software Engineer</h5>
                        <p class="card-text"><strong>Perusahaan:</strong> PT Teknologi Masa Depan</p>
                        <p class="card-text"><strong>Lokasi:</strong> Jakarta, Indonesia</p>
                        <p class="card-text"><strong>Gaji:</strong> Rp10.000.000 - Rp15.000.000 / bulan</p>
                        <div class="d-flex justify-content-between">
                            <a href="/jobs/1" class="btn btn-primary">Lihat Detail</a>
                            <button class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Designer</h5>
                        <p class="card-text"><strong>Perusahaan:</strong> PT Kreatif Digital</p>
                        <p class="card-text"><strong>Lokasi:</strong> Bandung, Indonesia</p>
                        <p class="card-text"><strong>Gaji:</strong> Rp8.000.000 - Rp12.000.000 / bulan</p>
                        <div class="d-flex justify-content-between">
                            <a href="/jobs/2" class="btn btn-primary">Lihat Detail</a>
                            <button class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add More Job Cards as Needed -->
        </div>
    </div>
@include('layouts/footer');