<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Software;
use App\Models\Location;

class IndexController extends Controller
{
    public function index()
    {
        // ビューの表示
        return view('index');
    }


    public function search()
    {
        // データの取得
        $devices = Device::all();
        $softwares = Software::all();
        $locations = Location::all();

        // ビューの表示
        return view('search', compact('devices', 'softwares', 'locations'));
    }


}
