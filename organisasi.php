<!doctype html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organisasi - ITAMA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    .font-display { font-family: 'Playfair Display', serif; }
    .font-body { font-family: 'Source Sans Pro', sans-serif; }
    .facility-card:hover .icon-box { transform: scale(1.1) rotate(5deg); }
  </style>
</head>
<body class="font-body bg-slate-50 min-h-screen flex flex-col">
  
  <?php include 'navbar_utama.php'; ?>

  <main class="pt-48 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
      
      <div class="text-center mb-16">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-[#0f354e] mb-4">Organisasi & Kemahasiswaan</h2>
        <div class="w-24 h-1 bg-[#d4af37] mx-auto mb-6"></div>
        <p class="text-slate-500 max-w-2xl mx-auto text-lg">Wadah pengembangan diri, kepemimpinan, dan minat bakat bagi seluruh mahasiswa ITAMA.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="group bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
          <div class="text-7xl font-black text-slate-50 absolute -right-4 -top-4 group-hover:text-[#d4af37]/10 transition-colors">01</div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-[#0f354e] mb-4">BEM</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Badan Eksekutif Mahasiswa sebagai lembaga eksekutif tertinggi yang mengoordinasi seluruh kegiatan kemahasiswaan.</p>
          </div>
        </div>

        <div class="group bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
          <div class="text-7xl font-black text-slate-50 absolute -right-4 -top-4 group-hover:text-[#d4af37]/10 transition-colors">02</div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-[#0f354e] mb-4">BLM</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Badan Legislatif Mahasiswa yang berfungsi dalam pengawasan, legislasi, dan penyerapan aspirasi mahasiswa.</p>
          </div>
        </div>

        <div class="group bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
          <div class="text-7xl font-black text-slate-50 absolute -right-4 -top-4 group-hover:text-[#d4af37]/10 transition-colors">03</div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-[#0f354e] mb-4">HMP</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Himpunan Mahasiswa Program Studi yang berfokus pada pengembangan keilmuan dan skill spesifik sesuai jurusan masing-masing.</p>
          </div>
        </div>

        <div class="group bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
          <div class="text-7xl font-black text-slate-50 absolute -right-4 -top-4 group-hover:text-[#d4af37]/10 transition-colors">04</div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-[#0f354e] mb-4">UKM</h3>
            <p class="text-slate-500 text-sm leading-relaxed">wadah bagi mahasiswa untuk mengeksplorasi minat, mengasah bakat, dan membangun jejaring di luar jam akademik.</p>
          </div>
        </div>

        <div class="group bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
          <div class="text-7xl font-black text-slate-50 absolute -right-4 -top-4 group-hover:text-[#d4af37]/10 transition-colors">05</div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-[#0f354e] mb-4">PMII</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Organisasi kemahasiswaan Islam yang fokus pada pengembangan intelektual, spiritual, dan nilai-nilai pergerakan.</p>
          </div>
        </div>

      </div>
    </div>

  </main>

  <footer class="mt-auto bg-[#0f354e] py-8 text-center text-white/40 text-xs tracking-widest uppercase">
    &copy; 2026 Institut Teknologi Al-Mahrusiyah Kediri
  </footer>

</body>
</html>