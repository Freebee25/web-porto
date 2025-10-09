<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Projects — Ian</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="antialiased text-slate-800 bg-gradient-to-b from-white via-slate-50 to-slate-100 min-h-screen">

  <?php include '../template/header.php' ?>

  <main class="pt-24 max-w-6xl mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold mb-6 text-indigo-700">My Projects</h1>
    <p class="text-slate-600 mb-10 max-w-2xl">Berikut beberapa proyek yang pernah saya buat.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Project 1 -->
      <article class="reveal p-4 bg-white rounded-2xl shadow hover:shadow-lg">
        <div class="h-40 rounded-lg bg-gradient-to-br from-indigo-50 to-teal-50 flex items-center justify-center">Inventory PWA</div>
        <h3 class="mt-4 font-semibold">Inventory PWA</h3>
        <p class="mt-2 text-sm text-slate-500">Progressive web app untuk manajemen stok yang bisa berjalan offline.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-xs text-slate-400">Tech: Vue, PWA</div>
          <a class="text-indigo-600 text-sm font-medium" href="#">View</a>
        </div>
      </article>

      <!-- Project 2 -->
      <article class="reveal p-4 bg-white rounded-2xl shadow hover:shadow-lg">
        <div class="h-40 rounded-lg bg-gradient-to-br from-pink-50 to-yellow-50 flex items-center justify-center">File Storage</div>
        <h3 class="mt-4 font-semibold">File Storage</h3>
        <p class="mt-2 text-sm text-slate-500">Aplikasi upload/download file dengan enkripsi dan proteksi password.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-xs text-slate-400">Tech: PHP, MySQL</div>
          <a class="text-indigo-600 text-sm font-medium" href="#">View</a>
        </div>
      </article>

      <!-- Project 3 -->
      <article class="reveal p-4 bg-white rounded-2xl shadow hover:shadow-lg">
        <div class="h-40 rounded-lg bg-gradient-to-br from-green-50 to-cyan-50 flex items-center justify-center">Dashboard Admin</div>
        <h3 class="mt-4 font-semibold">Dashboard Admin</h3>
        <p class="mt-2 text-sm text-slate-500">Dashboard dengan chart, filter, dan laporan harian.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-xs text-slate-400">Tech: Laravel</div>
          <a class="text-indigo-600 text-sm font-medium" href="#">View</a>
        </div>
      </article>

      <!-- Project 4 -->
      <article class="reveal p-4 bg-white rounded-2xl shadow hover:shadow-lg">
        <div class="h-40 rounded-lg bg-gradient-to-br from-blue-50 to-purple-50 flex items-center justify-center">Company Profile</div>
        <h3 class="mt-4 font-semibold">Company Profile</h3>
        <p class="mt-2 text-sm text-slate-500">Website profil perusahaan responsif dengan desain modern.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-xs text-slate-400">Tech: HTML, Tailwind</div>
          <a class="text-indigo-600 text-sm font-medium" href="#">View</a>
        </div>
      </article>

      <!-- Project 5 -->
      <article class="reveal p-4 bg-white rounded-2xl shadow hover:shadow-lg">
        <div class="h-40 rounded-lg bg-gradient-to-br from-orange-50 to-pink-50 flex items-center justify-center">Mini Game</div>
        <h3 class="mt-4 font-semibold">Mini Game Pixel</h3>
        <p class="mt-2 text-sm text-slate-500">Game pixel sederhana yang dibuat dengan Construct 2.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-xs text-slate-400">Tech: Construct 2</div>
          <a class="text-indigo-600 text-sm font-medium" href="#">View</a>
        </div>
      </article>
    </div>
  </main>

  <?php include '../template/footer.php' ?>

  <script src="../../assets/js/main.js"></script>
</body>
</html>
