<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'short_name', 'direction', 'status', 'flag'];


    public function section()
    {
        return $this->hasMany(Section::class, 'language_id', 'id');
    }

    public function blog()
    {
        return $this->hasMany(Blog::class, 'language_id', 'id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'language_id', 'id');
    }

    public function category(){
        return $this->hasMany(Category::class, 'language_id', 'id');
    }

    public function nonmuslim()
    {
        return $this->hasMany(NonMuslim::class, 'language_id', 'id');
    }
}
