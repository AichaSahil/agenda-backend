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
        Schema::create('rendez_vous_date',function(BluePrint $table){
            $table->id();
            $table->string('date_time');
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            // $table->datetime('date_time')->nullable();
        });
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendez_vous_date');
        
    }
};
