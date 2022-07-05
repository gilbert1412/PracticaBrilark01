<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $guarded=['id','create_at','update_at'];
    public function books(){
        return $this->hasMany(Book::class,'id');
        //return $this->belongsTo(Book::class);
        //$books=Book::where('id_editorial',$this->id)->get();
        //return $books;
    }
}
