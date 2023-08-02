<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_Details extends Model
{
    use HasFactory;
    protected $fillable = [
        "price"
    ];


    public function orders(): BelongsTo
    {
        return $this->belongsTo(Status::class, "id_orders", "id");
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Status::class, "id_prd", "id");
    }
}
