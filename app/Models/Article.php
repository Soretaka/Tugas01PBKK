<?php

namespace App\Models;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}

