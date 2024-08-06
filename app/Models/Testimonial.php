<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the relative time when the product was created.
     *
     * @return string
     */
    public function getRelativeTimeAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans([
            'parts' => 1, // Limit to only one unit (e.g., '1m', '2h')
            'short' => true, // Use short versions (e.g., 'm' for minutes, 'h' for hours)
            'syntax' => Carbon::DIFF_ABSOLUTE, // Avoid "ago"
        ]);
    }
}
