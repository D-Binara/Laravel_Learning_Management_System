@extends('student.dashboard.studentDashboard')

@section('title', '| User | Dashboard')

@section('content')
    <div class="container" style="margin-top: 25px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3 style="text-align: center">Hello {{ $loggedInUser->username }}</h3>
                        <h3 style="text-align: center">Welcome To LMS</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection





