<?php

namespace App\Http\Controllers;


use App\Http\Requests\OfferRequest;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
class OfferController extends Controller
{
   public function offerQuery(){
      $result=Offer::select('id','name')->get();
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

   public function store(OfferRequest $request){

       // validation code here Or done in OfferRequest

    Offer::create([
        'name_en'=> $request->name_en,
        'name_ar'=> $request->name_ar,
        'price'=> $request->price,
        'details_en'=> $request->details_en,
        'details_ar'=> $request->details_ar,
    ]);
       return redirect()->back()->with(['success'=>__('messages.Offer Added successfully')]);
   }


   public function showAllOffers(){
       //get data from database
       $offers= Offer::select('id',
           'name_'.LaravelLocalization::getCurrentLocale().' as name',
           'price',
           'details_'.LaravelLocalization::getCurrentLocale().' as details'
       )->get();

      return view('offers.show_all_offers')->with(compact('offers'));
   }
}
