@extends('dashboard.admin.layouts.admin')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="row">
    @foreach($subjects as $sub)
        {{-- Subject cards --}}
            <div class="card-gray col-4">
                <div class="card">
                    <div class="card-header">
                        {{$sub->subject_name}}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($sub->subject_image) }}"  alt="{{$sub->subject_name}}">
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection


