<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Team extends Model
{
    //
    protected $fillable=['name_hy','name_ru','name_en','about_ru','about_hy','about_en','position_hy','position_en','position_ru','photo'];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }
}
