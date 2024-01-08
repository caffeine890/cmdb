<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Software;
use App\Models\Location;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // 入力されたIPアドレスを取得
        $ipAddress = $request->input('ip_address');

        // IPアドレスに対応するデバイスを検索
        $resultDevice = Device::whereHas('software', function ($query) use ($ipAddress) {
            $query->where('ip', $ipAddress);
        })->first();

        // 他のモデルのデータも取得
        $softwares = Software::all();
        $locations = Location::all();

        // 検索結果をビューに渡す
        return view('result', compact('resultDevice', 'softwares', 'locations'));
    }
}
