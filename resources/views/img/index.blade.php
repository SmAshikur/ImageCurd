@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <a class="btn btn-primary" href="{{url('img/create')}}"></a>
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
                                    <img src="{{asset('images/'.$img->image)}}" height="100%" width="100%">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
