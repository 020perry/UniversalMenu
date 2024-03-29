<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'menu_id';
    protected $fillable = ['name', 'description', 'email'];

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class, 'menu_id');
    }
}
