

@extends('layouts.app')

@section('content')

<x-about-me-component></x-about-me-component>
{{--        <div class="container">--}}
{{--            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="name">Name:</label>--}}
{{--                    <input type="text" name="name" class="form-control" value="{{ $profile->name ?? '' }}">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="job">Job Title:</label>--}}
{{--                    <input type="text" name="job" class="form-control" value="{{ $profile->job ?? '' }}">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="image">Profile Picture:</label>--}}
{{--                    <input type="file" name="image" class="form-control">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Update Profile</button>--}}
{{--            </form>--}}
{{--        </div>--}}

@endsection
