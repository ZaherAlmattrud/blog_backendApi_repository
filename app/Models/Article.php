<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;

    use SoftDeletes;

    //fillable attributes are used to specify those fields which are to be mass assigned. Guarded attributes are used to specify those fields which are not mass assignable.
   
    protected $guarded = []; 

    public function user(){
             
            return $this->belongsTo(User::class);

    }

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function comments(){

        return $this->hasMany(Comment::class);

    }

    public function owner($user_id){

    
        return $this->user_id == $user_id ;

    } 

    
}
