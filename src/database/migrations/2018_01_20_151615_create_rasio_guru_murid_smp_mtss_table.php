<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRasioGMSmpMtssTable extends Migration {

    public function up()
    {
        Schema::create('rasio_guru_murid_smp_mtss', function(Blueprint $table) {
            $table->increments('id');
            $table->string('negara', 191);
            $table->integer('province_id')->unsigned()->nullable()->index();
            $table->boolean('kab_kota')->index();
            $table->integer('regency_id')->unsigned()->nullable()->index();
            $table->string('tahun', 191);
            $table->decimal('data')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('rasio_guru_murid_smp_mtss');
    }
}
