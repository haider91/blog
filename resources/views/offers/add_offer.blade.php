@extends("layouts.master")


@section("content")
<div class="container" style="min-height:700px; margin-top:100px;">
    <div class="col-sm-12">
        <h1>{{__('messages.Add Offer')}}</h1>
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
                <label for="name_en"> {{__('messages.Name_en')}}:</label>
                <input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') }}">
                @error('name_en')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="name_ar"> {{__('messages.Name_ar')}}:</label>
                <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{ old('name_ar') }}">
                @error('name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">{{__('messages.Price')}}:</label>
                <input type="text" class="form-control" name="price"  id="price" value="{{ old('price') }}">
                @error('price')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="details_en">{{__('messages.Details_en')}}:</label>
                <textarea class="form-control" id="details_en" name="details_en" > {{ old('details_en') }} </textarea>
                @error('details_en')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="details_ar">{{__('messages.Details_ar')}}:</label>
                <textarea class="form-control" id="details_ar" name="details_ar" > {{ old('details_ar') }} </textarea>
                @error('details_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{__('messages.Save Offer')}}</button>
        </form>
    </div>
</div>
@stop
