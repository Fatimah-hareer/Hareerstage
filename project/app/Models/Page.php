<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;
    protected $fillable = ['title', 'slug', 'details','meta_tag','meta_description'];
    public $timestamps = false;
        public $translatable = ['title','slug','details'];

}
