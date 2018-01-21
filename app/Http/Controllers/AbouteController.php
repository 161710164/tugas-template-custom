<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
class AbouteController extends Controller
{

    public function index()
    {
    	$a='<i><h2>ini halaman aboute</h2></i>';
    	$b='<b>15 jenuary 2018';
    	return view ('escape',compact('a','b'));
    }

    public function tabel()
{
    $asd = siswa::all();
        return view ('test',compact('asd'));
}

    public function template2()
    {
    	return view ('test2');
    }
    public function template3()
    {
    	return view ('test3');
    }
    public function template4()
    {
    	return view ('test4');
    }
    public function template5()
    {
    	return view ('test5');
    }
}
