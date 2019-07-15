<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AboutOffice extends Model
{
    //
    protected $table='about_offices';
    protected $fillable=['about_ru','about_hy','about_en','title_ru','title_hy','title_en'];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }
}
