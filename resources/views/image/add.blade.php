@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{url('image')}}" method="post">@csrf
                       <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image" class="form-contorl">
                        @error('image')
                             <span>{{$message}}</span>
                        @enderror
                    </div>
                       <div class="form-group">
                            <button type="submit" class="btn btn-success d-flex justify-content-center" >Upload</button>
                       </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
