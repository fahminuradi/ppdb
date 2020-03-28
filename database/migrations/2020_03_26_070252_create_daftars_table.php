<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->increments('id');
            // siswa
            $table->string('nama');
            $table->string('jk');
            $table->string('nisn');
            $table->string('tlahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('nik');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('kode_pos');
            $table->string('no_hp');
            $table->string('status');
            $table->string('anak');
            $table->string('saudara');
            $table->string('hobi');
            $table->string('citacita');
            $table->string('jarak');
            // ortu
            $table->string('ayah');
            $table->string('ibu');
            $table->string('k_ayah');
            $table->string('k_ibu');
            $table->string('p_ayah');
            $table->string('p_ibu');
            $table->string('tl_ayah');
            $table->string('tl_ibu');
            $table->date('l_ayah');
            $table->date('l_ibu');
            $table->string('a_ayah');
            $table->string('a_ibu');
            $table->string('pen_ayah');
            $table->string('pen_ibu');
            $table->string('hp_ayah');
            $table->string('hp_ibu');
            // sekolah
            $table->string('sekolah');
            $table->string('alamat_sekolah');
            $table->string('boarding');
            $table->string('jurusan');
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
        Schema::dropIfExists('daftars');
    }
}
