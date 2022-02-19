<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App\Models
 *
 * @property-read int $id
 * @property string $name
 * @property int $category_id
 * @property int $price
 * @property string $image
 * @property string $description
 * @property-read Category $category
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price', 'image', 'description'];

    /**
     * @return Model|null
     */
    public static function getRandomProduct(): ?self
    {
        return self::query()
            ->orderByRaw('RAND()')
            ->first();
    }

    /**
     * @return Collection
     */
    public static function getList(): Collection
    {
        return self::query()
            ->orderBy('id', 'DESC')
            ->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return Category::query()->find($this->category_id);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getCategory()->name;
    }
}
