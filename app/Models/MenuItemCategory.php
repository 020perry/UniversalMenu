<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MenuItemCategory extends Pivot
{
    protected $table = 'menu_item_category';
    // Voeg hier eventuele extra velden of functionaliteiten toe
}
