<?php



namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    protected $fillable = ['title','description'];

    public static $messages = [
        'title.required' => 'Es necesario ingresar un titulo para el proyecto.',
        'title.min' => 'El titulo del Proyecto no puede ser menos de 3 caractenes.'
    ];
    public static $rules = [
        'title' => 'required|min:3'
    ];
    
    public function getFeaturedImageUrlAttribute()
    {
        if ($this->image)
            return '/images/drafts/'.$this->image;
        // else
        $firstDrafts = $this->drafts()->first();
        if ($firstDrafts)
            return $firstDrafts->featured_image_url;

        return '/images/default.gif';
    }
}
