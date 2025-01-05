@include('layouts/header');
    <div class="container my-5">
        <div class="d-flex justify-content-between mb-3">
            <div class="container">
                <h1>Pekerjaan Disimpan</h1>
                <p>Daftar pekerjaan yang telah Anda simpan untuk referensi mendatang.</p>
            </div>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="bi bi-plus"></i> Tambah Pekerjaan
            </button>
        </div>

        <!-- Statistik -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-briefcase"></i> Total Pekerjaan</h5>
                        <p class="card-text fs-4" id="totalJobs">0</p>
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

        <!-- Tabel Pekerjaan -->
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
                
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="jobForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Tambah Pekerjaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="jobId" name="id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Pekerjaan</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Perusahaan</label>
                            <input type="text" class="form-control" id="company" name="company" required>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Gaji</label>
                            <input type="text" class="form-control" id="salary" name="salary" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        let jobs = [
            { id: 1, title: 'Software Engineer', company: 'PT Teknologi Masa Depan', location: 'Jakarta', salary: 'Rp10.000.000 - Rp15.000.000' },
            { id: 2, title: 'UI/UX Designer', company: 'PT Kreatif Digital', location: 'Bandung', salary: 'Rp8.000.000 - Rp12.000.000' },
        ];

        function renderTable() {
            const tbody = document.querySelector("table tbody");
            const totalJobs = document.getElementById('totalJobs');
            tbody.innerHTML = jobs.map((job, index) => `
                <tr>
                    <td>${index + 1}</td>
                    <td>${job.title}</td>
                    <td>${job.company}</td>
                    <td>${job.location}</td>
                    <td>${job.salary}</td>
                    <td>
                        <button class="btn btn-sm btn-primary btn-icon" onclick="viewJob(${job.id})">
                            <i class="bi bi-eye"></i> Lihat
                        </button>
                        <button class="btn btn-sm btn-warning btn-icon" onclick="editJob(${job.id})" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger btn-icon" onclick="deleteJob(${job.id})">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            `).join('');
            totalJobs.textContent = jobs.length;
        }

        function resetForm() {
            document.getElementById('jobForm').reset();
            document.getElementById('jobId').value = '';
        }

        document.getElementById('jobForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const id = document.getElementById('jobId').value;
            const title = document.getElementById('title').value;
            const company = document.getElementById('company').value;
            const location = document.getElementById('location').value;
            const salary = document.getElementById('salary').value;

            if (id) {
                const job = jobs.find(job => job.id == id);
                job.title = title;
                job.company = company;
                job.location = location;
                job.salary = salary;
            } else {
                const newJob = { id: Date.now(), title, company, location, salary };
                jobs.push(newJob);
            }

            renderTable();
            resetForm();
            document.querySelector('#addModal .btn-close').click();
        });

        function editJob(id) {
            const job = jobs.find(job => job.id == id);
            document.getElementById('jobId').value = job.id;
            document.getElementById('title').value = job.title;
            document.getElementById('company').value = job.company;
            document.getElementById('location').value = job.location;
            document.getElementById('salary').value = job.salary;
        }

        function deleteJob(id) {
            if (confirm("Apakah Anda yakin ingin menghapus pekerjaan ini?")) {
                jobs = jobs.filter(job => job.id != id);
                renderTable();
            }
        }

        function viewJob(id) {
            const job = jobs.find(job => job.id == id);
            alert(`Detail Pekerjaan:\n\nJudul: ${job.title}\nPerusahaan: ${job.company}\nLokasi: ${job.location}\nGaji: ${job.salary}`);
        }

        document.addEventListener('DOMContentLoaded', renderTable);
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@include('layouts/footer');