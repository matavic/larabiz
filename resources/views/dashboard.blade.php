@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <span class="float-right"><a href="/listings/create" class='btn btn-success btn-sm'>Add Listing</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Your Listings</h4>
                    @if($listings)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr> 
                                    <td>  
                                        {{$listing->name}}
                                    </td>
                                <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-warning float-right">Edit</a></td>
                                    <td>
                                        <form action="{{action('ListingController@destroy', ['id' => $listing->id])}}" method='POST' class="float-left" onsubmit="confirm('Are you sure?')">
                                        @method('DELETE')
                                        @csrf
                                        <span><input type="submit" value="Delete" class='btn btn-danger'></span>
                                        </form>
                                    </td>
                                </tr>    
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
