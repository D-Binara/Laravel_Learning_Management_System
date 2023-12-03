@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-sm-12 d-flex justify-content-center ">
        <div class="card">
            <div class="card-body ">
                <form class="form-sample" method="post" action="{{route('addSubjectToDB')}}">
                        <h3 class="text-center">Add Subject</h3>
                    <div class="form-group">
                        <label>Subject Name :-</label>
                        <label>
                            <input type="text" placeholder="Subject Name" name="subject_name" id="subject_name" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Credit :-</label>
                        <label>
                            <input type="number" placeholder="Subject Credit" name="subject_credit" id="subject_credit" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Image :-</label>
                        <label>
                            <input type="file" placeholder="Subject Image" class="form-control">
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

