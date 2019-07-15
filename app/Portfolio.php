<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Portfolio extends Model
{
    //
    protected $fillable=['title_hy','title_ru','title_en','text_ru','text_hy','text_en','client_ru','client_hy','client_en','project_url','color','photo'];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }
}
