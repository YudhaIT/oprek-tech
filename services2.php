<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OprekTech | Premium Web Development & Digital Strategy</title>
    
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
        
        /* FAQ Animation */
        .faq-answer { display: grid; grid-template-rows: 0fr; transition: grid-template-rows 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
        input:checked ~ .faq-answer { grid-template-rows: 1fr; }
        .faq-icon { transition: transform 0.5s ease; }
        input:checked ~ div .faq-icon { transform: rotate(135deg); color: #2563eb; }

        /* Back to Top */
        #backToTop { transition: all 0.5s ease; opacity: 0; visibility: hidden; }
        #backToTop.visible { opacity: 1; visibility: visible; }

        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { display: flex; width: max-content; animation: marquee 35s linear infinite; }
    </style>
</head>
<body class="bg-[#f8fafc] text-secondary font-sans antialiased overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/30">
                    <i class="fa-solid fa-bolt text-white text-sm"></i>
                </div>
                <span class="text-xl font-bold tracking-tighter uppercase">Oprek<span class="text-primary font-black">Tech</span></span>
            </div>
            <div class="hidden lg:flex gap-8 text-[10px] font-black uppercase tracking-widest text-accent">
                <a href="#about" class="hover:text-primary transition">About</a>
                <a href="#team" class="hover:text-primary transition">The Engine</a>
                <a href="#pricing" class="hover:text-primary transition">Pricing</a>
                <a href="#faq" class="hover:text-primary transition">FAQ</a>
            </div>
            <a href="https://wa.me/628123456789" class="bg-primary text-white px-6 py-2.5 rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-500/20 active:scale-95 transition">
                Consult
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="pt-48 pb-24 px-6 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-8xl font-black text-secondary leading-tight mb-8 uppercase italic tracking-tighter">Website Mewah <br> Bisnis <span class="text-primary not-italic">Auto Wah.</span></h1>
            <p class="text-accent text-sm md:text-xl max-w-2xl mx-auto mb-10 font-medium italic">Transformasi Digital Profesional Dengan Standar Teknologi 2024.</p>
            <div class="flex justify-center gap-4">
                <a href="#pricing" class="bg-primary text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest shadow-2xl shadow-blue-500/40">Mulai Proyek</a>
            </div>
        </div>
    </section>

    <!-- SECTION: THE ENGINE (SIAPA YANG BIKIN) -->
    <section id="team" class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-black text-secondary mb-4 italic tracking-tighter uppercase">The <span class="text-primary italic">Engine</span></h2>
                <p class="text-accent font-bold text-[10px] uppercase tracking-[0.3em]">Otak di balik setiap baris kode berkualitas</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="bg-white p-10 rounded-[3rem] card-shadow text-center group" data-aos="fade-up">
                    <div class="w-28 h-28 mx-auto mb-8 rounded-[2rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-500 border-2 border-primary">
                        <img src="https://i.pravatar.cc/150?u=tech1" class="w-full h-full object-cover">
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

    <!-- FAQ SECTION (SMOOTH SLIDING) -->
    <section id="faq" class="py-24 px-6 bg-white">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-black text-secondary mb-4 italic tracking-tighter uppercase">Database <span class="text-primary">FAQ</span></h2>
                <p class="text-accent font-bold text-[10px] uppercase tracking-widest">Klik pertanyaan untuk solusi instan</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <label class="block bg-white rounded-3xl p-6 md:p-8 border border-slate-100 card-shadow cursor-pointer" data-aos="fade-up">
                    <input type="checkbox" class="hidden peer"> 
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-secondary uppercase tracking-widest text-[11px] md:text-sm">Berapa lama pengerjaan website saya?</h4>
                        <div class="faq-icon text-slate-400"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="text-xs md:text-sm text-accent leading-relaxed font-medium uppercase tracking-tight border-t border-slate-50 mt-4 pt-4">
                                Rata-rata pengerjaan adalah <span class="text-primary font-bold">7-14 hari kerja</span>. Tim engineer kami bekerja secara paralel untuk memastikan kualitas dan kecepatan pengiriman tetap terjaga.
                            </p>
                        </div>
                    </div>
                </label>

                <!-- FAQ 2 -->
                <label class="block bg-white rounded-3xl p-6 md:p-8 border border-slate-100 card-shadow cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <input type="checkbox" class="hidden peer">
                    <div class="flex justify-between items-center">
                        <h4 class="font-bold text-secondary uppercase tracking-widest text-[11px] md:text-sm">Apakah ada biaya tambahan setiap tahun?</h4>
                        <div class="faq-icon text-slate-400"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <div class="faq-answer">
                        <div class="overflow-hidden">
                            <p class="text-xs md:text-sm text-accent leading-relaxed font-medium uppercase tracking-tight border-t border-slate-50 mt-4 pt-4">
                                Tidak ada biaya bulanan. Anda hanya perlu melakukan <span class="text-primary font-bold">Perpanjangan Domain & Hosting</span> setahun sekali sesuai harga pasar standar. Tahun pertama sudah kami gratiskan sepenuhnya.
                            </p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-secondary text-white pt-24 pb-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="space-y-6">
                    <div class="text-2xl font-black italic uppercase tracking-tighter">Oprek<span class="text-primary">Tech</span></div>
                    <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest leading-loose">Partner Digital Strategis Untuk Perusahaan Visioner Indonesia.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary transition"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-[10px] font-black uppercase tracking-[0.3em] mb-8 text-primary italic">Navigasi</h4>
                    <ul class="space-y-4 text-[10px] font-bold uppercase tracking-widest text-slate-500">
                        <li><a href="#about" class="hover:text-white transition">Layanan Utama</a></li>
                        <li><a href="#team" class="hover:text-white transition">The Engine</a></li>
                        <li><a href="#pricing" class="hover:text-white transition">Harga Paket</a></li>
                        <li><a href="#faq" class="hover:text-white transition">Database FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[10px] font-black uppercase tracking-[0.3em] mb-8 text-primary italic">Hubungi Kami</h4>
                    <ul class="space-y-4 text-[10px] font-bold uppercase tracking-widest text-slate-500">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-primary"></i> hello@oprektech.id</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-primary"></i> +62 812 3456 789</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-primary"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[10px] font-black uppercase tracking-[0.3em] mb-8 text-primary italic">Newsletter</h4>
                    <div class="flex bg-white/5 p-1 rounded-xl border border-white/10">
                        <input type="text" placeholder="EMAIL" class="bg-transparent px-3 py-2 text-[10px] w-full outline-none">
                        <button class="bg-primary px-4 py-2 rounded-lg text-[9px] font-black uppercase">Send</button>
                    </div>
                </div>
            </div>
            <div class="pt-10 border-t border-white/5 text-center text-[9px] font-bold text-slate-600 uppercase tracking-[0.5em]">
                © 2024 OPREKTECH DIGITAL SOLUTIONS. ALL RIGHTS RESERVED.
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP BUTTON -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-2xl shadow-2xl flex items-center justify-center z-[99] hover:scale-110 active:scale-95 transition-all duration-300">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

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