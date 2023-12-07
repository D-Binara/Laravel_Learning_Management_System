@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
        <div class="card" >
            <div class="card-body ">
                <form class="form-sample" method="post" action="{{route('addStudentToDB')}}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center">Add Student</h3>
                    <div class="form-group">
                        <label>Student Name :-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Student Name" name="student_name" id="student_name" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Student Email :-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Student Email" name="student_email" id="student_email" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Password:-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Password" name="password" id="password" class="form-control">
                        </label><br>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

