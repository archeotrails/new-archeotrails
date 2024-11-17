<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'category', // Category already existing in the table
        'location', // URL or address of the place
        'district',
        'photo', // Path for the uploaded photo
        'suggested_by',
        'status' // Accepted, Rejected, or Pending
    ];

    // Relationship to place details
    public function details()
    {
        return $this->hasMany(PlaceDetail::class);
    }

    // Relationship to the user who suggested the place
    public function suggestedBy()
    {
        return $this->belongsTo(User::class, 'suggested_by');
    }

    // Optional scope for filtering by category
    public function scopeCategorized($query, $category)
    {
        return $query->where('category', $category);
    }
}
