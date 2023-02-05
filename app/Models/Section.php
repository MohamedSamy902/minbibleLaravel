<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Section extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['title', 'content', 'model', 'linke', 'language_id', 'status', 'image_id'];

    // protected static function booted()
    // {
    //     static::addGlobalScope('ancient', function (Builder $builder) {
    //         if (DB::table('sections')->where('language_id', '=', session()->get('langID'))->exists()) {
    //             $builder->where('language_id', '=', session()->get('langID'));
    //         }else {
    //             $builder->where('language_id', '=', 1);
    //         }
    //     });
    // }

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
