<?php

namespace App\Models;
use App\Models\SOP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['title','detail'];

    public function SOP(){
        return $this->belongsTo(SOP::class);
    }
}
