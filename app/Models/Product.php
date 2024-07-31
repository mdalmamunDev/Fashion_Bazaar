<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'details',
        'price',
        'brand',
        'img',
        'dis_rate'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * Calculate the final price based on discount rate.
     *
     * @return float
     */
    public function getFinalPriceAttribute()
    {
        // Calculate the final price if a discount rate is applied
        $discount = $this->attributes['dis_rate'] ?? 0;
        $price = $this->attributes['price'] ?? 0;
        $finalPrice = number_format($price - ($price * ($discount / 100)), 2);

        // Remove decimal digits if they are zero
        return ($finalPrice == (int) $finalPrice) ? (int) $finalPrice : $finalPrice;
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

    /**
     * Get the formatted discount rate.
     *
     * @return float || int
     */
    public function getDisRateFrmAttribute()
    {
        $dis = $this->attributes['dis_rate'];
        return $dis == (int) $dis ? (int) $dis : $dis;
    }
}

