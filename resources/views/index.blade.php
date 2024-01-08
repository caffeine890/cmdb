<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">

    <form action="{{ route('search') }}" method="get" class="bg-white p-6 rounded-lg shadow-md mb-4">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            IPアドレスから機器情報を検索
        </button>
    </form>

    <div class="grid grid-cols-3 gap-4">
        <!-- 第一段 -->
        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">1棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">2棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">3棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <!-- 第二段 -->
        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">4棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">5棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">6棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <!-- 第三段 -->
        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">7棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>

        <div class="relative w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-gray-700 font-bold">8棟</span>
            <div class="absolute inset-0 border-2 border-blue-500 rounded-lg"></div>
        </div>
    </div>

</body>
</html>
