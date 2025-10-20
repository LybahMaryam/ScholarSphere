<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('elibraries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Reference to user
            $table->string('title');
            $table->string('author');
            $table->string('file_path')->nullable(); // If they upload a file
            $table->string('link')->nullable(); // If they provide a link
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('elibraries');
    }
};
