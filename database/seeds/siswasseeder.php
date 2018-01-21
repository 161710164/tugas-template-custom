<?php

use Illuminate\Database\Seeder;

class siswasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[ ["nis"=>"123","nama"=>"ucok","umur"=>"70","tempat_lahir"=>"jerman","tanggal_lahir"=>"1942-11-09","alamat"=>"Sayati","cita_cita"=>"panglima perang","hobi"=>"mancing"],
            ["nis"=>"124","nama"=>"albab","umur"=>"16","tempat_lahir"=>"bandung","tanggal_lahir"=>"2001-09-08","alamat"=>"Sayati","cita_cita"=>"menjadi seseorang yang luar biasa","hobi"=>"lumpat"],
            ["nis"=>"233","nama"=>"saepul","umur"=>"17","tempat_lahir"=>"arab","tanggal_lahir"=>"2000-06-09","alamat"=>"Bihbul","cita_cita"=>"Tukang Service","hobi"=>"Maen Bola"],
            ["nis"=>"126","nama"=>"lilis","umur"=>"70","tempat_lahir"=>"jerman","tanggal_lahir"=>"1943-11-09","alamat"=>"Sayati","cita_cita"=>"tukang masak","hobi"=>"makan"],
            ["nis"=>"190","nama"=>"saep","umur"=>"40","tempat_lahir"=>"jerman","tanggal_lahir"=>"1979-10-09","alamat"=>"Sayati","cita_cita"=>"panglima tiyampeng","hobi"=>"nenggel"],
            ["nis"=>"128","nama"=>"opik","umur"=>"60","tempat_lahir"=>"prancis","tanggal_lahir"=>"1962-08-09","alamat"=>"Sayati","cita_cita"=>"spiderman","hobi"=>"naek tangkal"],
            ["nis"=>"166","nama"=>"satroni","umur"=>"90","tempat_lahir"=>"jakarta","tanggal_lahir"=>"1999-09-09","alamat"=>"Ciodeng","cita_cita"=>"jadi batman","hobi"=>"ngapung"],
            ["nis"=>"144","nama"=>"jamil","umur"=>"20","tempat_lahir"=>"jawa","tanggal_lahir"=>"1992-12-09","alamat"=>"sekeloa","cita_cita"=>"tukang warnet","hobi"=>"maen warnet"],
            ["nis"=>"167","nama"=>"roti","umur"=>"10","tempat_lahir"=>"jawa","tanggal_lahir"=>"2005-11-02","alamat"=>"Sayati","cita_cita"=>"tukang roti","hobi"=>"makan roti"],
            ["nis"=>"136","nama"=>"aceng","umur"=>"30","tempat_lahir"=>"ciraos","tanggal_lahir"=>"1986-10-09","alamat"=>"Ciraos","cita_cita"=>"tukang seblak","hobi"=>"jualan seblak"], ];
        DB::table('siswas')->insert($a);
    }
}
