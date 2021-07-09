@extends("layouts.master")


@section("content")
<div class="container" style="min-height:700px; margin-top:100px;">
    <div class="col-sm-12">
        <h1>Add Offer</h1>
        <div
        <hr>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form method='post' action="{{route('offer.store')}}">
           @csrf

            <div class="form-group">
                <label for="name"> Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price"  id="price" value="{{ old('price') }}">
                @error('price')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="details">Details:</label>
                <textarea class="form-control" id="details" name="details" > {{ old('details') }} </textarea>
                @error('details')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Offer</button>
        </form>
    </div>
</div>
@stop
