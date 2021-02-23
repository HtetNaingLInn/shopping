<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website__infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('logo');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->text('facebook')->nullable();
            $table->string('viber')->nullable();
            $table->boolean('is_disable_website')->default(false);
            $table->boolean('is_disable_app')->default(false);
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
        Schema::dropIfExists('website__infos');
    }
}
