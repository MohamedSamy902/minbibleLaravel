<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'original_name'];


    public function section()
    {
        return $this->hasMany(Section::class, 'image_id', 'id');
    }

    public function blog()
    {
        return $this->hasMany(Blog::class, 'image_id', 'id');
    }


    public function product()
    {
        return $this->hasMany(Product::class, 'image_id', 'id');
    }

    public function nonmuslim()
    {
        return $this->hasMany(NonMuslim::class, 'image_id', 'id');
    }
}
