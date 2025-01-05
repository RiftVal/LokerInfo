@include('layouts/header')
<div class="container">

    <h1 class="text-center mt-4 mb-5">Job Applicant</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{route('job.storeApplicant')}}" method="POST">
                @csrf <!-- Token CSRF untuk keamanan -->
                
                <div class="mb-3">
                    <input class="form-control" type="" name="user_id" value="{{$data->id}}">
                    <input class="form-control" type="" name="job_id" value="{{$data->id}}">
                    <label for="user_id" class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="your name">
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">Home location</label>
                    <input class="form-control" type="text" name="home_location" placeholder="Home Location">
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">No Telp</label>
                    <input class="form-control" type="text" name="no_telp" placeholder="No tep">
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">Resume</label>
                    <input class="form-control" type="file" name="resume">
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">Application Letter</label>
                    <input class="form-control" type="file" name="surat_lamaran">
                </div>
            
                <button type="submit" class="btn btn-primary form-control mb-5 mt-2">Apply</button>
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>
@include('layouts/footer')