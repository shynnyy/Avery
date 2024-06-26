<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable =['img','product_code', 'product_name','gender','category_id','price','quantity'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
