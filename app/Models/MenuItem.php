<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $primaryKey = 'menu_item_id';
    protected $fillable = ['menu_id', 'name', 'price', 'description', 'availability', 'additional_descriptions', 'image'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'menu_item_category', 'menu_item_id', 'category_id');
    }
}
