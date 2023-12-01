@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-sm-8 justify-content-center ">
        <div class="card">
            <div class="card-body ">
                <form class="form-sample">
                        <h3 class="text-center">Add Subject</h3>
                    <div class="form-group">
                        <label>Subject Name :-</label>
                        <label>
                            <input type="text" placeholder="Subject Name" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Credit :-</label>
                        <label>
                            <input type="number" placeholder="Subject Credit" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Subject Image :-</label>
                        <label>
                            <input type="file" placeholder="Subject Name" class="form-control">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

