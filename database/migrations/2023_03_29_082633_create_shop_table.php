<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });

        DB::table('shop')->insert([[
            'name' => 'ALDI',
            'logo' => 'img/aldi.png',
        ],

        [
            'name' => 'DIA',
            'logo' => 'img/dia.png',
        ],

        [
            'name' => 'LIDL',
            'logo' => 'img/lidl.png'
        ],
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
};
