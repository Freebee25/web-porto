<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About — Ian</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="antialiased text-slate-800 bg-gradient-to-b from-white via-slate-50 to-slate-100 min-h-screen">
  <?php include '../template/header.php' ?>

  <main class="pt-20">
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center gap-10">
      <!-- Foto Profil -->
      <div class="flex-shrink-0">
        <img src="../../assets/img/profile.jpg" alt="Foto Ian"
          class="w-64 h-64 rounded-full shadow-xl object-cover border-4 border-indigo-600/70 transform hover:scale-105 transition-all duration-300">
      </div>

      <!-- Deskripsi -->
      <div>
        <h1 class="text-4xl font-bold text-indigo-600 mb-3">About Me</h1>
        <p class="text-gray-700 leading-relaxed mb-4">
          Saya adalah seorang web developer yang bersemangat dalam menciptakan antarmuka pengguna yang bersih,
          responsif, dan mudah digunakan. Saya senang belajar teknologi baru dan terus mengasah keterampilan saya
          di bidang front-end dan back-end development.
        </p>

        <div class="mt-6">
          <a href="../views/project.php"
            class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
            💼 Lihat Project Saya
          </a>
        </div>
      </div>
    </section>

    <!-- Education Section -->
    <section class="max-w-4xl mx-auto px-4 py-16 text-center">
      <h2 class="text-3xl font-semibold text-gray-800 mb-8">🎓 Education</h2>

      <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col sm:flex-row items-center gap-6 hover:shadow-xl transition-all duration-300">
        <!-- Logo Universitas -->
        <img src="../../assets/img/budiluhur.jpg" alt="Logo Universitas"
             class="w-24 h-24 object-contain rounded-full border-2 border-indigo-200">

        <!-- Deskripsi Pendidikan -->
        <div class="text-left">
          <h3 class="text-xl font-semibold text-indigo-700">Universitas Budi Luhur</h3>
          <p class="text-gray-700">S1 — Teknik Informatika</p>
          <p class="text-gray-500 text-sm mt-1">2021 — 2025</p>
          <p class="mt-3 text-gray-600 text-sm">
            Fokus pada pengembangan perangkat lunak, algoritma, dan pemrograman web.
          </p>
        </div>
      </div>
    </section>

    <!-- Certificates Section -->
    <section class="max-w-5xl mx-auto px-4 py-16 text-center">
      <h2 class="text-3xl font-semibold text-gray-800 mb-10">📜 Certificates</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <!-- Sertifikat 1 -->
        <div class="bg-white shadow-md p-6 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
          <img src="../../assets/img/algoritma.jpg" alt="Sertifikat 1" class="w-full h-40 object-cover rounded-md mb-3">
          <h3 class="text-lg font-semibold text-indigo-700">Algoritm Competency</h3>
          <p class="text-gray-600 text-sm mt-1">Universitas Budi Luhur — 2025</p>
          <a href="https://www.dicoding.com/users/yourprofile" target="_blank" class="text-indigo-600 text-sm hover:underline mt-2 inline-block">Lihat Sertifikat</a>
        </div>

        <!-- Sertifikat 2 -->
        <div class="bg-white shadow-md p-6 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
          <img src="../../assets/img/certificate2.png" alt="Sertifikat 2" class="w-full h-40 object-cover rounded-md mb-3">
          <h3 class="text-lg font-semibold text-indigo-700">Cloud Digital Leader Training</h3>
          <p class="text-gray-600 text-sm mt-1">Google Cloud — 2023</p>
          <a href="https://www.credential.net/" target="_blank" class="text-indigo-600 text-sm hover:underline mt-2 inline-block">Lihat Sertifikat</a>
        </div>
      </div>
    </section>

  </main>

  <?php include '../template/footer.php' ?>
  <script src="../../assets/js/main.js"></script>
</body>
</html>
