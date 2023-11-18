@extends('dashboard.admin.layouts.admin')

@section('title', '| Admin | Dashboard')

@section('content')

    @foreach($subjects as $sub)
        {{-- Subject cards --}}
        <div class="row">
            <div class="card-gray col-4">
                <div class="card">
                    <div class="card-header">
                        {{$sub->subject_name}}
                    </div>
                    <div class="card-body">
                        <img href="" alt="SE">
                    </div>
                </div>
            </div>
            <div class="card-gray col-4">
                <div class="card">
                    <div class="card-header">
                        Software Engineer
                    </div>
                    <div class="card-body">
                        <img href="" alt="SE">
                    </div>
                </div>
            </div>
            <div class="card-gray col-4">
                <div class="card">
                    <div class="card-header">
                        Software Engineer
                    </div>
                    <div class="card-body">
                        <img href="" alt="SE">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection


