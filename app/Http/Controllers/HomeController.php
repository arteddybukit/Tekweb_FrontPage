<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title="Landing Page";
        // $barangs=[(object)[
        //     'barang_code'=>'DUmmy Code',
        //     'barang_name'=>'Nike Air Tosca',
        //     'barang_desc'=>'Size L, Good Condition'
        // ]];
        $barangs=Barangs::all();
        return view('frontpage.landingpage', compact('title', 'barangs'));
    }
}
