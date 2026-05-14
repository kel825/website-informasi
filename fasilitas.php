<!doctype html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas - ITAMA</title>
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
        <h2 class="font-display text-4xl md:text-5xl font-bold text-[#0f354e] mb-4">Sarana & Prasarana</h2>
        <div class="w-24 h-1 bg-[#d4af37] mx-auto mb-6"></div>
        <p class="text-slate-500 max-w-2xl mx-auto text-lg">Mendukung kegiatan akademik dan pengembangan karakter mahasiswa dengan fasilitas berstandar modern.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <div class="facility-card bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl">
          <div class="icon-box w-16 h-16 bg-[#0f354e]/5 rounded-2xl flex items-center justify-center mb-6 text-3xl transition-transform duration-300">💻</div>
          <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">Lab Komputer</h3>
          <p class="text-sm text-slate-500 leading-relaxed">Laboratorium High-Spec untuk riset AI, Programming, dan Software Development.</p>
        </div>

        <div class="facility-card bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl">
          <div class="icon-box w-16 h-16 bg-[#0f354e]/5 rounded-2xl flex items-center justify-center mb-6 text-3xl transition-transform duration-300">📚</div>
          <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">E-Library</h3>
          <p class="text-sm text-slate-500 leading-relaxed">Akses ke ribuan jurnal digital dan koleksi buku fisik untuk referensi belajar.</p>
        </div>

        <div class="facility-card bg-white rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl overflow-hidden group">
  <div class="relative h-52 overflow-hidden">
    <img src="gambar/masjid.jpg" 
         alt="Masjid Al-Utsmaniyah" 
         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
  </div>

  <div class="p-8">
    <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">Masjid Al-Utsmaniyah</h3>
    <p class="text-sm text-slate-500 leading-relaxed">
      Pusat kegiatan spiritual dan pembinaan karakter Islami yang megah sebagai jantung kehidupan di lingkungan kampus ITAMA.
    </p>
    
    <div class="mt-4 pt-4 border-t border-slate-50 flex items-center gap-2">
      <span class="w-2 h-2 bg-[#d4af37] rounded-full"></span>
      <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Kapasitas 1.000+ Jamaah</span>
    </div>
  </div>
</div>

        <div class="facility-card bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl">
          <div class="icon-box w-16 h-16 bg-[#0f354e]/5 rounded-2xl flex items-center justify-center mb-6 text-3xl transition-transform duration-300">📡</div>
          <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">Konektivitas</h3>
          <p class="text-sm text-slate-500 leading-relaxed">Area kampus tercover WiFi kecepatan tinggi untuk menunjang riset mahasiswa.</p>
        </div>

        <div class="facility-card bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl">
          <div class="icon-box w-16 h-16 bg-[#0f354e]/5 rounded-2xl flex items-center justify-center mb-6 text-3xl transition-transform duration-300">🏐</div>
          <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">Sport Center</h3>
          <p class="text-sm text-slate-500 leading-relaxed">Fasilitas olahraga outdoor untuk futsal, voli, dan badminton.</p>
        </div>

        <div class="facility-card bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-100 transition-all duration-300 hover:shadow-2xl">
          <div class="icon-box w-16 h-16 bg-[#0f354e]/5 rounded-2xl flex items-center justify-center mb-6 text-3xl transition-transform duration-300">🏢</div>
          <h3 class="font-display text-xl font-bold text-[#0f354e] mb-3">Asrama Mahasiswa</h3>
          <p class="text-sm text-slate-500 leading-relaxed">Hunian nyaman yang terintegrasi dengan lingkungan pendidikan pesantren.</p>
        </div>

      </div>
    </div>
  </main>

  <footer class="mt-auto bg-[#0f354e] py-10 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p class="text-white/40 text-sm italic tracking-widest uppercase">&copy; 2026 Institut Teknologi Al-Mahrusiyah</p>
    </div>
  </footer>

</body>
</html>