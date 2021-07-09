<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
   public function offerQuery(){
      //$result=Offer::select('id','name')->get();
      //------------------->insert to db
    //   $result=Offer::create([
    //       'name'=>'offer3',
    //       'price'=>3000,
    //       'details'=>'offer3 details']);
    // ----------------->  //update

    return $result;
   }

   public function addOffer(){

    return view('offers.add_offer');
   }

   public function store(Request $request){

       // validation code here
       $roles=[
           'name'=>"required |max:100|unique:offers,name",
           'price'=>"required|numeric",
           'details'=>"required",
       ];
       $messages=[
           'name.required' => trans("messages.offer name required"),
           'price.numeric' =>  __("offer price numeric")
       ];
       $validator=Validator::make($request->all(),$roles,$messages);
       if($validator ->fails()){
           return redirect()->back()->withErrors($validator)->withInput($request->all());
       }
    Offer::create([
        'name'=> $request->name,
        'price'=> $request->price,
        'details'=> $request->details,
    ]);
       return redirect()->back()->with(['success'=>'Offer Added successfully']);
   }
}
