<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HSLController extends Controller
{
    public function index3(){
        $data = array();
        $data[] = array("No Reg"=>121, "Nama"=>"pasien 1", "Jenis Pemeriksaan"=>"hemoglobin");
        $data[] = array("No Reg"=>122, "Nama"=>"pasien 2", "Jenis Pemeriksaan"=>"bakteri salmonella");
        $data[] = array("No Reg"=>123, "Nama"=>"pasien 3", "Jenis Pemeriksaan"=>"virus rubella");
        $data['dat_hasil'] = $data;
        return view('hasil')->with("data",$data);
    }
}

