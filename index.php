<!doctype html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - ITAMA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    .font-display { font-family: 'Playfair Display', serif; }
    .font-body { font-family: 'Source Sans Pro', sans-serif; }
    .facility-card:hover .icon-box { transform: scale(1.1) rotate(5deg); }
  </style>
</head>
<body class="font-body bg-slate-50 flex flex-col min-h-screen">

  <?php include 'navbar_utama.php'; ?>

  <header class="pt-40 pb-20 bg-[#0f354e] text-center text-white">
    <div class="max-w-4xl mx-auto px-4 animate-fade-in">
      <h1 class="font-display text-5xl md:text-6xl font-bold mb-6">Inovasi Teknologi <br><span class="text-[#d4af37]">Berbasis Nilai Islami</span></h1>
      <p class="text-lg opacity-80 mb-8 leading-relaxed">Selamat datang di Institut Teknologi Al-Mahrusiyah. Kami mencetak lulusan yang tidak hanya ahli dalam teknologi, tapi juga kuat dalam karakter.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="program.php" class="bg-[#d4af37] text-[#0f354e] px-8 py-3 rounded-full font-bold hover:bg-white transition">Lihat Jurusan</a>
        <a href="kontak.php" class="border border-white/30 px-8 py-3 rounded-full font-bold hover:bg-white/10 transition">Hubungi Kami</a>
      </div>
    </div>
  </header>

  <section class="py-12 -mt-10">
    <section class="py-16 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="group bg-white p-8 rounded-3xl shadow-lg text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <div class="text-4xl font-bold text-[#0f354e] mb-2 group-hover:text-[#d4af37] transition-colors">4+</div>
        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-[0.2em]">Tahun Berdiri</div>
      </div>

      <div class="group bg-white p-8 rounded-3xl shadow-lg text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <div class="text-4xl font-bold text-[#0f354e] mb-2 group-hover:text-[#d4af37] transition-colors">20+</div>
        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-[0.2em]">Dosen Ahli</div>
      </div>

      <div class="group bg-white p-8 rounded-3xl shadow-lg text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <div class="text-4xl font-bold text-[#0f354e] mb-2 group-hover:text-[#d4af37] transition-colors">100+</div>
        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-[0.2em]">Mahasiswa Aktif</div>
      </div>

      <div class="group bg-white p-8 rounded-3xl shadow-lg text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl border-t-4 border-[#d4af37]">
        <div class="text-4xl font-bold text-[#d4af37] mb-2">B</div>
        <div class="text-[10px] text-gray-400 uppercase font-bold tracking-[0.2em]">Akreditasi BAN-PT</div>
      </div>

    </div>
  </div>
</section>
  </section>

  <footer class="mt-auto bg-[#0f354e] py-8 text-center text-white/60 text-sm">
    <p>&copy; 2026 Institut Teknologi Al-Mahrusiyah. All rights reserved.</p>
  </footer>
</body>
</html>