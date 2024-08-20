<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialLike extends Model
{
    use HasFactory;

    protected $fillable = ['testimonial_id', 'user_id'];

    // Define relationships
    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
