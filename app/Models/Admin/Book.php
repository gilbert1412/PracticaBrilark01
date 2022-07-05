<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded=['id','create_at','update_at'];
    public function editorial()
    {
        //return $this->belongsTo(Editorial::class);
        //return $this->hasMany(Editorial::class);
        $editorial=Editorial::where('id',$this->id_editorial)->first();
        return $editorial;
    }
}

