<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "date_time",
        "usr_name",
        "addr",
        "phone",
        "email",
        "total_money",
    ];

    public function statuses(): BelongsTo
    {
        return $this->belongsTo(Status::class, "id_status", "id");
    }
}
