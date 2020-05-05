@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-8 offset-2">

                <!-- --------------- YE OL TITLE --------------- -->
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <!-- --------------- //YE OL TITLE --------------- -->

                <!-- --------------- IMAGE UPLOAD --------------- -->
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    
                    <input  id="caption" 
                            type="text" 
                            class="form-control @error('caption') is-invalid @enderror" 
                            caption="caption" 
                            value="{{ old('caption') }}" 
                            autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <!-- --------------- //IMAGE UPLOAD --------------- -->

                <!-- --------------- IMAGE FOR POST --------------- -->
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $image }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- --------------- //IMAGE FOR POST --------------- -->

                <!-- --------------- SUBMIT BUTTON --------------- -->
                <div class="row pt-4">
                    <button class="btn btn-primary">Add new post</button>
                </div>
                <!-- --------------- SUBMIT BUTTON --------------- -->

            
            </div> 
        </div>    
    </form>
</div>
@endsection
