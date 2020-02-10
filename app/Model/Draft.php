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
   /*  public function images(){
        return $this->hasMany(DraftImage::class);
    } 
    
    public function getFeaturedImageUrlAttribute()

    {

        $featuredImage = $this->images()->where('featured', true)->first();

        if (!$featuredImage)

            $featuredImage = $this->images()->first();



        if ($featuredImage) {

            return $featuredImage->url;

        }



        // default

        return '/images/default.gif';

    }*/
}
