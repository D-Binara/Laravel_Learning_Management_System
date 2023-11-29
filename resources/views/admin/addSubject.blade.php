@extends('admin.layouts.adminDashboard')

@section('title', '| Admin | Dashboard')

@section('content')

    <div class="col-md-8 ps-5" >
        <form class="form-sample">
            <h3>Add Subject</h3>
            <label>Subject Name</label>
            <label>
                <input type="text" placeholder="Subject Name" class="display">
            </label><br>
            <label>Subject Credit</label>
            <label>
                <input type="number" placeholder="Subject Credit" class="display">
            </label><br>
            <label>Subject Name</label>
            <label>
                <input type="text" placeholder="Subject Name" class="display">
            </label>
        </form>
    </div>
@endsection

