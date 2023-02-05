<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'language_id', 'status', 'image_id', 'audio', 'pdf'];



    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
