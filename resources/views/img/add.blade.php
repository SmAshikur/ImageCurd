@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <a class="btn btn-primary" href="{{url('img')}}"></a>
                </div>
                <form action="{{url('img')}}"  method="post" enctype="multipart/form-data">@csrf
                    <div class="card body">
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success d-flex justify-content-center"> Upload Image </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
