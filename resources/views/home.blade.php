<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireless Hose</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="p-6">

    <div class="border p-6 rounded-lg shadow w-64">
        <h1 class="text-x1 font-bold">{{$name}}</h1>

        <p class="text-gray-500 mt-4">
            {{$price}}
        </p>

        <a href="/order">
            <button class="bg-blue-500 text-white px-4 py-2 mt-4 rounded cursor-pointer">
                Order
            </button>
        </a>
    </div>

</body>

</html>