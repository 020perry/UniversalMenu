<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = ['name'];

    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'menu_item_category', 'category_id', 'menu_item_id');
    }
}
