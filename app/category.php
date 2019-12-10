<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'cate_name','cate_description','cate_status'
    ];
//    public function productType(){
//        return $this->hasMany('App\Models\ProductTypes','idCategory','id');
//    }
}
