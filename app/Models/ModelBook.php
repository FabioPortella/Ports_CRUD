<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;
    protected $fillable=['title','id_user','pages','price'];
    protected $table = 'book';

    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }
}
