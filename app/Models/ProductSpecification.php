<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    protected $fillable = [
        'product_id',
        'specification_id',
        'type',
        'value',
    ];

    // Each specification belongs to one specification type (Capacity, Box Dia, etc.)
    public function specificationType()
    {
        return $this->belongsTo(ProductSpecificationType::class, 'specification_id');
    }
}
