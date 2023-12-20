<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id('menu_item_id'); // Aangepaste primaire sleutelnaam
            $table->foreignId('menu_id')->constrained('menus', 'menu_id'); // Gebruik de aangepaste sleutelnaam
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('image')->nullable(); // Voeg een nullable image kolom toe
            $table->boolean('availability')->default(true)->nullable(); // Optional for Pro service
            $table->text('additional_descriptions')->nullable(); // Optional extended descriptions
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
