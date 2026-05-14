<!doctype html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - ITAMA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    .font-display { font-family: 'Playfair Display', serif; }
    .font-body { font-family: 'Source Sans Pro', sans-serif; }
    .glass-effect { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); }
  </style>
</head>
<body class="font-body bg-slate-50 min-h-screen flex flex-col">
  
  <?php include 'navbar_utama.php'; ?>

  <main class="pt-48 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
      
      <div class="mb-16 border-l-8 border-[#d4af37] pl-6 animate-fade-in">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-[#0f354e]">Mengenal ITAMA</h2>
        <p class="text-slate-500 mt-2 text-lg">Integrasi Teknologi Modern dan Nilai Luhur Pesantren.</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-stretch">
        
        <div class="space-y-8">
          <div class="bg-white p-10 rounded-[2rem] shadow-xl border border-slate-100 hover:shadow-2xl transition-all duration-300">
            <div class="w-16 h-16 bg-[#d4af37]/10 rounded-2xl flex items-center justify-center mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18 18.246 18.477 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </div>
            <h3 class="font-display text-3xl font-bold text-[#0f354e] mb-4">Membangun Peradaban</h3>
            <p class="text-slate-600 leading-relaxed text-lg mb-6">
              Institut Teknologi Al-Mahrusiyah hadir sebagai jawaban atas tantangan zaman digital. Kami berkomitmen melahirkan lulusan yang kompetitif secara global namun tetap memiliki akar moral yang kuat dari tradisi pesantren.
            </p>
            <hr class="border-slate-100 mb-6">
            <div class="flex items-center gap-4 text-[#0f354e] font-bold">
              <div class="flex -space-x-2">
                <div class="w-10 h-10 rounded-full bg-[#d4af37] border-2 border-white"></div>
                <div class="w-10 h-10 rounded-full bg-[#0f354e] border-2 border-white text-white flex items-center justify-center text-xs"></div>
              </div>
              <p class="text-sm">Bergabunglah dengan 200+ mahasiswa berbakat lainnya.</p>
            </div>
          </div>
        </div>

        <div class="bg-[#0f354e] text-white p-10 rounded-[2rem] shadow-2xl relative overflow-hidden flex flex-col justify-center">
          <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
          
          <div class="relative z-10">
            <h3 class="font-display text-2xl font-bold text-[#d4af37] mb-8 flex items-center gap-3">
              <span class="w-12 h-1 bg-[#d4af37] rounded-full"></span> Visi & Misi
            </h3>
            
            <div class="mb-10 p-6 bg-white/5 border border-white/10 rounded-2xl italic">
              <p class="text-xl leading-relaxed">
                "Menjadi institusi pendidikan teknologi terkemuka di tingkat nasional yang berlandaskan nilai-nilai Islami dan kearifan lokal."
              </p>
            </div>

            <div class="space-y-8">
              <div class="flex gap-5 group">
                <span class="flex-shrink-0 w-10 h-10 bg-[#d4af37] text-[#0f354e] rounded-full flex items-center justify-center font-bold">01</span>
                <p class="text-white/80 group-hover:text-white transition-colors">Menyelenggarakan pendidikan teknologi yang berkualitas dan relevan dengan industri.</p>
              </div>
              <div class="flex gap-5 group">
                <span class="flex-shrink-0 w-10 h-10 bg-[#d4af37] text-[#0f354e] rounded-full flex items-center justify-center font-bold">02</span>
                <p class="text-white/80 group-hover:text-white transition-colors">Mengembangkan riset inovatif yang memberikan solusi nyata bagi masyarakat.</p>
              </div>
              <div class="flex gap-5 group">
                <span class="flex-shrink-0 w-10 h-10 bg-[#d4af37] text-[#0f354e] rounded-full flex items-center justify-center font-bold">03</span>
                <p class="text-white/80 group-hover:text-white transition-colors">Membentuk ekosistem kampus yang menanamkan karakter akhlakul karimah.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer class="mt-auto bg-[#0f354e] py-10 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p class="text-white/50 text-sm italic">&copy; 2026 Institut Teknologi Al-Mahrusiyah. Unggul dalam Teknologi, Mulia dalam Akhlak.</p>
    </div>
  </footer>

</body>
</html>