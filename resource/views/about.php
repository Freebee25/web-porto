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

  <main class="pt-20">
  <!-- Hero Section -->
  <section class="reveal max-w-6xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center gap-10">
    <!-- Foto Profil -->
    <div class="flex-shrink-0">
      <img src="../../assets/img/profile.jpg" alt="Foto Ian" class="w-48 h-48 rounded-full shadow-lg object-cover border-4 border-indigo-500/70">
    </div>

    <!-- Deskripsi -->
    <div>
      <h1 class="text-4xl font-bold text-indigo-600 mb-3">About Me</h1>
      <p class="text-gray-700 leading-relaxed mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate natus, blanditiis odit consequatur corporis perferendis ad, illum dolore enim tempore unde maiores nobis commodi doloribus a corrupti excepturi voluptates non!
      </p>
      <!-- <p class="text-gray-700 leading-relaxed">
        Saat ini, saya terus mengembangkan keahlian dalam <span class="font-medium">Front-End</span> dan <span class="font-medium">Back-End Development</span>,
        menggunakan teknologi seperti <span class="text-indigo-600 font-semibold">HTML, CSS, JavaScript, TailwindCSS</span>, serta framework seperti
        <span class="text-indigo-600 font-semibold">Laravel</span> dan <span class="text-indigo-600 font-semibold">React</span>.
      </p> -->

      <div class="mt-6">
        <a href="../views/project.php" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
          💼 Lihat Project Saya
        </a>
      </div>
    </div>
  </section>

  <!-- Skill Highlights -->
  <!-- <section class="reveal max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">My Skills</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 text-center">
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/html.svg" alt="HTML" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">HTML</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/css.svg" alt="CSS" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">CSS</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/js.svg" alt="JavaScript" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">JavaScript</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/tailwind.svg" alt="Tailwind" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">TailwindCSS</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/php.svg" alt="PHP" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">PHP</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/laravel.svg" alt="Laravel" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">Laravel</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/react.svg" alt="React" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">React</p>
      </div>
      <div class="p-4 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <img src="../../assets/icons/mysql.svg" alt="MySQL" class="w-12 h-12 mx-auto mb-2">
        <p class="font-medium text-gray-700">MySQL</p>
      </div>
    </div>
  </section> -->

  <!-- Motto Section
  <section class="reveal max-w-4xl mx-auto px-4 py-16 text-center">
    <blockquote class="text-xl italic text-gray-600">
      “Code is like humor. When you have to explain it, it’s bad.”  
    </blockquote>
    <p class="mt-4 text-gray-800 font-medium">— Cory House</p>
  </section> -->
</main>

  <?php include '../template/footer.php' ?>

  <script src="../../assets/js/main.js"></script>
</body>
</html>
