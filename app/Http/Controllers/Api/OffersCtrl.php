<?php namespace App\Http\Controllers\api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ApiSettings ;
use App\CarsOffers ;
use Validator ;

class OffersCtrl extends Controller {

	
	public function api()
	{
		return ApiSettings::first() ;
	}

	public function searchOffers(Request $bag)
	{
		$rules = ['secret'=>'required','country_id' =>'required'];
		$validator = Validator::make($bag->all(), $rules);
		if($validator->fails())
		{
			return response()->json(['status'=>'400' , 'msg'=>'Some Errors happend', 'Errors'=>$validator->errors()->all()], 400);
		}

		if($bag->secret !== @$this->api()->secret)
		{
			return response()->json(['status'=>'400' , 'msg'=>'Wrong secret Key'],400);
		}

		$query = CarsOffers::where('country_id', $bag->country_id) ;
		
		if($bag->has('brand_id'))
		{
			$query->where('brand_id', $bag->brand_id) ;
		}

		$offers = $query->get() ;
			
		if($offers->count() == 0)
		{
			return response()->json(['status'=>'400' , 'msg'=>'No data to show'],400);
		}

		return response()->json(['status'=>'200' , 'data'=>$offers],200);
	} // End Function 
		
}// End Class 
