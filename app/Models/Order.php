<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @package App\Models
 *
 * @property-read int $id
 * @property int $productId
 * @property string $customerName
 * @property string $email
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'customer_name', 'email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
