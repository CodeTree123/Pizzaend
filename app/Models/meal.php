<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function item()
    {
        return $this->belongsTo(item::class,'item_id','id');
    }
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
