<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Software;
use App\Models\Location;

class EditController extends Controller
{
    public function edit($id)
    {
        // 編集対象のデバイスを取得
        $resultDevice = Device::findOrFail($id);

        // 他のモデルのデータも取得
        $software = Software::where('soft_id', $resultDevice->soft_id)->first();
        $location = Location::where('loca_id', $resultDevice->loca_id)->first();

        // ridgeの選択肢を取得
        $ridgeOptions = Location::pluck('ridge', 'ridge');
        // floorの選択肢を取得
        $floorOptions = Location::pluck('floor', 'floor');
        // dev_typeの選択肢を取得
        $devTypeOptions = Device::pluck('dev_type', 'dev_type');

        return view('edit', compact('resultDevice', 'software', 'location', 'ridgeOptions', 'floorOptions', 'devTypeOptions'));
    }

    public function update(Request $request, $id)
    {
        // バリデーションを追加することをお勧めします
        // $request->validate([...]);

        // 対象のデバイスを取得
        $device = Device::findOrFail($id);

        // デバイス情報を更新
        $device->update([
            'dev_type' => $request->input('dev_type'),
            'CPU' => $request->input('CPU'),
            'RAM' => $request->input('RAM'),
            'HDD' => $request->input('HDD'),
            // 他の項目も同様に追加
        ]);

        // 関連するソフトウェアを更新
        $software = Software::where('soft_id', $device->soft_id)->first();
        $software->update([
            'hostname' => $request->input('hostname'),
            'mac' => $request->input('mac'),
            'ip' => $request->input('ip'),
            'purpose' => $request->input('purpose'),
            // 他の項目も同様に追加
        ]);

        // 関連する位置情報を更新
        $location = Location::where('loca_id', $device->loca_id)->first();
        $location->update([
            'ridge' => $request->input('ridge'),
            'floor' => $request->input('floor'),
            'area' => $request->input('area'),
            // 他の項目も同様に追加
        ]);

        return redirect()->route('search'); // 編集後に検索結果画面にリダイレクト
    }
}
