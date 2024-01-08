<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-8">

    <h1 class="text-3xl font-bold mb-4">機器情報検索ページ</h1>

    <div class="mb-8 flex">
        <form action="/search" method="post" class="mr-2">
            @csrf
            <label for="ip_address" class="block mb-2 text-gray-600">IP Address:</label>
            <input type="text" name="ip_address" required class="border border-gray-300 p-2 rounded-md">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2">検索</button>
            <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded-md mb-8">トップへ戻る</a>
        </form>
    </div>

    <h1 class="text-3xl font-bold mb-4">端末機器情報</h1>
    <table class="w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 text-right">管理ID</th>
                <th class="p-2 text-right">ホスト名</th>
                <th class="p-2 text-right">IPアドレス</th>
                <th class="p-2 text-right">MACアドレス</th>
                <th class="p-2 text-right">役割・用途</th>
                <th class="p-2 text-right">機器モデル</th>
                <th class="p-2 text-right">CPU</th>
                <th class="p-2 text-right">メモリ</th>
                <th class="p-2 text-right">ストレージ</th>
                <!-- 他のソフトウェアのカラムも同様に追加 -->
                <th class="p-2 text-right">棟</th>
                <th class="p-2 text-right">フロア(F)</th>
                <th class="p-2 text-right">エリア</th>
                <!-- 他の位置のカラムも同様に追加 -->
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
                <tr>
                    <td class="p-2 text-right">{{ $device->manage_id }}</td>
                    
                    <!-- 対応するソフトウェアのデータ -->
                    @php
                        $software = $softwares->where('soft_id', $device->soft_id)->first();
                    @endphp
                    <td class="p-2 text-right">{{ $software->hostname ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->ip ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->mac ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->purpose ?? '' }}</td>
                    
                    <td class="p-2 text-right">{{ $device->dev_type }}</td>
                    <td class="p-2 text-right">{{ $device->CPU }}</td>
                    <td class="p-2 text-right">{{ $device->RAM }}</td>
                    <td class="p-2 text-right">{{ $device->HDD }}</td>
                    
                    @php
                        $location = $locations->where('loca_id', $device->loca_id)->first();
                    @endphp
                    <td class="p-2 text-right">{{ $location->ridge ?? '' }}</td>
                    <td class="p-2 text-right">{{ $location->floor ?? '' }}</td>
                    <td class="p-2 text-right">{{ $location->area ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
