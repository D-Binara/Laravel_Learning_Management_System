@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
        <div class="card">
            <div class="card-body ">
                <form class="form-sample" method="post" action="{{route('addSubjectToDB')}}" enctype="multipart/form-data">
                    @csrf
                        <h3 class="text-center">Add Subject</h3>
                    <div class="form-group">
                        <label>Subject Name :-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Subject Name" name="subject_name" id="subject_name" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Code  &nbsp:-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Subject Code" name="subject_code" id="subject_code" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Credit :-</label>
                        <label style="display: block" >
                            <input type="number" placeholder="Subject Credit" name="subject_credit" id="subject_credit" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Image :-</label>
                        <label style="display: block" >
                            <input type="file" placeholder="Subject Image" name="subject_image" class="form-control">
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

