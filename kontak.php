<!doctype html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - ITAMA</title>
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
      <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
        
        <div>
          <h2 class="font-display text-4xl md:text-6xl font-bold text-[#0f354e] mb-6 tracking-tight">Hubungi <span class="text-[#d4af37]">Kami</span></h2>
          <div class="w-24 h-1.5 bg-[#d4af37] mb-10"></div>
          <p class="text-xl text-slate-500 mb-12 leading-relaxed max-w-lg">
            Kami siap membantu Anda untuk informasi lebih lanjut mengenai pendaftaran, akademik, atau layanan kampus ITAMA.
          </p>
          
          <div class="grid sm:grid-cols-2 gap-8">
            <div class="group flex flex-col gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
              <div class="w-12 h-12 bg-[#0f354e] text-[#d4af37] flex items-center justify-center rounded-2xl text-xl">📍</div>
              <div>
                <h4 class="font-bold text-[#0f354e] mb-1">Lokasi Utama</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Jl. Ngampel Raya, Mojoroto, Kota Kediri, Jawa Timur</p>
              </div>
            </div>
            
            <div class="group flex flex-col gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
              <div class="w-12 h-12 bg-[#0f354e] text-[#d4af37] flex items-center justify-center rounded-2xl text-xl">📞</div>
              <div>
                <h4 class="font-bold text-[#0f354e] mb-1">WhatsApp</h4>
                <p class="text-slate-500 text-sm font-medium">0823-3600-0931</p>
                <p class="text-slate-500 text-sm font-medium">0857-0880-4645</p>
              </div>
            </div>

            <a href="https://www.instagram.com/itamalirboyo" target="_blank" class="group flex flex-col gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
              <div class="w-12 h-12 bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] text-white flex items-center justify-center rounded-2xl text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
              </div>
              <div>
                <h4 class="font-bold text-[#0f354e] mb-1">Instagram</h4>
                <p class="text-slate-500 text-sm">@itamalirboyo</p>
              </div>
            </a>

            <a href= "https://www.itama.ac.id/" class="group flex flex-col gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
              <div class="w-12 h-12 bg-[#0f354e] text-[#d4af37] flex items-center justify-center rounded-2xl text-xl">📧</div>
              <div>
                <h4 class="font-bold text-[#0f354e] mb-1">Email</h4>
                <p class="text-slate-500 text-sm">itama.ac.id</p>
              </div>
            </a>
          </div>
        </div>

        <div class="relative">
  <div class="absolute -inset-4 bg-[#d4af37]/10 rounded-[3rem] blur-2xl"></div>
  
  <div class="relative h-[450px] w-full rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white transition-all duration-500 hover:scale-[1.01] group">
    <div class="absolute top-6 left-6 z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
      <div class="bg-[#0f354e] text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
        📍 Kampus Utama ITAMA
      </div>
    </div>

    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.88048259074!2d111.9866405748443!3d-7.802446792217646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856d784904f1f%3A0x100b8f590e4f19fb!2sITAMA%20-%20INSTITUT%20TEKNOLOGI%20AL%20MAHRUSIYAH!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
      class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700 ease-in-out" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

      </div>
    </div>
  </main>

  <footer class="mt-auto bg-[#0f354e] py-10 text-center text-white/40 text-xs tracking-widest uppercase border-t border-white/5">
    &copy; 2026 Institut Teknologi Al-Mahrusiyah Kediri. All rights reserved.
  </footer>

</body>
</html>