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
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price', 'image', 'description'];

    /**
     * @return Model|null
     */
    public static function getRandomProduct(): ?Model
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
}
