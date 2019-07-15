<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Contact extends Model
{
    //
    protected $fillable=['address_hy','address_ru','address_en','tel',];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }
}
