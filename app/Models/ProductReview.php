<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ProductReview extends Model
{
    use HasFactory;



    protected $fillable = [
        'product_id',
        'user_id',
        'stars',
        'comment'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likes() {
        return $this->hasMany(ProductReviewLike::class, 'review_id');
    }


    /**
     * Get the relative time when the product was created.
     *
     * @return string
     */
    public function getRelativeTimeAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
}
