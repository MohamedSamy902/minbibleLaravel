<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'short_content', 'language_id', 'status', 'image_id', 'slug', 'category_id'];

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    protected static function boot()
    {
        parent::boot();
        static::created(function ($blog) {
            $blog->slug = $blog->generateSlug($blog->title);
            $blog->save();
        });
    }
    private function generateSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
}
