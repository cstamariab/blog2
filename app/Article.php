<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','content','category_id','user_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
