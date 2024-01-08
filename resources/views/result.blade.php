<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-8">

    <h1 class="text-3xl font-bold mb-4">機器情報検索結果</h1>

    <table class="w-full border border-gray-300 mb-4">
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
                <th class="p-2 text-right">棟</th>
                <th class="p-2 text-right">フロア(F)</th>
                <th class="p-2 text-right">エリア</th>
            </tr>
        </thead>
        <tbody>
            @if($resultDevice)
                <tr>
                    <td class="p-2 text-right">{{ $resultDevice->manage_id }}</td>

                    <!-- 対応するソフトウェアのデータ -->
                    @php
                        $software = $softwares->where('soft_id', $resultDevice->soft_id)->first();
                    @endphp
                    <td class="p-2 text-right">{{ $software->hostname ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->ip ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->mac ?? '' }}</td>
                    <td class="p-2 text-right">{{ $software->purpose ?? '' }}</td>

                    <td class="p-2 text-right">{{ $resultDevice->dev_type }}</td>
                    <td class="p-2 text-right">{{ $resultDevice->CPU }}</td>
                    <td class="p-2 text-right">{{ $resultDevice->RAM }}</td>
                    <td class="p-2 text-right">{{ $resultDevice->HDD }}</td>

                    @php
                        $location = $locations->where('loca_id', $resultDevice->loca_id)->first();
                    @endphp
                    <td class="p-2 text-right">{{ $location->ridge ?? '' }}</td>
                    <td class="p-2 text-right">{{ $location->floor ?? '' }}</td>
                    <td class="p-2 text-right">{{ $location->area ?? '' }}</td>
                </tr>
            @else
                <tr>
                    <td colspan="12" class="p-2 text-right">該当するデータがありません。</td>
                </tr>
            @endif
        </tbody>
    </table>

    @if($resultDevice)
        <form action="{{ route('edit', $resultDevice->manage_id) }}" method="get">
            @csrf
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">編集</button>
        </form>
    @endif

</body>
</html>
