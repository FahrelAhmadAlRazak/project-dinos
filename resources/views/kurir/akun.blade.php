<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
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
            <a href="/test/pages/kurir/dashboard.html" class="flex items-center gap-3 px-8">
                <img src="images/home.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Dashboard</p>
            </a>
            <a href="/test/pages/kurir/akun.html" class="flex items-center gap-3 px-8">
                <img src="images/person_active.svg" class="w-5" alt="">
                <p class="text-yellow hidden lg:block">Akun</p>
            </a>
            <a href="/test/pages/kurir/" class="flex items-center gap-3 px-8">
                <img src="images/truck.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pengiriman</p>
            </a>
        </div>
    <div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
        <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
            <h1 class="text-3xl font-medium mb-4">Data Akun Admin</h1>
            <table class="border w-full">
                <tr>
                    <td class="w-1/3 px-4 py-3">Nama</td>
                    <td>: Kurir</td>
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Username</td>
                    <td>: kur1</td>
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">Email</td>
                    <td>: kurir@mail.com</td>
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Password</td>
                    <td>: kurir123</td>
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">No Identitas</td>
                    <td>: 212410101000</td>
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Alamat</td>
                    <td>: Jl. Sumatera</td>
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">No Telepon</td>
                    <td>: 082345678901</td>
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Tanggal Lahir</td>
                    <td>: 2000-01-01</td>
                </tr>
            </table>
            <div class="mt-8 flex justify-end">
                <div class="flex gap-4 w-1/3">
                    <a href="{{ route('akun_edit_kurir') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Edit</a>
                    <button class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center gap-1" id="logoutBtn"><img class="w-5" src="/test/images/logout.svg" alt="">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <div id="logoutModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-2">Notifikasi!</h2>
            <h3 class="text-xl mb-6">"Anda yakin ingin keluar?"</h3>
            <div class="flex gap-4 w-2/3">
                <button class="w-1/2 bg-green-700 text-white py-2" id="iyaLogout">Iya</button>
                <button class="w-1/2 bg-red-700 text-white py-2" id="noLogout">Tidak</button>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script>
    const _logoutModal = logoutModal();
    $("#iyaLogout").click(()=>{
        window.location.replace("/test/pages/kurir/dashboard.html");
    });
    $("#logoutBtn").click(()=>{
        _logoutModal.toggle();
    })
    $("#noLogout").click(()=>{
        _logoutModal.toggle();
    });
</script>
</body>
</html>