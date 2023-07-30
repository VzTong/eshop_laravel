<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        "prd_code",
        "prd_names",
        "prd_heft",
        "id_cental",
        "prd_original_price",
        "prd_selling_price",
        "prd_details",
        "prd_cover"
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, "prd_code", "ctg_code");
    }

    protected $table = 'products';

    public function cental() : BelongsTo
    {
        return $this->belongsTo(Cental::class, "id_cental", "id");
    }
}
