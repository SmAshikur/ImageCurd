@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <a class="btn btn-primary mr-auto" href="{{url('img/create')}}">Home</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($imgs as $img )
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h2>{{$img->id}}</h2>
                                </div>
                                <div class="card-body">
                                    @if(File::exists('images/'.$img->image))
                                      <img src="{{asset('images/'.$img->image)}}" height="100%" width="100%">
                                    @else
                                    <img src="{{$img->image}}" height="100%" width="100%">
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-4">
                                            <a class="btn btn-success" href="{{url('image/'.$img->id.'/edit')}}">Edit</a>
                                        </div>
                                        <div class="col-4">
                                            <form action="{{url('image/'.$img->id)}}" method="get">@csrf 
                                                <button type="submit" class="btn btn-primary">Show</button>
                                            </form>
                                        </div>
                                        <div class="col-4">
                                            <form action="{{url('image/'.$img->id)}}" method="post">@csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-center">
                    {{$imgs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
