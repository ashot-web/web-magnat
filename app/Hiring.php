<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Hiring extends Model
{
    //
    protected $fillable=['title_hy','title_ru','title_en','about_ru','about_hy','about_en','position_hy','position_en','position_ru','photo'];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }
}
