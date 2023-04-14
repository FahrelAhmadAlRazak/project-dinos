<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </head>
  <body class="relative">
    <header
      class="bg-mitra-primary flex justify-between items-center absolute px-6 py-3 w-screen h-24"
    >
      <img src="images/logo.png" class="h-16" alt="" />
      <img src="images/user.svg" class="h-12" alt="" />
    </header>
    <main class="flex">
      <div
        id="sidebar"
        class="bg-mitra-secondary hidden sm:flex flex-col gap-5 lg:w-1/6 pt-28 h-screen"
      >
        <div class="flex items-center gap-3 mx-4">
          <img src="images/user.svg" class="h-12" alt="" />
          <p class="text-white hidden lg:block">Mitra</p>
        </div>
        <hr />
        <a
          href="/test/pages/mitra/dashboard.html"
          class="flex items-center gap-3 px-8"
        >
          <img src="images/home.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Dashboard</p>
        </a>
        <a
          href="/test/pages/mitra/akun.html"
          class="flex items-center gap-3 px-8"
        >
          <img src="images/person_active.svg" class="w-5" alt="" />
          <p class="text-yellow hidden lg:block">Akun</p>
        </a>
        <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
          <img src="images/document.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Pengajuan</p>
        </a>
        <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
          <img src="images/truck.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Pengiriman</p>
        </a>
        <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
          <img src="images/penjadwalan.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Penjadwalan</p>
        </a>
        <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
          <img src="images/pencatatan.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Pencatatan</p>
        </a>
        <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
          <img src="images/monitor.svg" class="w-5" alt="" />
          <p class="text-white hidden lg:block">Monitor</p>
        </a>
      </div>
      <div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
        <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
          <h1 class="text-3xl font-medium mb-4">Edit Data Akun</h1>
          <table class="border w-full">
            <tr>
              <td class="w-1/3 px-4 py-3">Nama</td>
              <td>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  class="w-full bg-transparent"
                  value="Admin"
                />
              </td>
            </tr>
            <tr class="bg-slate-200">
              <td class="w-1/3 px-4 py-3">Username</td>
              <td>
                <input
                  type="text"
                  name="username"
                  id="username"
                  class="w-full bg-transparent"
                  value="adm1"
                />
              </td>
            </tr>
            <tr>
              <td class="w-1/3 px-4 py-3">Email</td>
              <td>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="w-full bg-transparent"
                  value="admin@mail.com"
                />
              </td>
            </tr>
            <tr class="bg-slate-200">
              <td class="w-1/3 px-4 py-3">Password</td>
              <td>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="w-full bg-transparent"
                  value="admin123"
                />
              </td>
            </tr>
            <tr>
              <td class="w-1/3 px-4 py-3">No Identitas</td>
              <td>
                <input
                  type="text"
                  name="noIdentitas"
                  id="noIdentitas"
                  class="w-full bg-transparent"
                  value="212410101000"
                />
              </td>
            </tr>
            <tr class="bg-slate-200">
              <td class="w-1/3 px-4 py-3">Alamat</td>
              <td>
                <input
                  type="text"
                  name="alamat"
                  id="alamat"
                  class="w-full bg-transparent"
                  value="Jl. Sumatera"
                />
              </td>
            </tr>
            <tr>
              <td class="w-1/3 px-4 py-3">No Telepon</td>
              <td>
                <input
                  type="tel"
                  name="noTelepon"
                  id="noTelepon"
                  class="w-full bg-transparent"
                  value="082345678901"
                />
              </td>
            </tr>
            <tr class="bg-slate-200">
              <td class="w-1/3 px-4 py-3">Tanggal Lahir</td>
              <td>
                <input
                  type="date"
                  name="tanggalLahir"
                  id="tanggalLahir"
                  class="w-full bg-transparent"
                  value="2000-01-01"
                />
              </td>
            </tr>
          </table>
          <div
            class="mt-8 flex flex-col xs:items-center sm:flex-row sm:justify-between sm:items-start"
          >
            <div class="relative w-1/2">
              <p
                id="error-msg"
                class="hidden absolute top-0 bg-red-700 text-white px-8 py-2 rounded-lg"
              >
                “Semua data harus terisi dengan benar”
              </p>
            </div>
            <div class="flex gap-4 sm:w-1/3">
              <a
                href="{{ route('akun_mitra') }}"
                class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center"
                >Kembali</a
              >
              <button
                class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white"
                id="simpanData"
              >
                Simpan
              </button>
            </div>
          </div>
        </div>
      </div>

      <div
        id="passwordModal"
        tabindex="-1"
        aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
      >
        <div
          class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center"
        >
          <h2 class="text-2xl font-bold mb-2">Password Validasi!</h2>
          <h3 class="text-xl mb-6">Masukan password anda :</h3>
          <input
            type="text"
            placeholder="Password"
            class="px-4 border border-slate-50 w-full rounded shadow-md"
            name="passwordModalValue"
            id="passwordModalValue"
          />
          <button
            id="passwordModalConf"
            class="mt-2 bg-blue-500 text-white px-4 py-1 rounded"
          >
            Submit
          </button>
          <p
            id="passwordModalErr"
            class="hidden mt-3 bg-red-700 text-white px-8 py-2 rounded-lg"
          >
            “Password yang anda masukkan salah!”
          </p>
        </div>
      </div>

      <div
        id="notificationModal"
        tabindex="-1"
        aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
      >
        <div
          class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center"
        >
          <h2 class="text-2xl font-bold mb-2">Notifikasi!</h2>
          <h3 class="text-xl">"Perubahan data telah disimpan"</h3>
        </div>
      </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
      const _passwordModal = passwordModal();
      _passwordModal.show();
      $("#passwordModalConf").click(() => {
        if ($("#passwordModalValue").val() == "test") {
          _passwordModal.hide();
        } else {
          $("#passwordModalErr").removeClass("hidden");
        }
      });

      const _notificationModal = notificationModal();
      $("#simpanData").click(() => {
        // update data di server
        //----------------------
        // jika gagal
        //----------------------
        $("#error-msg").removeClass("hidden");
        //----------------------
        // jika sukses
        _notificationModal.show();
        setTimeout(() => {
          window.location.replace("/test/pages/mitra/akun.html");
        }, 1000);
      });
    </script>
  </body>
</html>
