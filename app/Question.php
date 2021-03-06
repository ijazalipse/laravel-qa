<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['title','body'];
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function setTitleAttributes($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
