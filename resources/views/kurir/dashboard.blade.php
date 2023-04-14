<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="relative">
<header class="bg-kurir-primary flex justify-between items-center absolute px-6 py-3 w-screen h-24">
    <img src="images/logo.png" class="h-16" alt="">
    <img src="images/user.svg" class="h-12" alt="">
</header>
<main class="flex">
    <div id="sidebar" class="bg-kurir-secondary hidden sm:flex flex-col gap-5 lg:w-1/6 pt-28 h-screen">
        <div class="flex items-center gap-3 mx-4">
            <img src="images/user.svg" class="h-12" alt="">
            <p class="text-white hidden lg:block">Kurir</p>
        </div>
        <hr>
        <a href="{{ route('dashboard_kurir') }}" class="flex items-center gap-3 px-8">
            <img src="images/home_active.svg" class="w-5" alt="">
            <p class="text-yellow hidden lg:block">Dashboard</p>
        </a>
        <a href="{{ route('akun_kurir') }}" class="flex items-center gap-3 px-8">
            <img src="images/person.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Akun</p>
        </a>
        <a href="/test/pages/kurir/" class="flex items-center gap-3 px-8">
            <img src="images/truck.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Pengiriman</p>
        </a>
    </div>
    <div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
        <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
            <h1 class="text-3xl font-medium mb-4">Dashboard</h1>
            <div class="h-35/40 flex flex-col gap-2">
                <div class="h-1/2 border flex items-center justify-center">
                    <h1 class="text-3xl font-medium mb-4">Foto</h1>
                </div>
                <div class="h-1/2 flex flex-col lg:flex-row lg:gap-2">
                    <div class="lg:w-1/2 border"></div>
                    <div class="lg:w-1/2 border">
                        <div class="flex gap-6 h-1/3 px-4 py-2 bg-slate-400">
                            <div class="bg-black w-1/4 h-full"></div>
                            <h2 class="text-md font-medium">Judul artikel</h2>
                        </div>
                        <div class="flex gap-6 h-1/3 px-4 py-2 bg-white">
                            <div class="bg-black w-1/4 h-full"></div>
                            <h2 class="text-md font-medium">Judul artikel</h2>
                        </div>
                        <div class="flex gap-6 h-1/3 px-4 py-2 bg-slate-400">
                            <div class="bg-black w-1/4 h-full"></div>
                            <h2 class="text-md font-medium">Judul artikel</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>