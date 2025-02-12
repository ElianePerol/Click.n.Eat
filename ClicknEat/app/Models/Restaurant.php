<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = "restaurants";
    protected $fillable = [ 
        "name",
        "restaurant_id"
    ];

    public function categories() {
        return $this->hasMany(Category::class);
    }
}
