<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akunAdmin;
use App\Models\kota;
use App\Models\provinsi;


class akunAdminController extends Controller
{
    function show()
    {
        // $dataAkunAdmin = akunAdmin::all();
        // return view('admin.akun',compact('dataAkunAdmin'));
        $datakota = kota::all();
        $dataprovinsi = provinsi::all();
        return view('auth.register',compact('datakota','8dataprovinsi'));
    }

    function create(Request $request)
    {
        
    }

    function show_kota()
    {
        // $datakota = kota::all();
        // return view('auth.register')->with('dataKota','datakota');
        // $dataprovinsi = provinsi::all();
        // return view('auth.register',compact('dataprovinsi'));
    }
    function show_kota_post()
    {

    }

    function show_provinsi()
    {
        // $dataprovinsi = provinsi::all();
        // return view('auth.register',compact('dataprovinsi'));
    }
    function show_provinsi_post()
    {

    }
}
