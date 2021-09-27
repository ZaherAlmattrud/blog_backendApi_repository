<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('image')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('enable_comments')->default(1);
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->bigInteger('like')->nullable();;
            $table->bigInteger('deslike')->nullable();;
            $table->bigInteger('rank')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
