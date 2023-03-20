<?php

namespace App\Models;
use APP\Models\SOP;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','id'];

    public function sop(){
      return $this->belongsTo(SOP::class,'category_id');
    }


}
