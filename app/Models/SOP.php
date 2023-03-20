<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Type;
use App\Models\Sop_step;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOP extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','type_id','title','category_id','description','steps'];

    public function category(){

        return $this->hasOne(Category::class,'id','category_id' );

    }
    public function type(){

        return $this->hasMany(Type::class,'id','type_id');

    }

    public function steps(){

        return $this->hasMany(Sop_step::class,'sop_id');

    }
    public function user(){

        return $this->hasOne(User::class,'id','user_id');

    }
    public function SOPid ()
    {

        return $this->where('id',$id)->first();

    }

}
