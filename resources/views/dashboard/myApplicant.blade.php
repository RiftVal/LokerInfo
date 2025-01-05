@include('layouts/header')
<div class="container">
    <h1 class="text-center mt-3 mb-4">My Applicant</h1>
    <table class="table table-striped mt-4 mb-5">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Location Home</td>
                <td>No Telp</td>
                <td>Resume</td>
                <td>Surat Lamaran</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->home_location}}</td>
                    <td>{{$item->no_telp}}</td>
                    <td><a href="{{asset('storage/'.$item->resume)}}" class="btn btn-primary">Link Resume</a></td>
                    <td><a href="{{asset('storage/'.$item->job_applicant)}}" class="btn btn-primary">Link Job Applicant</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@include('layouts/footer')