<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceDetail extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = ['place_id', 'detail_name', 'detail_value'];

    // Relationship to the Place model
    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
