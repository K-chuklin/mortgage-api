<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('mortgages', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->boolean('is_active')->default(false);
        $table->text('description')->nullable();
        $table->integer('percent')->check('percent <= 40');
        $table->integer('min_first_payment')->check('min_first_payment <= 98');
        $table->float('max_price');
        $table->float('min_price');
        $table->integer('min_term');
        $table->integer('max_term');
        $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('mortgages');
    }
};
