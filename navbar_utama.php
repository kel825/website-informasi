<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#0f354e] py-2 shadow-lg text-white">
  <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
    
    <a href="index.php" class="flex items-center gap-3 md:gap-4 group">
      <img src="gambar/itama_new-removebg-preview.png" 
           class="h-14 md:h-24 w-auto object-contain transition-transform duration-300 group-hover:scale-105" 
           alt="Logo ITAMA">
      <div class="flex flex-col">
        <span class="font-display font-bold text-sm md:text-xl leading-tight">
          Institut Teknologi
        </span>
        <span class="font-display font-bold text-[#d4af37] text-xs md:text-lg leading-tight">
          Al-Mahrusiyah
        </span>
      </div>
    </a>

    <button id="mobile-menu-button" class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 focus:outline-none">
      <span class="w-6 h-0.5 bg-white rounded-full transition-all duration-300 origin-center"></span>
      <span class="w-6 h-0.5 bg-white rounded-full transition-all duration-300"></span>
      <span class="w-6 h-0.5 bg-white rounded-full transition-all duration-300 origin-center"></span>
    </button>

    <div class="hidden md:flex items-center gap-8 text-sm font-bold uppercase tracking-wide">
      <?php
      $menus = [
          'Beranda'    => 'index.php',
          'Tentang'    => 'tentang.php',
          'Program'    => 'program.php',
          'Organisasi' => 'organisasi.php',
          'Fasilitas'  => 'fasilitas.php',
          'Kontak'     => 'kontak.php'
      ];

      foreach ($menus as $name => $link) {
          $activeClass = ($current_page == $link) ? 'text-[#d4af37] border-[#d4af37]' : 'border-transparent hover:text-[#d4af37] hover:border-[#d4af37]';
          echo "<a href='$link' class='transition-colors pb-1 border-b-2 $activeClass'>$name</a>";
      }
      ?>
      <a href="siakad.php" class="bg-[#d4af37] text-[#0f354e] px-5 py-2 rounded-full hover:bg-white transition-all">SIAKAD</a>
    </div>
  </div>

  <div id="mobile-menu" class="hidden md:hidden bg-[#0f354e] border-t border-white/10 px-4 py-6 space-y-4 shadow-xl">
    <?php
    foreach ($menus as $name => $link) {
        $activeClass = ($current_page == $link) ? 'text-[#d4af37]' : 'text-white/80 hover:text-[#d4af37]';
        echo "<a href='$link' class='block text-lg font-bold uppercase tracking-wider $activeClass'>$name</a>";
    }
    ?>
    <a href="siakad.php" class="block text-center bg-[#d4af37] text-[#0f354e] py-3 rounded-xl font-bold">SIAKAD</a>
  </div>
</nav>

<script>
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  const spans = btn.querySelectorAll('span');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    // Animasi tombol hamburger menjadi 'X'
    spans[0].classList.toggle('rotate-45');
    spans[0].classList.toggle('translate-y-2');
    spans[1].classList.toggle('opacity-0');
    spans[2].classList.toggle('-rotate-45');
    spans[2].classList.toggle('-translate-y-2');
  });
</script>