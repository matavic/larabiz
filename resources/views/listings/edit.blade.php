@extends('layouts.app');

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing
                    <a href="/dashboard" class="btn btn-secondary btn-sm float-right">Go Back</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{action('ListingController@update', ['id' => $listing->id])}}" method='POST'>
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class='form-control' value="{{$listing->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" class='form-control' value="{{$listing->address}}">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" name="website" id="website" class='form-control' value="{{$listing->website}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class='form-control' value="{{$listing->email}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" name="phone" id="phone" class='form-control' value="{{$listing->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <textarea name="bio" id="bio" class='form-control'>{{$listing->bio}}</textarea>
                        </div>
                        <div>
                            <input type="submit" value="Save Listing" class='btn btn-primary'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection