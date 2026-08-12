<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Company Profile</title>
</head>

<body>
    <header class="fixed top-0 left-0 w-full bg-slate-900 text-white z-50">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <a href="/" class="flex items-center">
                <img src="<?= base_url('logo.png') ?>" alt="Logo Perusahaan" class="h-8">
            </a>
            <nav aria-label="Main Navigation">
                <ul class="flex items-center gap-6 font-medium text-sm">
                    <li><a href="#" class="hover:text-orange-400">Beranda</a></li>
                    <li class="relative group">
                        <button class="flex items-center gap-1 hover:text-orange-400">
                            Gabung jadi Mitra
                        </button>
                    </li>
                    <li><a href="#" class="hover:text-orange-400">Karir</a></li>
                    <li><a href="#" class="hover:text-orange-400">Perusahaan</a></li>
                    <li><a href="#" class="hover:text-orange-400">Produk</a></li>
                    <li><a href="#" class="hover:text-orange-400">Blog</a></li>
                    <li><a href="#" class="hover:text-orange-400">Bantuan</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="relative pt-16">
        <section class="relative h-screen flex items-center justify-end bg-cover bg-center overflow-hidden"
            style="background-image: url('hero-bg.png');">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="container mx-8 px-6 pl-24 z-10 text-white max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight text-right">
                    Solusi Logistik On-Demand yang Dapat Diandalkan, 24/7
                </h1>
            </div>
        </section>

        <section class="relative min-h-[30vh] flex items-center justify-center bg-cover bg-center overflow-hidden">
            <div class="container mx-auto px-6 z-10 text-black max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-tight text-center">
                    Skala Kami
                </h1>
            </div>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-3 md:px-24 gap-12 p-6">
            <div class="bg-slate-800 text-white p-6 rounded-lg shadow">
                <p class="text-lg font-semibold mb-4">Wilayah Operasional</p>
                <p class="text-sm">Kami melayani berbagai wilayah di Indonesia, memastikan pengiriman cepat dan efisien.</p>
            </div>
    
            <div class="bg-slate-600 text-white p-6 rounded-lg shadow">
                <p class="text-lg font-semibold mb-4">Solusi Logistik</p>
                <p class="text-sm">Kami menyediakan berbagai solusi logistik yang dapat disesuaikan dengan kebutuhan Anda.</p>
            </div>
            <div class="bg-slate-400 text-black p-6 rounded-lg shadow">
                <p class="text-lg font-semibold mb-4">Dukungan Pelanggan</p>
                <p class="text-sm">Tim dukungan kami siap membantu Anda 24/7 untuk memastikan pengalaman terbaik.</p>   
            </div>
        </section>
    </main>
</body>

</html>