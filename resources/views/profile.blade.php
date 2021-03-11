@extends('layout')

@section('form')
<div class="profile-form pt-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form method="POST" action="{{route('shout.saveprofile')}}" enctype="multipart/form-data">
                    @csrf
                    <h4>Update Your Profile</h4>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="nickname">Nickname</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" value="{{Auth::user()->nickname}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Profile Picture</label>
                        <input type="file" class="form-control" id="image" name="profileimage">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection