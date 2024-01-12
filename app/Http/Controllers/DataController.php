<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class DataController extends Controller{
    public function index(){
        $data = array();
        $data[] = array("No Reg"=>121, "Nama"=>"pasien 1", "Tgl Lahir"=>"15-5-2003", "Gol Darah"=>"B", "No Telp"=>"555963852");
        $data[] = array("No Reg"=>122, "Nama"=>"pasien 2", "Tgl Lahir"=>"7-5-2005", "Gol Darah"=>"O", "No Telp"=>"555963845");
        $data[] = array("No Reg"=>123, "Nama"=>"pasien 3", "Tgl Lahir"=>"10-5-2000", "Gol Darah"=>"AB", "No Telp"=>"555963675");
        $data[] = array("No Reg"=>124, "Nama"=>"pasien 4", "Tgl Lahir"=>"2-5-2001", "Gol Darah"=>"B", "No Telp"=>"555963578");
        $data[] = array("No Reg"=>125, "Nama"=>"pasien 5", "Tgl Lahir"=>"27-5-2007", "Gol Darah"=>"A", "No Telp"=>"555963864");
        $data['dat_pasien'] = $data;
        return view('pasien')->with("data",$data);
    }
}