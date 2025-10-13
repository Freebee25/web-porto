<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ian — Portfolio</title>
  <meta name="description" content="Portfolio Ian — developer & designer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="antialiased text-slate-800 bg-gradient-to-b from-white via-slate-50 to-slate-100 min-h-screen">

  <!-- Header -->
  <?php include 'resource/template/header.php' ?>

  <main class="pt-24">
    <!-- HERO -->
    <section id="home" class="max-w-6xl mx-auto px-6 py-16 lg:py-24">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div class="reveal">
          <h1 class="text-4xl sm:text-5xl font-bold leading-tight">Hi, I'm <span class="text-indigo-600">Ian</span>.<br class="hidden sm:block"> I build things for the web.</h1>
          <p class="mt-4 text-slate-600 max-w-xl">I'm a frontend-focused developer who likes clean UI, small performant apps, and good coffee.</p>

          <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:space-x-4 space-y-3 sm:space-y-0">
            <a href="#contact" class="inline-flex items-center px-5 py-2 rounded-md bg-indigo-600 text-white font-medium shadow hover:opacity-95">Contact me</a>
          </div>
        </div>

        <div class="reveal">
          <div class="w-full h-64 sm:h-80 rounded-2xl overflow-hidden shadow-lg">
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-indigo-50 to-pink-50">
              <svg width="220" height="220" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-80">
                <rect x="1" y="1" width="22" height="22" rx="6" stroke="#8b5cf6" stroke-width="1.5" />
                <path d="M6 15L9 11L13 15L17 9" stroke="#ec4899" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Project -->
         <!-- PROJECTS SECTION -->
    <section id="projects" class="max-w-6xl mx-auto px-6 py-16">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-indigo-600">💼 Featured Projects</h2>
        <p class="text-slate-600 mt-2">Beberapa proyek pilihan yang pernah saya kerjakan.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project 1 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
          <img src="assets/img/project1.jpg" alt="Project 1" class="w-full h-48 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-indigo-700">Portfolio Website</h3>
            <p class="text-sm text-slate-600 mt-2">Website pribadi dengan desain responsif dan animasi halus menggunakan Tailwind CSS & AOS.</p>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
          <img src="assets/img/project2.jpg" alt="Project 2" class="w-full h-48 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-indigo-700">Inventory App</h3>
            <p class="text-sm text-slate-600 mt-2">Aplikasi gudang berbasis web dengan fitur CRUD dan laporan penjualan, dibuat menggunakan PHP dan MySQL.</p>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
          <img src="assets/img/project3.jpg" alt="Project 3" class="w-full h-48 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-indigo-700">Game Pixel Adventure</h3>
            <p class="text-sm text-slate-600 mt-2">Game platformer pixel sederhana yang dibuat menggunakan Construct 2 dan dioptimalkan untuk web.</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-10">
        <a href="resource/views/project.php"
           class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg shadow hover:bg-indigo-700 transition-all duration-300">
          See More →
        </a>
      </div>
    </section>


    <!-- Contact -->
    <section id="contact" class="max-w-3xl mx-auto px-6 py-12">
      <div class="reveal glass rounded-2xl p-6 shadow-md">
        <h2 class="text-2xl font-semibold">Contact</h2>
        <p class="mt-2 text-slate-600">Ingin bekerja sama atau bertanya? Kirim pesan lewat form ini atau email saya.</p>

        <form class="mt-4 grid grid-cols-1 gap-3" onsubmit="event.preventDefault(); alert('Form submitted (demo). Replace with real backend).')">
          <input class="p-3 rounded-md border border-slate-200" placeholder="Nama" required />
          <input class="p-3 rounded-md border border-slate-200" placeholder="Email" type="email" required />
          <textarea class="p-3 rounded-md border border-slate-200" placeholder="Pesan" rows="4" required></textarea>
          <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-md">Send</button>
            <a href="#" class="text-sm text-slate-500">Download CV</a>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include 'resource/template/footer.php' ?>

  <script src="assets/js/main.js"></script>
</body>
</html>
