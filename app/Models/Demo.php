<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
        

    //

    protected $fillable = ['product_name','price','description','stock'];

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;


    protected function casts() : array
    {
        return [
            'is_avaliable' => 'boolean',
        ];
    }

}
