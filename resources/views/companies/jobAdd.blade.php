@include('layouts/header_companies')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Companies Add Job</h1>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add job
    </button>
    
    <!-- Modal Add Job -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Job</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('job.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="job_name" class="col-form-label">Job Name</label>
                                    <input type="text" name="job_name" class="form-control" id="job_name">
                                </div>
                                <div class="mb-3">
                                    <label for="job_location" class="col-form-label">Job Location</label>
                                    <input type="text" name="job_location" class="form-control" id="job_location">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="job_desc" class="col-form-label">Job Description</label>
                                    <input type="text" name="job_desc" class="form-control" id="job_desc">
                                </div>
                                <div class="mb-3">
                                    <label for="job_salary" class="col-form-label">Job Salary</label>
                                    <input type="text" name="job_salary" class="form-control" id="job_salary">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="job_companiesDesc" class="col-form-label">Job Companies Description</label>
                                <input type="text" name="job_companiesDesc" class="form-control" id="job_companiesDesc">
                            </div>

                            <div class="mb-3">
                                <label for="employment_type" class="col-form-label">Employment Type</label>
                                <select name="employment_type" id="employment_type" class="form-control">
                                    <option value="Full-time">Full</option>
                                    <option value="Part-time">Part</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Require:</label>
                                <textarea class="form-control" id="message-text" name="job_require"></textarea>
                            </div>
                            {{-- <div>
                                <label for="job_image">Job Image</label>
                                <input type="file" id="job_image" name="job_image">
                                @error('job_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Print All Button -->
    <button class="btn btn-info mb-3" onclick="printAllJobs()">Print All Jobs</button>

    <!-- Table of Jobs -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Recruitment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Job Name</th>
                            <th>Job Description</th>
                            <th>Companies Description</th>
                            <th>Location</th>
                            <th>Salary</th>
                            <th>Require</th>
                            <th>Employment Type</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr id="jobRow{{ $item->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td class="job-name">{{ $item->job_name }}</td>
                            <td class="job-desc">{{ $item->job_desc }}</td>
                            <td class="job-companiesDesc">{{ $item->job_companiesDesc }}</td>
                            <td class="job-location">{{ $item->job_location }}</td>
                            <td class="job-salary">{{ $item->job_salary }}</td>
                            <td class="job-require">{{ $item->job_require }}</td>
                            <td class="job-employment-type">{{ $item->employment_type }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <!-- Edit Button -->
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editJobModal{{ $item->id }}">Edit</button>

                                <!-- Delete Button -->
                                <form action="{{ route('job.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                                <!-- Print Button for Individual Job -->
                                <!-- Tombol Print untuk setiap pekerjaan -->
                                <button class="btn btn-info btn-sm" data-job-id="{{ $item->id }}" onclick="printJob(this)">Print</button>

                            </td>
                        </tr>

                        <!-- Modal Edit Job -->
                        <div class="modal fade" id="editJobModal{{ $item->id }}" tabindex="-1" aria-labelledby="editJobModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editJobModalLabel">Edit Job</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('job.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="job_name" class="col-form-label">Job Name</label>
                                                        <input type="text" name="job_name" class="form-control" value="{{ $item->job_name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="job_location" class="col-form-label">Job Location</label>
                                                        <input type="text" name="job_location" class="form-control" value="{{ $item->job_location }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="job_desc" class="col-form-label">Job Description</label>
                                                        <input type="text" name="job_desc" class="form-control" value="{{ $item->job_desc }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="job_salary" class="col-form-label">Job Salary</label>
                                                        <input type="text" name="job_salary" class="form-control" value="{{ $item->job_salary }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="job_companiesDesc" class="col-form-label">Job Companies Description</label>
                                                    <input type="text" name="job_companiesDesc" class="form-control" value="{{ $item->job_companiesDesc }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="employment_type" class="col-form-label">Employment Type</label>
                                                    <select name="employment_type" id="employment_type" class="form-control">
                                                        <option value="Full-time" {{ $item->employment_type == 'Full-time' ? 'selected' : '' }}>Full</option>
                                                        <option value="Part-time" {{ $item->employment_type == 'Part-time' ? 'selected' : '' }}>Part</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="job_require" class="col-form-label">Require</label>
                                                    <textarea class="form-control" name="job_require">{{ $item->job_require }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    // Function to print individual job details
        function printJob(button) {
        var jobId = button.getAttribute('data-job-id');
        var jobRow = document.querySelector(`#jobRow${jobId}`);
        var printWindow = window.open('', '_blank', 'width=600,height=400');
        
        printWindow.document.write('<html><head><title>Cetak Pekerjaan</title></head><body>');
        printWindow.document.write('<h3>Detail Pekerjaan</h3>');
        printWindow.document.write('<table border="1"><tr><th>Nama Pekerjaan</th><th>Deskripsi</th><th>Lokasi</th><th>Gaji</th><th>Persyaratan</th><th>Jenis Pekerjaan</th></tr>');
        
        printWindow.document.write(`<tr><td>${jobRow.querySelector('.job-name').innerText}</td>`);
        printWindow.document.write(`<td>${jobRow.querySelector('.job-desc').innerText}</td>`);
        printWindow.document.write(`<td>${jobRow.querySelector('.job-location').innerText}</td>`);
        printWindow.document.write(`<td>${jobRow.querySelector('.job-salary').innerText}</td>`);
        printWindow.document.write(`<td>${jobRow.querySelector('.job-require').innerText}</td>`);
        printWindow.document.write(`<td>${jobRow.querySelector('.job-employment-type').innerText}</td></tr>`);
        
        printWindow.document.write('</table></body></html>');
        printWindow.document.close();
        printWindow.print();
    }

    // Function to print all job details
// Function to print all job details
// Function to print all job details without the Edit and Delete buttons
// Function to print all job details without the Edit and Delete buttons, with borders
function printAllJobs() {
    var printWindow = window.open('', '_blank', 'width=600,height=400');
    
    // Clone the table to manipulate it without affecting the original table
    var table = document.querySelector('#dataTable').cloneNode(true);

    // Remove the "Actions" column
    var headerRow = table.querySelector('thead tr');
    var bodyRows = table.querySelectorAll('tbody tr');

    // Find the index of the "Actions" column and remove it from both header and body rows
    var actionsIndex = Array.from(headerRow.children).findIndex(th => th.textContent === 'Actions');
    if (actionsIndex !== -1) {
        // Remove the "Actions" column in the header
        headerRow.children[actionsIndex].remove();

        // Remove the "Actions" column in each body row
        bodyRows.forEach(row => {
            row.children[actionsIndex].remove();
        });
    }

    // Create the content for printing
    printWindow.document.write('<html><head><title>Cetak Semua Pekerjaan</title>');
    
    // Add CSS for table borders
    printWindow.document.write(`
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    `);
    
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h3>Daftar Pekerjaan</h3>');
    printWindow.document.write(table.outerHTML);  // Append the modified table
    printWindow.document.write('</body></html>');
    
    // Close the document and trigger the print dialog
    printWindow.document.close();
    printWindow.print();
}
</script>

@include('layouts/footer_companies')
