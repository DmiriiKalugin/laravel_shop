<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $measure
 * @method static inRandomOrder()
 */
class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'measure'
    ];

    public $timestamps = false;


    /**
     * @return BelongsToMany
     */
    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'specification_product')->withPivot('value');
    }
}
