<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $to = "gading.7@smaasbsolo.sch.id";
    $subject = "Pesan dari Form Kontak";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";
    $body = "Nama: $name\nEmail: $email\nPesan:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Pesan berhasil dikirim.</p>";
    } else {
        echo "<p>Gagal mengirim pesan.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iLuviee Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./src/section/navbar/icon.jpg" alt="iLuviee-Developer" />
    <script src="script.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>
  <body>
    <nav class="navbar p-4">
      <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="https://isntagram.com/gadingagani" class="text-gray-100 text-2xl font-bold">iLuviee</a>
    
        <!-- Menu Button (Mobile) -->
        <button id="menu-toggle" class="lg:hidden text-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
    
        <!-- Navigation Links -->
        <ul id="menu" class="hidden lg:flex space-x-6">
          <li>
            <a href="#profile" class="nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Home</a>
          </li>
          <li>
            <a href="#about" class="nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">About</a>
          </li>
          <li>
            <a href="#skill" class="nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Skills</a>
          </li>
          <li>
            <a href="#project" class="nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Project</a>
          </li>
          <li>
            <a href="#contact" class="nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Contact</a>
          </li>
        </ul>
      </div>
    
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="mobile-menu lg:hidden hidden text-gray-100 p-4">
        <ul class="space-y-4">
          <li><a href="#profile" class="mobile-link nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Home</a></li>
          <li><a href="#about" class="mobile-link nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">About</a></li>
          <li><a href="#skill" class="mobile-link nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Skills</a></li>
          <li><a href="#project" class="mobile-link nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Project</a></li>
          <li><a href="#contact" class="mobile-link nav-link hover:drop-shadow-2xl hover:text-slate-50 transition duration-300 ease-in-out">Contact</a></li>
        </ul>
      </div>
    </nav>





    
  
    <!-- Profile Section -->
    <section id="profile" class="profile m-20">
      <div class="container mx-auto flex items-center justify-center">
        <div class="my-16 flex flex-col lg:flex-row items-center">
          <img src="./src/section/profile/pfp.jpg" alt="Profile" class="pfp-image drop-shadow-2xl border-double border-8 border-sky-90 rounded-full border-2 border-gray-600">
          <div class="mt-4 lg:mt-0 lg:ml-24">
            <h1 class="font-bold">Rafif Gading Aganisutha</h1>
            <p class="text-gray-400 mt-2">Coding | Gaming | Music</p>
          </div>
        </div>
      </div>
    </section>

    <svg class="-mb-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
        <path fill="#2C2C2E" d="M0,0 Q720,120 1440,0 V120 H0 Z"></path>
    </svg>


    <!-- About Section -->
    <section id="about" class="about text-center">
      <div class="pb-20">
        <h1 class="pt-20 pb-10 text-4xl font-bold">Tentang Saya</h1>        
        <div class="mx-20">
          <p class="text-xl">
            Seorang siswa dari SMA Al - Azhar Syifa Budi Solo yang menyukai teknologi, terjun ke dunia digital dan suka bermain game. Memiliki secuil bakat dalam bidang Fotografi, Videografi, Gaming, Musik, dll.
          </p>
          <br>
          <p class="text-xl">
            I would like to play Piano. Piano adalah salah satu alat musik yang paling saya gemari dan saya suka. Sedikit sedikit aja bisa piano ;/
          </p>
        </div>
      </div>
      <svg class="-mb-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
        <path fill="#1D1B27" d="M0,0 Q720,120 1440,0 V120 H0 Z"></path>
      </svg>
    </section>



    


    
    <section id="skill" class="skill m-20">
      <div class="p-10">
        <h1 class="text-4xl font-bold text-center drop-shadow-2xl">My Skills</h1>
        <div class="skill-col text-center my-10">
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/javascript.png" alt="" class="">
              </div>
              <h2>Javascript</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/html.png" alt="" class="">
              </div>
              <h2>HTML</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/am.png" alt="" class="">
              </div>
              <h2>Alight Motion</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/tiktok.png" alt="" class="">
              </div>
              <h2>Tiktok</h2>
            </div>
          </div>
        </div>

        <div class="skill-col text-center my-10">
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/photoshop.png" alt="" class="">
              </div>
              <h2>Photoshop</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/tailwind.svg" alt="" class="">
              </div>
              <h2>Tailwind CSS</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/mobile-legends.png" alt="" class="">
              </div>
              <h2>Gaming</h2>
            </div>
          </div>
          <div class="skill-box">
            <div class="skill-inner">
              <div class="skill-img">
                <img src="./src/skill/capcut.png" alt="" class="">
              </div>
              <h2>Capcut</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <svg class="-mb-11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
        <path fill="#2C2C2E" d="M0,0 Q720,120 1440,0 V120 H0 Z"></path>
    </svg>    


    <section id="project" class="project pt-10">
      <div class="m-10">
        <h2 class="text-4xl font-bold text-center drop-shadow-2xl">My Projects</h2>
        <div class="project-container my-10">
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="project-box p-4 shadow-md rounded-lg">
              <!-- Card 1 Content -->
              <img src="./src/section/project/acp.png" alt="acp">
              <h2 class="font-bold">Al Azhar Creativity Project 5.0</h2>
              <p class="">Bagian dari panitia ACP-5.0 yang diselenggarakan oleh OSIS MPK SMA Al Azhar Syifa Budi Solo</p>
            </div>
            <div class="project-box p-4 shadow-md rounded-lg">
              <!-- Card 2 Content -->
              <img src="./src/section/project/osismpksmasbest.png" alt="acp">
              <h2 class="font-bold">OSIS SMASBeSt</h2>
              <p class="">Bidang Teknologi Informasi</p>
            </div>
            <div class="project-box p-4 shadow-md rounded-lg">
              <!-- Card 3 Content -->
              <img src="./src/section/project/server.jpg" alt="acp">
              <h2 class="font-bold">Game-Server Manager</h2>
              <p class="">Bagian dari pengurus server game Growtopia dengan bahasa pemrograman C++</p>
            </div>
          </div>

        </div>
      </div>
      <svg class="-mb-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
        <path fill="#1D1B27" d="M0,0 Q720,120 1440,0 V120 H0 Z"></path>
      </svg>
    </section>


    <section class="contact" id="contact">
      <div class="contact-container m-20">
        <div class="contact-inner">
          <!-- <h2 class="text-4xl font-bold text-center drop-shadow-2xl">Contact</h2>
          <p class="text-center mt-10"> Contact me on madia social below!</p>
          <div class="contact-icon-inner flex space-x-4 my-10">
            <div class="icon-contact-redirect">
              <a href="https://isntagram.com/gadingagani"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg></a>
            </div>
            <div class="icon-contact-redirect">
              <a href="mailto:gading.7@smaasbsolo.sch.id"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></a>
            </div>
            <div class="icon-contact-redirect">
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
            </div>
            <div class="icon-contact-redirect">
              <a href="https://github.com/iluviee"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg></a>
            </div>
            <div class="icon-contact-redirect">
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg></a>
            </div>
          </div> -->
          <h2>Hubungi Kami</h2>
    <form method="POST" action="">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>
        
        <button type="submit">Kirim</button>
    </form>
        </div>
      </div>
    </section>


    <section id="footer" class="footer">
      <div class="footer-container">
        <div>
          <div class="text-center">
            <!-- <i class="fa fa-instagram" style="padding-right: 5px"></i> -->
            <h5> © 2025 iLuviee Developer. All Rights Reserved.</h5>
          </div>
        </div>
      </div>
      
    </section>
  
  
  
    <script>
      // Toggle menu visibility on small screens
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    </script>
    <script>
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
    
          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);
    
          if (targetElement) {
            targetElement.scrollIntoView({
              behavior: 'smooth',
              block: 'start',
            });
          }
        });
      });
    </script>

  
    <style>
      
      
    </style>
  </body>
</html>
