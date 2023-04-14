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
<header class="bg-admin-primary flex justify-between items-center absolute px-6 py-3 w-screen h-24">
    <img src="images/logo.png" class="h-16" alt="">
    <img src="images/user.svg" class="h-12" alt="">
</header>
<main class="flex">
    <div id="sidebar" class="bg-admin-secondary hidden sm:flex flex-col gap-5 lg:w-1/6 pt-28 h-screen">
        <div class="flex items-center gap-3 mx-4">
            <img src="images/user.svg" class="h-12" alt="">
            <p class="text-white hidden lg:block">Admin</p>
        </div>
        <hr>
        <a href="{{ route('dashboard_admin') }}" class="flex items-center gap-3 px-8">
            <img src="images/home.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Dashboard</p>
        </a>
        <a href="/test/pages/admin/akun.html" class="flex items-center gap-3 px-8">
            <img src="images/person_active.svg" class="w-5" alt="">
            <p class="text-yellow hidden lg:block">Akun</p>
        </a>
        <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
            <img src="images/document.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Pengajuan</p>
        </a>
        <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
            <img src="images/truck.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Pengiriman</p>
        </a>
        <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
            <img src="images/monitor.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Monitor</p>
        </a>
        <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
            <img src="images/blog.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Artikel</p>
        </a>
        <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
            <img src="images/hand.svg" class="w-5" alt="">
            <p class="text-white hidden lg:block">Partner</p>
        </a>
    </div>
    <div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
        <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
            <h1 class="text-3xl font-medium mb-4">Data Akun Admin</h1>
            <table class="border w-full">

                <tr>
                    <td class="w-1/3 px-4 py-3">Nama</td>
                    @foreach($dataAkunAdmin as $data )
                        <td>: {{ $data->  nama }}</td>
                    @endforeach
                    <!-- <td>: Admin</td> -->
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Username</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->username }}</td>
                    @endforeach
                    <!-- <td>: adm1</td> -->
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">Email</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->email }}</td>
                    @endforeach
                    <!-- <td>: admin@mail.com</td> -->
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Password</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->password }}</td>
                    @endforeach
                    <!-- <td>: admin123</td> -->
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">No Identitas</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->nomor_identitas }}</td>
                    @endforeach
                    <!-- <td>: 212410101000</td> -->
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Jalan</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->jalan }}</td>
                    @endforeach
                    <!-- <td>: jalan Mangga</td> -->
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">Provinsi</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->provinsi }}</td>
                    @endforeach
                    <!-- <td>: Jawa Timur</td> -->
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Kota</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->kota }}</td>
                    @endforeach
                    <!-- <td>: Jember</td> -->
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">No Telepon</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->no_telpon }}</td>
                    @endforeach
                    <!-- <td>: 082345678901</td> -->
                </tr>
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Tanggal Lahir</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->tanggal_lahir }}</td>
                    @endforeach
                    <!-- <td>: 2000-01-01</td> -->
                </tr>
                <tr>
                    <td class="w-1/3 px-4 py-3">Role</td>
                    @foreach($dataAkunAdmin as $data)
                        <td>: {{ $data->role }}</td>
                    @endforeach
                    <!-- <td>: 2000-01-01</td> -->
                </tr>
                <tbody>
                     
                </tbody>
            </table>
            <div class="mt-8 flex justify-end">
                <div class="flex gap-4 w-1/3">
                    <a href="{{ route('akun_edit_admin') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Edit</a>
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
        window.location.replace("/test/pages/admin/dashboard.html");
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