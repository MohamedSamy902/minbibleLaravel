<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Translation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'translation', 'section', 'language_id'];


    public function language(){
        return $this->belongsTo(Language::class);
    }


    public function scopeTransLang($query, $model)
    {
        if (DB::table('translations')->where('name','=', $model)->where('language_id', '=', session()->get('langID'))->exists()) {
            $aboutTheBook = $query->where('name', '=', $model)->where('language_id', '=', session()->get('langID'));
        } else {
            $aboutTheBook = $query->where('name','=', $model)->where('language_id', '=', 1);
        }

        return $aboutTheBook;
    }

}
