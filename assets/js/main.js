document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  const openIcon = document.getElementById('menu-open');
  const closeIcon = document.getElementById('menu-close');

  if (btn && menu) {
    btn.addEventListener('click', () => {
      const showing = !menu.classList.contains('hidden');
      if (showing) {
        menu.classList.add('menu-hide');
        setTimeout(() => {
          menu.classList.add('hidden');
          menu.classList.remove('menu-show', 'menu-hide');
        }, 250);
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      } else {
        menu.classList.remove('hidden');
        menu.classList.add('menu-show');
        openIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
      }
    });
  }

  // Reveal on scroll (IntersectionObserver)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Footer year
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();
});

// Scroll Reveal Effect
window.addEventListener("scroll", reveal);

function reveal() {
  const reveals = document.querySelectorAll(".reveal");
  const windowHeight = window.innerHeight;
  const revealPoint = 120; // semakin kecil, animasi muncul lebih cepat

  reveals.forEach((el) => {
    const revealTop = el.getBoundingClientRect().top;
    if (revealTop < windowHeight - revealPoint) {
      el.classList.add("active");
    } else {
      el.classList.remove("active");
    }
  });
}

// Header scroll shadow effect
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  if (window.scrollY > 10) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// Header scroll shadow effect
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  if (window.scrollY > 10) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// Jalankan saat pertama kali load
reveal();
