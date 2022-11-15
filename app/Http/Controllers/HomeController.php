<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aduan_tb;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    function HomeIndex(){
        return view('index');
    }

    function DataInsert(request $request){
        $Nama_Pengadu = $request->input('Nama_Pengadu');
        $No_Tel = $request->input('No_Tel');
        $Email = $request->input('Email');
        $Aduan_Info = $request->input('Aduan_Info');
        $data = array('Nama_Pengadu'=>$Nama_Pengadu, 'No_Tel'=>$No_Tel, 'Email'=>$Email, 'Aduan_Info'=>$Aduan_Info);

        $isInsertSuccess = aduan_tb::insert($data);
        if($isInsertSuccess){
            return back()->with('success', 'Data Inserted');
        }else{
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}