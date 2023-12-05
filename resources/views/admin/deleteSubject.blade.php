@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-sm-12 d-flex justify-content-center ">
        <div class="card">
            <div class="card-body ">
                <form class="form-sample" method="post" action="{{route('deleteSubjectFromDB')}}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center">Delete Subject</h3>
                    <div class="form-group">
                        <label>Subject Name :-</label>
                        <label>
                            <input type="text" placeholder="Subject Name" name="subject_name" id="subject_name" class="form-control">
                        </label><br>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
