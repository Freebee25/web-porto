<?php
// deteksi path aktif agar link tetap benar di semua halaman
$basePath = (basename($_SERVER['PHP_SELF']) === 'index.php') ? '' : '../../';
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="fixed w-full z-40 backdrop-blur bg-white/70 shadow-sm animate-header">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <a href="<?= $basePath ?>index.php" class="flex items-center space-x-3">
        <img src="../../assets/img/logo.png" alt="logo" class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 flex items-center justify-center text-white font-bold">
        <!-- <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-pink-500 flex items-center justify-center text-white font-bold">I</div> -->
        <span class="font-semibold text-slate-800">Ian</span>
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-6 font-medium text-slate-700">
        <a href="<?= $basePath ?>index.php"
           class="hover:text-indigo-600 transition <?= $currentPage === 'index.php' ? 'text-indigo-600 font-semibold' : '' ?>">Home</a>
        <a href="<?= $basePath ?>resource/views/about.php"
           class="hover:text-indigo-600 transition <?= $currentPage === 'about.php' ? 'text-indigo-600 font-semibold' : '' ?>">About</a>
        <a href="<?= $basePath ?>resource/views/project.php"
           class="hover:text-indigo-600 transition <?= $currentPage === 'project.php' ? 'text-indigo-600 font-semibold' : '' ?>">Projects</a>
        <a href="<?= $basePath ?>index.php#contact" class="hover:text-indigo-600 transition">Contact</a>
      </nav>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-btn" aria-label="Toggle menu" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <svg id="menu-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="menu-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden hidden">
  <div class="px-4 pt-3 pb-6 space-y-2 bg-white/90 backdrop-blur-md shadow-lg rounded-b-2xl animate-slideDown">
    <a href="<?= $basePath ?>index.php"
       class="block py-2 px-2 rounded-lg transition <?= $currentPage === 'index.php' ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'hover:text-indigo-600' ?>">Home</a>
    <a href="<?= $basePath ?>resource/views/about.php"
       class="block py-2 px-2 rounded-lg transition <?= $currentPage === 'about.php' ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'hover:text-indigo-600' ?>">About</a>
    <a href="<?= $basePath ?>resource/views/project.php"
       class="block py-2 px-2 rounded-lg transition <?= $currentPage === 'project.php' ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'hover:text-indigo-600' ?>">Projects</a>
    <a href="<?= $basePath ?>index.php#contact"
       class="block py-2 px-2 rounded-lg transition hover:text-indigo-600">Contact</a>
  </div>
</div>
</header>
