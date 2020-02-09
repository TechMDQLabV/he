<?php



namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    protected $fillable = ['title','description'];
    
    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image)
            return '/images/drats/'.$this->image;
        // else
        $firstDrafts = $this->drafts()->first();
        if ($firstDrafts)
            return $firstDrafts->featured_image_url;

        return '/images/default.gif';
    }
}
