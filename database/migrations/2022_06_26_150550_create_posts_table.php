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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_content');
            $table->text('content');
            $table->foreignId('user_id')->default(1);
            $table->foreignId('category_id')->constrained();
            $table->integer('comments_count')->default(1);
            $table->integer('visit_count')->default(1);
            $table->enum('status',['draft', 'published']);
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
        Schema::dropIfExists('posts');
    }
};
