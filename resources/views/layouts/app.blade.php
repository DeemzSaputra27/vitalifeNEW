<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- ScrollReveal Library -->
    <script src="https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.min.js"></script>

    <style>
        .slider-image {
            transition: order 0.3s ease-in-out;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen"> <!--ganti warna-->
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="bg-blue-100">
            {{ $slot }}
        </main>
    </div>

    <!-- ScrollReveal Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            ScrollReveal().reveal('.reveal', {
                delay: 200,
                distance: '50px',
                duration: 1000,
                easing: 'cubic-bezier(0.5, 0, 0, 1)',
                interval: 0,
                opacity: 0,
                origin: 'bottom',
                scale: 1,
                cleanup: false,
                container: document.documentElement,
                desktop: true,
                mobile: true,
                reset: false,
                useDelay: 'always',
                viewFactor: 0.0,
                viewOffset: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0,
                }
            });
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     var text =
        //         "We are the solution for travelling in a healthy condition and we provide health specialists...";

        //     function startTyping() {
        //         var typed = new Typed('#typed-text', {
        //             strings: [text],
        //             typeSpeed: 65,
        //             startDelay: 1000,
        //             showCursor: false,
        //             cursorChar: '|',
        //             onComplete: function(self) {
        //                 setTimeout(function() {
        //                     self.destroy();
        //                     setTimeout(startTyping, 500);
        //                 }, 1000);
        //             }
        //         });
        //     }

        //     startTyping();
        // });

        function handleResize() {
            const width = window.innerWidth;
            const elements = document.querySelectorAll('.responsive-element');

            elements.forEach(el => {
                if (width < 640) {
                    el.classList.add('sm-screen');
                } else if (width < 768) {
                    el.classList.add('md-screen');
                } else {
                    el.classList.add('lg-screen');
                }
            });

            // Sesuaikan ukuran font untuk #typed-text
            const typedText = document.getElementById('typed-text');
            if (typedText) {
                if (width < 640) {
                    typedText.style.fontSize = '1rem';
                } else if (width < 768) {
                    typedText.style.fontSize = '1.25rem';
                } else {
                    typedText.style.fontSize = '1.5rem';
                }
            }
        }

        // Panggil fungsi saat halaman dimuat dan saat ukuran browser berubah
        window.addEventListener('load', handleResize);
        window.addEventListener('resize', handleResize);

        // Kode Typed.js
        document.addEventListener('DOMContentLoaded', function() {
            var text =
                "We are the solution for travelling in a healthy condition and we provide health specialists...";

            function startTyping() {
                var typed = new Typed('#typed-text', {
                    strings: [text],
                    typeSpeed: 65,
                    startDelay: 1000,
                    showCursor: false,
                    cursorChar: '|',
                    onComplete: function(self) {
                        setTimeout(function() {
                            self.destroy();
                            setTimeout(startTyping, 500);
                        }, 1000);
                    }
                });
            }

            startTyping();
        });
    </script>
</body>

</html>
