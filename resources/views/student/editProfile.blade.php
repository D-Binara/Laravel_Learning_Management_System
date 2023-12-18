@extends('student.dashboard.studentDashboard')

@section('title', '| User | Dashboard')


@section('content')
    <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
        <div class="card" >
            <div class="card-body ">
                <form class="form-sample" method="post" action="{{route('editProfileDB')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center">Edit Your Profile</h3>
                    <div class="form-group">
                        <label>User Name :-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="User Name" name="user_name" id="user_name" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Profile Picture:-</label>
                        <label style="display: block" >
                            <input type="file" placeholder="Profile Picture" name="profile_picture" id="profile_picture" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Phone Number :-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Phone Number" name="phone_number" id="phone_number" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Mobile Number" name="mobile_number" id="mobile_number" class="form-control">
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label>Address:-</label>
                        <label style="display: block" >
                            <input type="text" placeholder="Address" name="address" id="address" class="form-control">
                        </label><br>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Example using fetch API
        document.querySelector('.form-sample').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            try {
                const response = await fetch('{{route('editProfileDB')}}', {
                    method: 'PUT',
                    body: formData,
                });
                // Handle the response accordingly
            } catch (error) {
                // Handle error
            }
        });
    </script>
@endsection
