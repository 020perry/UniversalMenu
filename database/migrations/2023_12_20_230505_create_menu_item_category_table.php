<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('menu_item_category', function (Blueprint $table) {
            $table->foreignId('menu_item_id')->constrained('menu_items', 'menu_item_id');
            $table->foreignId('category_id')->constrained('categories', 'category_id');
            $table->primary(['menu_item_id', 'category_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_item_category');
    }
}
