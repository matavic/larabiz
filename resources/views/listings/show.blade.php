@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-hand-point-right"> </i>
                    <h2 class="d-inline">{{$listing->name}}</h2>
                    <a href="/dashboard" class="btn btn-secondary btn-sm float-right">Go Back</a>
                </div>
                <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Address : <strong>{{$listing->address}}</strong>
                            </li>
                                                        <li class="list-group-item">
                                Website : <strong><a href="{{url($listing->website)}}" target="_blank">{{$listing->website}}</a></strong>
                            </li>
                                                        <li class="list-group-item">
                                Email : <strong>{{$listing->email}}</strong>
                            </li>
                                                        <li class="list-group-item">
                                Phone Number : <strong>{{$listing->phone}}</strong>
                            </li>
                                                        <li class="list-group-item">
                                Bio : <strong>{{$listing->bio}}</strong>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
<h2></h2>
@endsection