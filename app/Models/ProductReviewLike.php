<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviewLike extends Model
{
    use HasFactory;

    protected $fillable = ['review_id', 'user_id'];

    // Define relationships
    public function review()
    {
        return $this->belongsTo(ProductReview::class, 'review_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}