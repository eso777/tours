<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelsReservations extends Model {

	protected $table = "hotels_reservations" ;
 	protected $fillable = ['hotel_id','user_id','persons','date_from','date_to']; 

}
