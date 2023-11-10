@extends('dashboard.admin.layouts.admin')

@section('title', '| Admin | Dashboard')

@section('content')

@endsection

@section('content_Home')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($users as $user)
                            <div>{{ $user->email }}</div>
                        @endforeach

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_Home2')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Your Subjects') }}</div>

                    <div class="card-body">
                        <a class="nav-link" href="#">
                            <div class="card-body">Information System</div>
                        </a>
                        <a class="nav-link" href="#">
                            <div class="card-body">Risk Management</div>
                        </a>
                        <a class="nav-link" href="#">
                            <div class="card-body">Data structures and algorithms</div>
                        </a>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

