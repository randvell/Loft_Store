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
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * @return Collection
     */
    public function getProducts(): Collection
    {
        return Product::query()
            ->orderBy('id', 'DESC')
            ->where('category_id', '=', $this->id)
            ->get();
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
