<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SOP;
class Sop_step extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'image', 'youtube', 'list', 'priority', 'sop_id'];


    public function sop(){

        return $this->belongsTo(SOP::class,'id');

    }
}
