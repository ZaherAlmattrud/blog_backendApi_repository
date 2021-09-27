<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    //fillable attributes are used to specify those fields which are to be mass assigned. Guarded attributes are used to specify those fields which are not mass assignable.
   
    //protected $fillable = ["id","name","deleted_at","created_at","updated_at"];

    protected $guarded = []; 

    public function articles (){

        return $this->hasMany(Article::class);

    }

    
}
