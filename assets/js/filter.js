const filterBtns = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".project-card");

filterBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    const filter = btn.dataset.filter;

    // reset semua tombol ke default
    filterBtns.forEach(b => {
      b.classList.remove("bg-indigo-600", "text-white");
      b.classList.add("bg-white", "text-slate-700", "border", "border-slate-200");
    });

    // ubah tombol aktif ke biru
    btn.classList.remove("bg-white", "text-slate-700", "border", "border-slate-200");
    btn.classList.add("bg-indigo-600", "text-white");

    // tampilkan / sembunyikan project
    cards.forEach(card => {
      const category = card.dataset.category;
      if (filter === "all" || category === filter) {
        card.style.display = "block";
        card.classList.add("animate-fadeIn");
      } else {
        card.style.display = "none";
      }
    });
  });
});
