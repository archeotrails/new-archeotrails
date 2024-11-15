<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = ['name', 'description', 'category', 'location', 'image_url', 'rating'];

    // Relationship to place details
    public function details()
    {
        return $this->hasMany(PlaceDetail::class);
    }
}
