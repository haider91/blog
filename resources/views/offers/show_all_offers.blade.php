@extends("layouts.master")


@section("content")
<div class="container" style="min-height:700px; margin-top:100px;">
    <div class="col-sm-12">
        <h1>{{__('messages.All Offers')}}</h1>
        <hr>
         <table class="table table-hover table-bordered text-center" >
             <thead>
             <th>{{__('messages.Id')}}</th>
             <th>{{__('messages.Name')}}</th>
             <th>{{__('messages.Price')}}</th>
             <th>{{__('messages.Details')}}</th>
             </thead>
             @foreach($offers as $offer)
             <tr>
                 <td>{{$offer->id}}</td>
                 <td>{{$offer->name}}</td>
                 <td>{{$offer->price}}</td>
                 <td>{{$offer->details}}</td>
             </tr>
             @endforeach
         </table>

    </div>
</div>
@stop
