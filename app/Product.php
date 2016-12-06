<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'category_id'];

    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }

    public function getProductsByCategoryId($slug)
    {
        $resultado = Product::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->paginate(4);
        return $resultado;
    }
}
