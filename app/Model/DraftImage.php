<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DraftImage extends Model
{
    /* public function draft(){
        return $this->belongsTo(Draft::class);
    } */

    public function getUrlAttribute()
    {
    	if (substr($this->image, 0, 4) === "http") {
    		return $this->image;
    	}

    	return '/images/drafts/' . $this->image;
    }
}
