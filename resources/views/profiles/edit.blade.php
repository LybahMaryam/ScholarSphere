@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $profile->name ?? '' }}" required>
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control">{{ $profile->bio ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Website Link</label>
            <input type="url" name="link" class="form-control" value="{{ $profile->link ?? '' }}">
        </div>
        <div class="form-group">
            <label>Profile Picture</label>
            <input type="file" name="profile_picture" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
