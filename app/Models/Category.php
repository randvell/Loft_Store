<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App\Models
 *
 * @property-read int $id
 * @property string $name
 * @property string $description
 * @property-read Product[] $products
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * @param int|null $limit
     *
     * @return Collection
     */
    public function getProducts(?int $limit): Collection
    {
        $products = Product::query()
            ->orderBy('id', 'DESC')
            ->where('category_id', '=', $this->id);

        if ($limit) {
            $products->limit($limit);
        }

        return $products->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
