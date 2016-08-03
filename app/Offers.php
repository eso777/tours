<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model {

	protected $fillable = ['id', 'hotel_id', 'nights', 'type', 'desc', 'price',
			'country_id','city_id', 'slug_ar',
			'slug_en','meta_desc_ar','meta_desc_en', 
			'tags_ar','tags_en'];
							
}
