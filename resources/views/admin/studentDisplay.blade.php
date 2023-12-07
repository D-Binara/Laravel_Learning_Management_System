@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="table container">
        <table class="table-responsive-md  table-striped" width="1200px" >
            <tr class="bg-gradient-gray">
                <th>Student Name</th>
                <th>Email</th>
                <th > </th>
            </tr>
            @foreach($student as $stu)
                <tr>
                    <td>{{$stu->name}}</td>
                    <td >{{$stu->email}}</td>
                    <td><button class="btn btn-danger">Remove</button></td>
                </tr>
            @endforeach
        </table>
    </div>


@endsection
