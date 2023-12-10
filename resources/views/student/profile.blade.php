@extends('student.dashboard.studentDashboard')

@section('title', '| User | Dashboard')


@section('content')
    <style>
        body {
            background-color: #efefef;
        }

        .profile-pic {
            width: 200px;
            max-height: 200px;
            display: inline-block;

        }

        .file-upload {
            display: none;
        }

        .circle {
            border-radius: 100% !important;
            overflow: hidden;
            width: 128px;
            height: 128px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            position: absolute;
            top: 72px;
            
        }

        img {
            max-width: 100%;
            height: auto;

        }

        .p-image {
            position: absolute;
            top: 167px;
            right: 30px;
            color: #666666;
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .p-image:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        }

        .upload-button {
            font-size: 1.2em;
        }

        .upload-button:hover {
            transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
            color: #999;
        }

    </style>
    <div class="container">
        <div class="row justify-content-center h1" style="margin-top: 25px"> {{$details -> username}}</div>
        {{--profile picture--}}
        <div class="row">
            <div class="small-12 medium-2 large-2 columns">
                <div class="circle">
                    <img class="profile-pic"
                         src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

                </div>
                <div class="p-image">
                    <i class="fa fa-camera upload-button"></i>
                    <input class="file-upload" type="file" accept="image/*"/>
                </div>
            </div>
        </div>
        {{--profile picture end--}}
        <div class="table">
            <table class="d-flex justify-content-center">
                <tr>
                    <th>name:</th>
                    <th>{{$details -> name}}</th>
                </tr>
                <tr>
                    <th>Username:</th>
                    <th>{{$details -> username}}</th>
                </tr>
                <tr>
                    <th>Email:</th>
                    <th>{{$details -> email}}</th>
                </tr>
            </table>
        </div>
    </div>



@endsection
