<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_details', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('email',200);
            $table->string('password',200);
            $table->string('text',200);
            $table->text('address',200);
            $table->date('date');
            $table->enum('Gender',['M','F','O']);
            $table->timestamps();

        });
    
    }

  
    
    public function down()
    {
        Schema::dropIfExists('_details');
    }
        }
        