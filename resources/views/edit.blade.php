<!-- edit.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- headの内容は省略 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-4">機器情報編集ページ</h1>

    <form action="{{ route('update', $resultDevice->manage_id) }}" method="post" class="max-w-md bg-white p-4 rounded-md shadow-md">
        @csrf
        @method('patch')

        <!-- ソフトウェアの情報 -->
        <div class="mb-4">
            <label for="hostname" class="block text-sm font-semibold text-gray-600">ホスト名:</label>
            <input type="text" name="hostname" value="{{ $software->hostname ?? '' }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <div class="mb-4">
            <label for="mac" class="block text-sm font-semibold text-gray-600">MACアドレス:</label>
            <input type="text" name="mac" value="{{ $software->mac ?? '' }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <div class="mb-4">
            <label for="ip" class="block text-sm font-semibold text-gray-600">IPアドレス:</label>
            <input type="text" name="ip" value="{{ $software->ip ?? '' }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <div class="mb-4">
            <label for="purpose" class="block text-sm font-semibold text-gray-600">役割・用途:</label>
            <input type="text" name="purpose" value="{{ $software->purpose ?? '' }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

<!-- dev_typeのプルダウン -->
<div class="mb-4">
<label for="dev_type">機器モデル:</label>
<br>
<select name="dev_type" id="dev_type">
    @foreach($devTypeOptions as $devTypeOption)
        <option value="{{ $devTypeOption }}" {{ $resultDevice->dev_type == $devTypeOption ? 'selected' : '' }}>
            {{ $devTypeOption }}
        </option>
    @endforeach
</select>
</div>

        <div class="mb-4">
            <label for="CPU" class="block text-sm font-semibold text-gray-600">CPU:</label>
            <input type="text" name="CPU" value="{{ $resultDevice->CPU }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <div class="mb-4">
            <label for="RAM" class="block text-sm font-semibold text-gray-600">メモリ:</label>
            <input type="text" name="RAM" value="{{ $resultDevice->RAM }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <div class="mb-4">
            <label for="HDD" class="block text-sm font-semibold text-gray-600">ストレージ:</label>
            <input type="text" name="HDD" value="{{ $resultDevice->HDD }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <!-- 位置情報の情報 -->
<!-- ridgeのプルダウン -->
<div class="mb-4">
<label for="ridge">棟:    </label>
<br>
<select name="ridge" id="ridge">
    @foreach($ridgeOptions as $ridgeOption)
        <option value="{{ $ridgeOption }}" {{ $location->ridge == $ridgeOption ? 'selected' : '' }}>
            {{ $ridgeOption }}
        </option>
    @endforeach
</select>
</div>

<!-- floorのプルダウン -->
<div class="mb-4">
<label for="floor">フロア(F):</label>
<br>
<select name="floor" id="floor">
    @foreach($floorOptions as $floorOption)
        <option value="{{ $floorOption }}" {{ $location->floor == $floorOption ? 'selected' : '' }}>
            {{ $floorOption }}
        </option>
    @endforeach
</select>
</div>

        <div class="mb-4">
            <label for="area" class="block text-sm font-semibold text-gray-600">エリア:</label>
            <input type="text" name="area" value="{{ $location->area ?? '' }}" required class="w-full border border-gray-300 p-2 rounded-md">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">更新</button>
        <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded-md mb-8">トップへ戻る</a>
    </form>
    <!-- edit.blade.php -->






</body>
</html>
