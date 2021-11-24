@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <a class="btn btn-primary" href="{{url('img')}}">Home</a>
                </div>
                <div class="card-body">
                    @if(File::exists('images/'.$image->image))
                                      <img src="{{asset('images/'.$image->image)}}" height="100%" width="100%">
                                    @else
                                    <img src="{{$image->image}}" height="100%" width="100%">
                                    @endif
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4 pr-5">
                            <a class="btn btn-success" href="{{url('image/'.$image->id.'/edit')}}">Edit</a>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4 ">
                            <form action="{{url('image/'.$image->id)}}" method="post">@csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
