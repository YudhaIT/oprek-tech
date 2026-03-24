<?php
    $p = isset($_GET['p']) ? $_GET['p'] : 'lite';
    $nama = ($p == 'business') ? 'Business Growth' : 'Lite Hub';
    $harga = ($p == 'business') ? '3.500.000' : '1.500.000';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesaikan Pembayaran - OprekTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; color: #1e293b; }
        .invoice-card { background: white; border-radius: 35px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.05); }
        .qris-frame { border: 2px dashed #e2e8f0; border-radius: 20px; background: #fff; }
        .step-icon { width: 32px; height: 32px; background: #eff6ff; color: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; flex-shrink: 0; }
    </style>
</head>
<body class="py-10 px-5">

    <div class="max-w-lg mx-auto">
        <!-- Back Button -->
        <a href="javascript:history.back()" class="inline-flex items-center text-sm font-semibold text-slate-400 hover:text-blue-600 mb-6 transition">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>

        <div class="invoice-card p-8 border border-slate-100">
            <!-- Header Info -->
            <div class="flex justify-between items-start mb-8 border-b border-slate-50 pb-6">
                <div>
                    <p class="text-[10px] font-bold text-blue-600 uppercase tracking-[0.2em] mb-1">Paket Pesanan</p>
                    <h2 class="text-xl font-extrabold text-slate-900"><?php echo $nama; ?></h2>
                </div>
                <div class="text-right">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-1">Total Bayar</p>
                    <p class="text-xl font-black italic text-blue-600">Rp <?php echo $harga; ?></p>
                </div>
            </div>

            <!-- QRIS Display (ANTI GEPENG) -->
            <div class="text-center mb-8">
                <div class="qris-frame p-4 inline-block">
                    <!-- IMG: max-width dibatasi, height auto biar gak gepeng -->
                    <img src="QrisOprekTech.png" alt="QRIS OprekTech" class="max-w-[280px] w-full h-auto rounded-lg mx-auto shadow-sm">
                </div>
                <div class="mt-4 flex justify-center items-center gap-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logo_QRIS.svg" class="h-5 opacity-80">
                    <span class="text-slate-300">|</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Gopay_logo.svg" class="h-4 opacity-80">
                </div>
            </div>

            <!-- Instruksi Pembayaran -->
            <div class="bg-slate-50 rounded-2xl p-6 mb-8">
                <h4 class="font-bold text-sm mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-2 text-blue-500"></i> Cara Pembayaran:
                </h4>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="step-icon">1</div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">Buka aplikasi e-wallet (GoPay, OVO, Dana) atau Mobile Banking Anda.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="step-icon">2</div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">Scan QR Code di atas dan masukkan nominal sesuai total tagihan (<span class="text-blue-600 font-bold">Rp <?php echo $harga; ?></span>).</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="step-icon">3</div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium"><span class="font-bold text-slate-900">Screenshot/Simpan Bukti Transfer</span> setelah transaksi berhasil.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="step-icon">4</div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">Klik tombol <span class="text-green-600 font-bold">Konfirmasi WhatsApp</span> di bawah untuk mengirim bukti pembayaran.</p>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            <a href="https://wa.me/6289502128237?text=Halo%20OprekTech,%20saya%20sudah%20melakukan%20pembayaran%20Rp%20<?php echo $harga; ?>%20untuk%20paket%20<?php echo $nama; ?>.%20Berikut%20bukti%20transfernya." 
               class="flex items-center justify-center gap-3 w-full bg-[#1e293b] text-white text-center py-5 rounded-[22px] font-bold text-lg hover:bg-black transition-all shadow-xl shadow-slate-200 active:scale-95">
               <i class="fab fa-whatsapp text-2xl"></i>
               Konfirmasi via WhatsApp
            </a>
            
            <p class="text-center text-[10px] text-slate-400 mt-6 uppercase tracking-widest font-bold">
                <i class="fas fa-shield-alt mr-1"></i> Secure Payment by OprekTech
            </p>
        </div>
    </div>

</body>
</html>