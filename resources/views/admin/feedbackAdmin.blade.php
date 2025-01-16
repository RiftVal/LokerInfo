@include('layouts/header_admin')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
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
                            <th>Category name</th>
                            <th>Feed</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr id="jobRow{{$item->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->feed }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->created_at }}</td>
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
                                        <form action="{{ route('admin.update', $item->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="name" class="col-form-label">Category Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="slug" class="col-form-label">Description</label>
                                                        <input type="text" name="slug" class="form-control" value="{{ $item->slug }}">
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
