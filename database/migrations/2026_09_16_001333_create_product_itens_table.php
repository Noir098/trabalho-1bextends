<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('product_itens', function (Blueprint $table) {
            $table->id();
            // Chave estrangeira ligando com a tabela products
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantidade');
            $table->string('cor');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_itens');
    }
};
