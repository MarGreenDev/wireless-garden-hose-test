<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireless Hose</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="p-0 bg-green-50">

    <header class="bg-green-400">
        <h1 class="text-5xl font-mono tracking-widest text-center">{{$name}} B)</h1>
        <nav>
            <ul class="flex gap-5 justify-center">
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>FAQ</li></a>
                <a href="/cool"><li>Cool</li></a>
            </ul>
        </nav>
    </header>

    <main class="p-6">

        <section class="p-4 flex flex-col items-center border-3 border-green-500 border-dotted w-fit justify-self-center hover:shadow-xl">
            <h2 class="text-xl text-center">Version 1.0</h2>
            <img class="size-100" src="https://placehold.co/400" alt="placeholder">
            <p>Yes very cool</p>
            <a href="/order">
                <button class="bg-green-400 cursor-pointer text-white p-3 hover-shadow-ss">Pre-order</button>
            </a>
        </section>

        <section class="mx-6">
            <h2 class="text-xl font-mono">Features</h2>
            <ul class="list-disc">
                <li>bluetooth v67</li>
                <li>unlimited range</li>
                <li>bully your neighbors</li>
            </ul>
        </section>

    </main>

</body>

</html>