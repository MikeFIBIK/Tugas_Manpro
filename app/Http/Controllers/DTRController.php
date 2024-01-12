<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTRController extends Controller
{
    public function index2(){
        $data = array();
        $data[] = array("ID"=>1, "Nama"=>"Dokter 1", "Bagian"=>"spesialis", "No Telp"=>"555963892");
        $data[] = array("ID"=>2, "Nama"=>"Dokter 2", "Bagian"=>"spesialis", "No Telp"=>"555963789");
        $data['dat_dokter'] = $data;
        return view('dokter')->with("data",$data);
    }
}
