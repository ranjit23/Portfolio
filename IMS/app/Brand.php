<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
        protected $fillable = ['brand_name', 'brand_status'];
        
        public function user()
        {
        	return $this->belongsTo(User::class);
        }

}
