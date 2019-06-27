<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'detail',
        'status'
    ];
    public function getType(){
        return $this->belongsTo(Type::class,'type');
    }
}
