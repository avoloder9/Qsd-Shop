<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable=[
        'CategoryName'
    ];
    public function productCategory():BelongsTo{
        return $this->belongsTo(ProductCategory::class);
    }
}