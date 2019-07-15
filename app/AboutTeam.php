<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AboutTeam extends Model
{
    //
    protected $fillable=['worker_id','about_ru','about_hy','about_en'];
    public function textTrans($attr)
    {
        $locale=App::getLocale();
        $column=$attr.'_'.$locale;
        return $this->{$column};

    }

    function workers(){
        return $this->hasOne(Team::class, 'id', 'worker_id');
    }
}
