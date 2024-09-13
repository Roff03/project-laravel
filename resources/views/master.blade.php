<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="app.js">
    <title>Document</title>
    <style>
        /* .heading {
            background: linear-gradient(120deg, #7C00FE 15%, #62cad1 78%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        } */

        .background{
            background-image: url({{ asset('storage/images/gapura.jpg')}});
            background-position:center;
            backdrop-filter:blur(10px);
            background-size:cover;
            object-fit:cover;
            background: linear-gradient(blur);
        }

        .logo-container-left {
            overflow: hidden;
            display: flex;
        }

        .logo-left {
            display:flex;
            animation: infinite-scroll-left 8s linear infinite;
            flex-shrink: 0;
            padding: 10px;
        }

        @keyframes infinite-scroll-left {
            from {
                transform: translateX(0);
            }
             to {
                transform: translateX(-100%)
             }
        }
        @keyframes infinite-scroll-right {
            from {
                transform: translateX(0);
            }
             to {
                transform: translateX(100%)
             }
        }
    </style>
</head>
<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
           <x-navbar/>
          </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8 blur-xl background">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">

            </div>
            <div class="text-center ">
              <div class="heading">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl heading">Desa Sukamulya Desa Wisata Baru Ciamis</h1>
            </div>
            <p class="mt-6 text-lg leading-8 text-white">Desa Berkembang baru asal kecamatan baregbeg yang menjadi tempat wisata baru</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-lg  py-2 px-5 bg-blue-500 text-white hover:bg-blue-800">Lihat</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>

      <div id="hero-section" class="bg-gray-300" >
        <section class="py-16 px-4 max-w-6xl mx-auto flex flex-col lg:flex-row items-center">
            <!-- Text Section -->
            <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <p class="text-lg text-gray-600">
                    Kami adalah tim yang berdedikasi untuk memberikan solusi terbaik dalam untuk warga kami.
                    Dengan pengalaman bertahun-tahun dan komitmen untuk inovasi, kami selalu berusaha untuk melampaui
                    ekspektasi dan menciptakan nilai nyata bagi warga kami. Berkunjunglah ke desa kami
                    dan mari kita capai kesuksesan bersama.
                </p>
            </div>
            <!-- Image Section -->
            <div class="lg:w-1/2">
                <img src="{{asset('storage/images/kantor.jpg')}}" alt="About Us" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </section>
      </div>

      {{-- susunan card --}}


        <div class="py-12" id="view">
            <h1 class="text-center mb-8 text-3xl font-bold text-gray-800">Wisata kami</h1>
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/wisata1.jpg') }}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-700">Babakan</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang.</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 500.000</p>
                            <a href="{{ route('pesan', ['image' => 'wisata1.jpg', 'name' => 'Babakan', 'price' => '500.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/wisata2.jpg')}}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-700">Rimpak Gede</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang..</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 400.000</p>
                            <a href="{{ route('pesan', ['image' => 'wisata2.jpg', 'name' => 'Rimpak Gede', 'price' => '400.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/wisata3.jpg')}}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-700">Cikopo</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang..</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 300.000</p>
                            <a href="{{ route('pesan', ['image' => 'wisata3.jpg', 'name' => 'Cikopo', 'price' => '300.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-4 pt-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/wisata4.jpg')}}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-700">Saung Nini</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang..</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 100.000</p>
                            <a href="{{ route('pesan', ['image' => 'wisata4.jpg', 'name' => 'Saung nini', 'price' => '100.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{asset('storage/images/Jembatan.jpg')}}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-700">Jembatan Gaspool</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang.</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 200.000</p>
                            <a href="{{ route('pesan', ['image' => 'Jembatan.jpg', 'name' => 'Jembatan gaspool', 'price' => '200.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/gapura.jpg')}}" alt="Card Image" class="w-full h-40 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2 text-gray-700">Gapura Manggah</h2>
                            <p class="text-gray-600 mb-4">Desa ini adalah surga tersembunyi yang dipenuhi dengan pemandangan alam yang menakjubkan dan kehidupan yang tenang.</p>
                            <p class="text-gray-800 font-semibold mb-4">Harga: Rp 200.000</p>
                            <a href="{{ route('pesan', ['image' => 'gapura.jpg', 'name' => 'Gapura Manggah', 'price' => '200.000']) }}" id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- sponsor branding --}}
        <x-brand/>



           {{-- testimonial --}}
           <div id="testimonial" class="py-12 flex px-24 flex-col lg:flex-row lg:space-x-6 space-y-6 lg:space-y-0">
            <!-- Review 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full mx-auto cover">
                <div class="flex items-center mb-3">
                    <img src="{{asset('storage/images/people1.jpg')}}" alt="Foto Pengguna" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <p class="text-xl font-semibold">Si hitam cantik</p>
                        <p class="text-gray-600">pretty@gmail.com</p>
                    </div>
                </div>
                <p class="text-gray-700">
                    "Gilaaa seru banget main ke siniiii..."
                </p>
            </div>

            <!-- Review 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full mx-auto">
                <div class="flex items-center mb-3">
                    <img src="{{asset('storage/images/people2.jpg')}}" alt="Foto Pengguna" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <p class="text-xl font-semibold">Niccola garfiel</p>
                        <p class="text-gray-600">nigga@gmail.com</p>
                    </div>
                </div>
                <p class="text-gray-700">
                    "Gilaaa seru banget main ke siniiii..."
                </p>
            </div>

            <!-- Review 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full mx-auto">
                <div class="flex items-center mb-3">
                    <img src="{{asset('storage/images/people3.jpg')}}" alt="Foto Pengguna" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <p class="text-xl font-semibold">Ucap ema ema</p>
                        <p class="text-gray-600">umama@gmail.com</p>
                    </div>
                </div>
                <p class="text-gray-700">
                    "Gilaaa seru banget main ke siniiii..."
                </p>
            </div>
        </div>

        {{-- kontak --}}
        <x-contact/>

          </div>
          </div>

          {{-- footer --}}
        <x-footer/>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.getElementById('userMenuButton').addEventListener('click', function() {
                var menu = document.getElementById('userMenu');
                menu.classList.toggle('hidden');
            });
        </script>
</body>
</html>
