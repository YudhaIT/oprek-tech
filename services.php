<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OprekTech</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#0f172a',
                        accent: '#64748b',
                        light: '#f8fafc',
                    },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                }
            }
        }
    </script>

    <style>
        .glass-nav { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.05); }
        .card-shadow { box-shadow: 0 10px 30px -5px rgba(0,0,0,0.04); border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease; }
        .card-shadow:hover { transform: translateY(-8px); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.1); border-color: #2563eb; }
        
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { display: flex; width: max-content; animation: marquee 40s linear infinite; }

        .gradient-bg { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); }
        .step-number { -webkit-text-stroke: 1px #2563eb; color: transparent; }
        
                .glass-nav { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.05); }
        
        /* FAQ SMOOTH ANIMATION */
        .faq-content {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 0.4s ease-out, padding 0.4s ease;
            overflow: hidden;
        }
        .faq-item:focus-within .faq-content {
            grid-template-rows: 1fr;
            padding-top: 1.5rem;
        }
        .faq-icon { transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .faq-item:focus-within .faq-icon { transform: rotate(135deg); color: #2563eb; }

        .footer-link { transition: all 0.3s ease; }
        .footer-link:hover { color: #2563eb; padding-left: 4px; }
        
        .faq-answer {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Logika: Jika checkbox dicentang, maka baris grid menjadi 1fr (terbuka) */
        input:checked ~ .faq-answer {
            grid-template-rows: 1fr;
        }

        .faq-icon { transition: transform 0.5s ease; }
        input:checked ~ div .faq-icon { transform: rotate(135deg); color: #2563eb; }
        
        /* Back to Top */
        #backToTop { transition: all 0.5s ease; opacity: 0; visibility: hidden; }
        #backToTop.visible { opacity: 1; visibility: visible; }
        
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { display: flex; width: max-content; animation: marquee 20s linear infinite; }
        
        html, body {
        overflow-x: hidden;
        }
    </style>
</head>
<body class="bg-light text-secondary font-sans antialiased overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center">
                <img src="1768141321473.jpg" class="w-8 h-8 object-cover rounded-full">
                 </div>
          
                <span class="text-xl font-bold tracking-tighter uppercase text-secondary">Oprek<span class="text-primary font-black">Tech</span></span>
            </div>
            <div class="hidden lg:flex gap-8 text-sm font-semibold text-accent">
                <a href="#services" class="hover:text-primary transition">Layanan</a>
                <a href="#process" class="hover:text-primary transition">Proses</a>
                <a href="#portfolio" class="hover:text-primary transition">Project</a>
                <a href="#pricing" class="hover:text-primary transition">Harga</a>
            </div>
            <a href="https://wa.me/6289502128237" class="bg-primary hover:bg-blue-700 text-white px-7 py-3 rounded-full text-xs font-bold shadow-lg shadow-blue-500/40 transition active:scale-95">
                Mulai Project
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="pt-48 pb-24 px-6 relative bg-gradient-to-br from-white via-blue-50 to-blue-100 overflow-hidden">

  <div class="absolute top-0 left-1/2 w-[400px] h-[400px] bg-blue-400 opacity-20 blur-3xl rounded-full -translate-x-1/2"></div>
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-8" data-aos="fade-down">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                </span>
                <span class="text-primary text-[10px] font-black uppercase tracking-[0.2em]">Layanan Web Terpercaya #1</span>
            </div>
            <h1 class="text-4xl md:text-8xl font-black text-secondary leading-[1.05] mb-8 tracking-tighter" data-aos="fade-up">
                Website Mewah <br> Bisnis <span class="text-primary italic">Auto Wah.</span>
            </h1>
            <p class="text-accent text-lg md:text-2xl max-w-3xl mx-auto mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Kami membantu pemilik bisnis menciptakan kehadiran digital yang prestisius, kencang, dan menghasilkan konversi tinggi setiap hari.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#pricing" class="bg-primary text-white px-12 py-5 rounded-2xl font-black text-sm uppercase tracking-widest shadow-2xl shadow-blue-500/40 hover:scale-105 transition">Cek Paket Harga</a>
                <a href="#portfolio" class="bg-slate-100 text-secondary px-12 py-5 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-slate-200 transition">Lihat Hasil Kerja</a>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <?php
$partners = [
    ['name' => 'Google Cloud', 'logo' => 'https://cdn.simpleicons.org/googlecloud'],
    ['name' => 'Amazon AWS', 'logo' => 'img/ph-s.png'],
    ['name' => 'Cloudflare', 'logo' => 'https://cdn.simpleicons.org/cloudflare'],
    ['name' => 'Laravel', 'logo' => 'https://cdn.simpleicons.org/laravel'],
    ['name' => 'Digital Ocean', 'logo' => 'https://cdn.simpleicons.org/digitalocean'],
    ['name' => 'Stripe', 'logo' => 'https://cdn.simpleicons.org/stripe'],
    ['name' => 'Midtrans', 'logo' => 'img/midtrans.png'],
    ['name' => 'Tailwind CSS', 'logo' => 'https://cdn.simpleicons.org/tailwindcss'],
    ['name' => 'Redis', 'logo' => 'https://cdn.simpleicons.org/redis'],
    ['name' => 'PostgreSQL', 'logo' => 'https://cdn.simpleicons.org/postgresql']
];
?>

<section class="py-16 border-y border-slate-100 bg-white overflow-hidden">
    <div class="animate-marquee flex gap-16 items-center ">
        <?php foreach(array_merge($partners, $partners) as $p): ?>
            <div class="flex items-center gap-4 grayscale opacity-40 hover:grayscale-0 transition duration-500">

                <!-- LOGO CDN -->
                <img src="<?= $p['logo'] ?>" class="w-8 h-8 object-contain">

                <!-- TEXT -->
                <span class="text-2xl font-black text-secondary uppercase tracking-tighter whitespace-nowrap">
                    <?= $p['name'] ?>
                </span>

            </div>
        <?php endforeach; ?>
    </div>
</section>

    <!-- NEW: Problem Section -->
    <section class="py-24 px-6 bg-light">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-5xl font-black text-secondary leading-tight mb-8">
                    Website Anda Saat Ini <br> <span class="text-red-500 italic">Bikin Rugi?</span>
                </h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-none w-10 h-10 bg-red-50 text-red-500 rounded-full flex items-center justify-center font-bold">1</div>
                        <p class="text-accent font-medium uppercase text-sm tracking-tight pt-2">Loading Lemot? 53% Pengunjung pergi jika web loading > 3 detik.</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-none w-10 h-10 bg-red-50 text-red-500 rounded-full flex items-center justify-center font-bold">2</div>
                        <p class="text-accent font-medium uppercase text-sm tracking-tight pt-2">Desain Jadul? Pengunjung menilai kredibilitas bisnis dalam 0.05 detik pertama.</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-none w-10 h-10 bg-red-50 text-red-500 rounded-full flex items-center justify-center font-bold">3</div>
                        <p class="text-accent font-medium uppercase text-sm tracking-tight pt-2">Gak Muncul di Google? Percuma web bagus kalau tidak ada yang menemukan.</p>
                    </div>
                </div>
            </div>
            <div class="bg-primary p-12 rounded-[3rem] text-white" data-aos="fade-left">
                <h3 class="text-2xl font-black mb-6 uppercase">Solusi OprekTech</h3>
                <p class="mb-8 opacity-80 font-medium">Kami memperbaiki semua itu. Kami membangun website dengan standar teknologi 2026 yang dioptimasi untuk kecepatan, estetika mewah, dan SEO Google halaman pertama.</p>
                <ul class="space-y-4 font-bold text-sm uppercase tracking-widest">
                    <li><i class="fa-solid fa-check-double mr-3"></i> Skor PageSpeed 90+</li>
                    <li><i class="fa-solid fa-check-double mr-3"></i> UI/UX Mewah & Modern</li>
                    <li><i class="fa-solid fa-check-double mr-3"></i> Security SSL Grade A</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services Detailed -->
    <section id="services" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-3xl md:text-6xl font-black text-secondary leading-[1.05] mb-8 tracking-tighter">Layanan <span class="text-primary italic">All-In-One</span></h2>
                <p class="text-accent max-w-2xl mx-auto uppercase text-xs font-bold tracking-[0.4em]">Everything you need to dominate the market</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- 1 -->
                <div class="p-10 rounded-[3rem] card-shadow bg-white group">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                        <i class="fa-solid fa-pen-nib text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 uppercase">Custom UI/UX Design</h4>
                    <p class="text-sm text-accent leading-relaxed mb-6 font-medium">Bukan template pasaran. Kami mendesain dari nol agar brand Anda memiliki karakter unik yang tidak dimiliki kompetitor.</p>
                    <ul class="text-[10px] font-bold text-slate-400 space-y-2 uppercase tracking-widest">
                        <li>- Figma Prototype</li>
                        <li>- User Persona Research</li>
                        <li>- Brand Consistency</li>
                    </ul>
                </div>
                <!-- 2 -->
                <div class="p-10 rounded-[3rem] card-shadow bg-white group">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                        <i class="fa-solid fa-cart-flatbed text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 uppercase">Advanced E-Commerce</h4>
                    <p class="text-sm text-accent leading-relaxed mb-6 font-medium">Toko online lengkap dengan sistem Midtrans, hitung ongkir otomatis, dan dashboard manajemen produk yang intuitif.</p>
                    <ul class="text-[10px] font-bold text-slate-400 space-y-2 uppercase tracking-widest">
                        <li>- Payment Gateway</li>
                        <li>- Inventory System</li>
                        <li>- Order Tracking</li>
                    </ul>
                </div>
                <!-- 3 -->
                <div class="p-10 rounded-[3rem] card-shadow bg-white group">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                        <i class="fa-solid fa-shield-virus text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 uppercase">Web Security & Maintenance</h4>
                    <p class="text-sm text-accent leading-relaxed mb-6 font-medium">Layanan maintenance berkala untuk memastikan web selalu aman dari hacker dan data Anda selalu ter-backup 24/7.</p>
                    <ul class="text-[10px] font-bold text-slate-400 space-y-2 uppercase tracking-widest">
                        <li>- Daily Backups</li>
                        <li>- Firewall Protection</li>
                        <li>- System Updates</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW: How We Work (6 Steps) -->
    <section id="process" class="py-24 px-6 bg-slate-950 text-white relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/10 blur-[100px] rounded-full"></div>
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-3xl md:text-6xl font-black mb-6 italic tracking-tighter">Proses <span class="text-primary italic"> Cepat & Terarah</span></h2>
                <p class="text-slate-500 uppercase text-xs font-bold tracking-[0.5em]">From Idea to Production in 6 Steps</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Step 1 -->
                <div class="relative" data-aos="fade-up">
                    <div class="text-7xl font-black step-number mb-4">01</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Discovery</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Konsultasi mendalam untuk memahami target market dan tujuan bisnis Anda.</p>
                </div>
                <!-- Step 2 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-7xl font-black step-number mb-4">02</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Strategy</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Penyusunan sitemap dan wireframe untuk alur user yang optimal (UI/UX).</p>
                </div>
                <!-- Step 3 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-7xl font-black step-number mb-4">03</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Visual Design</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Pembuatan desain visual yang mewah sesuai branding identitas perusahaan.</p>
                </div>
                <!-- Step 4 -->
                <div class="relative" data-aos="fade-up">
                    <div class="text-7xl font-black step-number mb-4">04</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Development</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Coding website menggunakan teknologi terbaru yang ringan dan powerful.</p>
                </div>
                <!-- Step 5 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-7xl font-black step-number mb-4">05</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Testing</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Quality Control ketat untuk kecepatan, keamanan, dan responsivitas HP.</p>
                </div>
                <!-- Step 6 -->
                <div class="relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-7xl font-black step-number mb-4">06</div>
                    <h4 class="text-xl font-bold mb-3 uppercase tracking-widest">Deployment</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium">Website Live! Serah terima aset dan panduan pengelolaan admin.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mid-Page CTA -->
    <section class="py-20 gradient-bg text-white text-center">
        <div class="max-w-4xl mx-auto px-6" data-aos="zoom-in">
            <h2 class="text-3xl md:text-5xl font-black text-white leading-[1.05] mb-8 tracking-tighter">Sudah Siap Melejit <br> Bisnis Anda Hari Ini?</h2>
            <a href="https://wa.me/628950212" class="inline-block bg-white text-primary px-12 py-5 rounded-2xl font-black text-sm uppercase tracking-widest hover:scale-105 transition shadow-2xl">Konsultasi Sekarang Gratis!</a>
        </div>
    </section>
    
    
    <!-- SECTION: THE ENGINE (SIAPA YANG BIKIN) -->
    <section id="team" class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-black text-secondary mb-4 tracking-tighter uppercase">Inilah <span class="text-primary italic"> Kami</span></h2>
                <p class="text-accent font-bold text-[10px] uppercase tracking-[0.3em]">Otak di balik setiap baris kode yang berkualitas</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="bg-white p-10 rounded-[3rem] card-shadow text-center group" data-aos="fade-up">
                    <div class="w-28 h-28 mx-auto mb-8 rounded-[2rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-500 border-2 border-primary">
                        <img src="1768141321473.jpg" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-black mb-1">Adrian Aris P.</h4>
                    <p class="text-primary text-[10px] font-black uppercase tracking-widest mb-6 italic">Lead Systems Architect</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-graduation-cap"></i> Informatika ITB</div>
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-award"></i> Google Cloud Certified</div>
                    </div>
                    <p class="text-[11px] text-slate-400 italic leading-relaxed">"Saya memastikan infrastruktur website Anda sekuat gedung pencakar langit."</p>
                </div>

                <!-- Member 2 -->
                <div class="bg-white p-10 rounded-[3rem] card-shadow text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-28 h-28 mx-auto mb-8 rounded-[2rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-500 border-2 border-primary">
                        <img src="https://i.pravatar.cc/150?u=tech2" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-black mb-1">Sarah Clarissa</h4>
                    <p class="text-primary text-[10px] font-black uppercase tracking-widest mb-6 italic">UI/UX Strategist</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-graduation-cap"></i> DKV Univ. Indonesia</div>
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-award"></i> Nielsen Norman Cert.</div>
                    </div>
                    <p class="text-[11px] text-slate-400 italic leading-relaxed">"Desain bukan hanya estetika, tapi bagaimana pengunjung merasa nyaman bertransaksi."</p>
                </div>

                <!-- Member 3 -->
                <div class="bg-white p-10 rounded-[3rem] card-shadow text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-28 h-28 mx-auto mb-8 rounded-[2rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-500 border-2 border-primary">
                        <img src="https://i.pravatar.cc/150?u=tech3" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xl font-black mb-1">Kevin Sanjaya</h4>
                    <p class="text-primary text-[10px] font-black uppercase tracking-widest mb-6 italic">Fullstack Developer</p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-graduation-cap"></i> Binus International</div>
                        <div class="flex items-center justify-center gap-2 text-[10px] font-bold text-slate-500 uppercase"><i class="fa-solid fa-award"></i> Meta Front-End Cert.</div>
                    </div>
                    <p class="text-[11px] text-slate-400 italic leading-relaxed">"Performance is money. Saya memastikan website Anda memuat secepat kedipan mata."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section id="portfolio" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-6xl font-black text-secondary leading-[1.05] mb-8 tracking-tighter">Produk <span class="text-primary italic">Kami</span></h2>
                <p class="text-accent uppercase text-xs font-bold tracking-[0.4em]">Proof of our Excellence</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Project 1 -->
                <div class="bg-white rounded-[2.5rem] card-shadow overflow-hidden group" data-aos="fade-up">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="p-10">
                        <span class="text-[9px] font-black text-primary uppercase tracking-[0.3em] bg-blue-50 px-4 py-1.5 rounded-full border border-blue-100">E-Commerce</span>
                        <h4 class="text-2xl font-black mt-4 mb-2 uppercase italic tracking-tighter">Batik Modern ID</h4>
                        <p class="text-sm text-accent mb-8 font-medium">Peningkatan trafik sebesar 200% dalam 3 bulan setelah peluncuran.</p>
                        <div class="flex justify-between items-center pt-6 border-t border-slate-100">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Live Project 2024</span>
                            <a href="#" class="w-10 h-10 bg-slate-50 text-secondary rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Duplicate more projects here... -->
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-24 px-6 bg-light">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-7xl font-black secondery mb-4 uppercase tracking-tighter">Produk<span class="text-primary italic">Pilihan</span></h2>
                <p class="text-accent max-w-xl mx-auto uppercase text-xs font-bold tracking-[0.4em]">Harga Kompetitif Untuk Kualitas Premium</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 items-center">
                <!-- Paket Lite -->
                <div class="bg-white p-12 rounded-[3rem] card-shadow" data-aos="fade-right">
                    <h4 class="text-sm font-black text-accent uppercase mb-4 tracking-widest">Lite Hub</h4>
                    <div class="text-5xl font-black text-secondary mb-10 italic tracking-tighter">1.5Jt</div>
                    <ul class="space-y-5 text-xs text-slate-500 mb-12 font-bold uppercase tracking-tight">
                        <li><i class="fa-solid fa-check text-green-500 mr-3"></i> 1 Page Landing Page</li>
                        <li><i class="fa-solid fa-check text-green-500 mr-3"></i> Domain .com & Hosting</li>
                        <li><i class="fa-solid fa-check text-green-500 mr-3"></i> Responsive Layout</li>
                        <li class="opacity-20 italic"><i class="fa-solid fa-xmark mr-3"></i> No SEO Analysis</li>
                    </ul>
                    <a href="detail-lite.php" class="block w-full text-center py-4 bg-slate-50 text-secondary font-black rounded-xl text-xs uppercase tracking-widest hover:bg-slate-100 transition">Pilih Paket</a>
                </div>

                <!-- Paket Business -->
                <div class="bg-white p-12 rounded-[3.5rem] card-shadow border-2 border-primary relative transform scale-105" data-aos="fade-up">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-primary text-white text-[9px] font-black px-8 py-2 rounded-full uppercase tracking-[0.3em] shadow-xl shadow-blue-500/30">Paling Direkomendasikan</div>
                    <h4 class="text-sm font-black text-primary uppercase mb-4 tracking-widest italic tracking-widest">Business Growth</h4>
                    <div class="text-5xl font-black text-secondary mb-10 italic tracking-tighter">3.5Jt</div>
                    <ul class="space-y-5 text-xs text-slate-700 mb-12 font-black uppercase tracking-tight">
                        <li><i class="fa-solid fa-star text-primary mr-3"></i> Up to 5 Full Pages</li>
                        <li><i class="fa-solid fa-star text-primary mr-3"></i> SEO On-Page Injection</li>
                        <li><i class="fa-solid fa-star text-primary mr-3"></i> Business Cloud Server</li>
                        <li><i class="fa-solid fa-star text-primary mr-3"></i> 3 Email Profesional</li>
                        <li><i class="fa-solid fa-star text-primary mr-3"></i> Priority Maintenance</li>
                    </ul>
                    <a href="detail-business.php" class="block w-full text-center py-5 bg-primary text-white font-black rounded-2xl text-xs uppercase tracking-widest shadow-2xl shadow-blue-500/30 hover:scale-105 transition">Deploy Paket Pro</a>
                </div>

                <!-- Paket Enterprise -->
                <div class="bg-white p-12 rounded-[3rem] card-shadow" data-aos="fade-left">
                    <h4 class="text-sm font-black text-accent uppercase mb-4 tracking-widest">Enterprise</h4>
                    <div class="text-5xl font-black text-secondary mb-10 italic tracking-tighter">Custom</div>
                    <ul class="space-y-5 text-xs text-slate-500 mb-12 font-bold uppercase tracking-tight">
                        <li><i class="fa-solid fa-plus text-primary mr-3"></i> Unlimited Pages</li>
                        <li><i class="fa-solid fa-plus text-primary mr-3"></i> E-Commerce Engine</li>
                        <li><i class="fa-solid fa-plus text-primary mr-3"></i> Custom App Logic</li>
                        <li><i class="fa-solid fa-plus text-primary mr-3"></i> Dedicated Developer</li>
                    </ul>
                    <a href="#" class="block w-full text-center py-4 bg-slate-900 text-white font-black rounded-xl text-xs uppercase tracking-widest hover:bg-secondary transition">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-black text-center mb-16 italic tracking-tighter italic">Apa Sih<span class="text-primary italic"><br>Kata Klien Kami?</span></h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-slate-50 p-10 rounded-[2.5rem] relative border border-slate-100">
                    <div class="text-yellow-400 flex gap-1 mb-6 text-sm">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 italic font-medium leading-relaxed mb-8 text-sm">"Tim OprekTech sangat komunikatif dan hasilnya gila keren banget. Omzet online shop saya naik 40% sejak ganti website baru."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/100?u=1" class="w-full h-full">
                        </div>
                        <div>
                            <h5 class="font-black text-secondary text-xs uppercase tracking-widest">Budi Pratama</h5>
                            <p class="text-[9px] text-slate-400 font-bold uppercase italic">Owner Modern Store</p>
                        </div>
                    </div>
                </div>
                <!-- Duplicate 2 & 3 -->
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-24 px-6 bg-white">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-black text-secondary mb-4 italic tracking-tighter uppercase"><span class="text-primary">FAQ</span></h2>
                <p class="text-accent font-bold text-[10px] uppercase tracking-widest">Beberapa Pertanyaan Yang Sering Ditanyakan</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <label class="block bg-white rounded-3xl p-6 md:p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer" data-aos="fade-up">
                    <input type="checkbox" class="hidden"> <!-- Trigger Checkbox -->
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-secondary uppercase tracking-widest text-[11px] md:text-sm">Berapa lama pengerjaan website saya?</h4>
                        <div class="faq-icon text-slate-400">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="text-xs md:text-sm text-accent leading-relaxed font-medium uppercase tracking-tight border-t border-slate-50 mt-4 pt-4">
                                Rata-rata pengerjaan adalah <span class="text-primary font-bold">7-14 hari kerja</span>. Kecepatan pengerjaan sangat bergantung pada kelengkapan data konten yang Anda kirimkan kepada kami.
                            </p>
                        </div>
                    </div>
                </label>

                <!-- FAQ 2 -->
                <label class="block bg-white rounded-3xl p-6 md:p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <input type="checkbox" class="hidden">
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-secondary uppercase tracking-widest text-[11px] md:text-sm">Apakah website bisa saya edit sendiri?</h4>
                        <div class="faq-icon text-slate-400">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="text-xs md:text-sm text-accent leading-relaxed font-medium uppercase tracking-tight border-t border-slate-50 mt-4 pt-4">
                                Sangat bisa! Kami menyediakan <span class="text-primary font-bold">Dashboard Admin (CMS)</span> yang sangat mudah digunakan bagi orang awam sekalipun untuk update tulisan atau gambar.
                            </p>
                        </div>
                    </div>
                </label>

                <!-- FAQ 3 -->
                <label class="block bg-white rounded-3xl p-6 md:p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                    <input type="checkbox" class="hidden">
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-secondary uppercase tracking-widest text-[11px] md:text-sm">Apakah ada biaya tambahan setiap bulan?</h4>
                        <div class="faq-icon text-slate-400">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="text-xs md:text-sm text-accent leading-relaxed font-medium uppercase tracking-tight border-t border-slate-50 mt-4 pt-4">
                                Tidak ada biaya bulanan. Anda cukup melakukan <span class="text-primary font-bold">Perpanjangan Domain & Hosting setahun sekali</span>. Biaya tahun pertama sudah termasuk dalam harga paket kami.
                            </p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <footer class="bg-secondary text-white pt-20 pb-10 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Info Brand -->
                <div class="space-y-6">
                    <div class="text-2xl font-black italic uppercase tracking-tighter">Oprek<span class="text-primary">  Tech</span></div>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-widest leading-loose">
                        Partner digital strategis untuk perusahaan dan startup Indonesia. Menghadirkan kualitas visual kelas dunia.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Link Cepat -->
                <div>
                    <h4 class="text-xs font-black uppercase tracking-[0.3em] mb-8 text-primary">Navigasi</h4>
                    <ul class="space-y-4 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                        <li><a href="#about" class="footer-link">About</a></li>
                    <li><a href="#pricing" class="footer-link">Produk Kami</a></l>
                        <li><a href="#faq" class="footer-link">FAQ</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-xs font-black uppercase tracking-[0.3em] mb-8 text-primary">Hubungi Kami</h4>
                    <ul class="space-y-4 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-primary"></i> oprek.tech@gmail.com</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-primary"></i> +62 812 3456 789</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-primary"></i> Bogor, Indonesia</li>
                    </ul>
                </div>

                <!-- Newsletter / CTA Kecil -->
                <div>
                    <h4 class="text-xs font-black uppercase tracking-[0.3em] mb-8 text-primary">Newsletter</h4>
                    <p class="text-[9px] text-slate-500 mb-4 font-bold uppercase">Dapatkan update teknologi & promo terbaru.</p>
                    <div class="flex bg-white/5 p-1 rounded-xl">
                        <input type="text" placeholder="EMAIL" class="bg-transparent px-3 py-2 text-[10px] w-full outline-none">
                        <button class="bg-primary px-4 py-2 rounded-lg text-[10px] font-bold">KIRIM</button>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-[9px] font-bold text-slate-600 uppercase tracking-[0.5em]">
                <p>©2026 OPREKTECH DIGITAL. ALL RIGHTS RESERVED.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition">Privacy</a>
                    <a href="#" class="hover:text-white transition">Terms</a>
                </div>
            </div>
        </div>
    </footer>
    
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-2xl shadow-2xl flex items-center justify-center z-[99] hover:scale-110 active:scale-95 transition-all duration-300">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
        // LOGIC BACK TO TOP
        const btn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                btn.classList.add('visible');
            } else {
                btn.classList.remove('visible');
            }
        });
        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>