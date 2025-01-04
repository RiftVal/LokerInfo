@include('layouts/header_companies')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Companies Add Job</h1>
    </div>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add job
    </button>
    
    <!-- Modal -->
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
                    <label for="job_desc" class="col-form-label">Job Description:</label>
                    <input type="text" name="job_desc" class="form-control" id="job_desc">
                </div>
                <div class="mb-3">
                    <label for="job_salary" class="col-form-label">Job Salary:</label>
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
                     </select>
                </div>
                
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Require:</label>
                    <textarea class="form-control" id="message-text" name="job_require"></textarea>
                </div>
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



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Recruitmen</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <th>Job Name</th>
                            <th>Job Description</th>
                            <th>Companies Description</th>
                            <th>Location</th>
                            <th>Salary</th>
                            <th>Require</th>
                            <th>Employment Type</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item) 
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->job_name}}</td>
                            <td>{{$item->job_desc}}</td>
                            <td>{{$item->job_companiesDesc}}</td>
                            <td>{{$item->job_location}}</td>
                            <td>{{$item->job_salary}}</td>
                            <td>{{$item->job_require}}</td>
                            <td>{{$item->employment_type}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>
@include('layouts/footer_companies')
