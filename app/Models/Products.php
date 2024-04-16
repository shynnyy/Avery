<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable =['img','product_code', 'product_name','category_id','price','quantity','size_id','color_id'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function Color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }
    public function Size()
    {
        return $this->belongsTo(Size::class,'size_id');
    }
}
