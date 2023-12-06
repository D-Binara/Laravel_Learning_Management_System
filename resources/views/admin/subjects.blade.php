@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="table container">
        <table class="table-responsive-md  table-striped" width="1200px" >
            <tr class="bg-gradient-gray">
                <th>Subject</th>
                <th style="text-align: center">Subject Code</th>
                <th style="text-align: center">Subject Credit</th>
                <th > </th>
            </tr>
            @foreach($subject as $sub)
                <tr>
                    <td>{{$sub->subject_name}}</td>
                    <td style="text-align: center">{{$sub->subject_code}}</td>
                    <td style="text-align: center">{{$sub->subject_credit}}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
