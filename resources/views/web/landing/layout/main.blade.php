<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>@yield('title', 'Lebify - Professional Web Design & Development') | {{ config('app.name') }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Lebify offers cutting-edge web design and development services. Create stunning, responsive websites with our expert team. Fast, secure, and SEO-optimized solutions for businesses of all sizes.')">
    <meta name="keywords" content="@yield('meta_keywords', 'web design, web development, responsive websites, SEO optimization, e-commerce solutions, custom web applications, mobile-friendly design, UI/UX design, fast websites, secure hosting, Laravel development, React development, Vue.js, Node.js, WordPress, Shopify, digital marketing, web performance, accessibility, cloud solutions, API integration, database management, front-end development, back-end development, full-stack development')">
    <meta name="author" content="Lebify Team">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Lebify - Professional Web Design & Development') | {{ config('app.name') }}">
    <meta property="og:description" content="@yield('meta_description', 'Lebify offers cutting-edge web design and development services. Create stunning, responsive websites with our expert team. Fast, secure, and SEO-optimized solutions for businesses of all sizes.')">
    <meta property="og:image" content="@yield('og_image', asset('path/to/og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@lebify">
    <meta name="twitter:creator" content="@lebify">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Lebify - Professional Web Design & Development') | {{ config('app.name') }}">
    <meta name="twitter:description" content="@yield('meta_description', 'Lebify offers cutting-edge web design and development services. Create stunning, responsive websites with our expert team. Fast, secure, and SEO-optimized solutions for businesses of all sizes.')">
    <meta name="twitter:image" content="@yield('og_image', asset('path/to/og-image.jpg'))">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('vendor/img/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('vendor/img/favicons/safari-pinned-tab.svg') }}" color="#008382">
    <link rel="shortcut icon" href="{{ asset('vendor/img/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#008382">
    <meta name="msapplication-config" content="{{ asset('vendor/img/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Additional Meta Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Alternate Language Pages -->
    @foreach (config('app.available_locales') as $locale)
        <link rel="alternate" hreflang="{{ $locale }}" href="{{ url()->current() }}?lang={{ $locale }}">
    @endforeach

    <!-- Security Headers -->
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <!-- Web App Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Preload Important Resources -->
    <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&display=swap"
        as="style">
    <link rel="preload" href="{{ asset('packages/iziToast/css/iziToast.min.css') }}" as="style">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('packages/iziToast/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project/components/footer.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/css/datatables.bundle.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/css/plugins.bundle.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/css/style.bundle.css') }}">
    @stack('styles')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true"
    data-kt-app-toolbar-enabled="true" class="app-default">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Lebify",
            "url": "https://lebify.online",
            "logo": "https://lebify.online/vendor/img/logo/logo.png",
            "sameAs": [
                "https://www.instagram.com/danyseifeddine",
                "https://www.linkedin.com/in/dany-seifeddine-ab6558247/",
                "https://github.com/Danyseifedine"
            ],
            "description": "Lebify offers professional website creation services with custom designs, fast turnaround, and mobile-responsive solutions."
        }
    </script>


    <script>
        let defaultThemeMode = "dark";
        let themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>

    <!-- Custom Cursor -->
    <div class="custom-cursor" aria-hidden="true"></div>

    <!-- Main Content -->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <main class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div class="fixed-top bg-color-lebify" style="z-index: 1030;">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-center py-3">
                        <div class="d-flex align-items-center px-4 py-2">
                            <a href="https://learning.lebify.online" class="btn fs-3 fw-bold" target="_blank"
                                style="transition: all 0.3s ease;">
                                <i class="bi bi-rocket-takeoff fs-3 me-2" style="color: #8A2BE2;"></i> Explore Lebify
                                Learning: Master coding skills with our interactive tutorials and courses
                                <i class="bi bi-arrow-right fs-3 ms-2 animated-arrow"
                                    style="animation: arrowMove 1s infinite alternate;"></i>
                            </a>
                            <style>
                                @keyframes arrowMove {
                                    0% {
                                        transform: translateX(0);
                                    }

                                    100% {
                                        transform: translateX(10px);
                                    }
                                }

                                .animated-arrow {
                                    display: inline-block;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar -->
            @include('web.landing.components.navbar')
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_content" class="app-content mt-5 flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container">
                                <!-- Page Content -->
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include('web.landing.components.footer')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('packages/iziToast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('packages/iziToast/js/iziToast.js') }}"></script>
    <script src="{{ url('vendor/js/plugins.bundle.js') }}"></script>
    <script src="{{ url('vendor/js/scripts.bundle.js') }}"></script>
    <script src="{{ url('vendor/js/datatables.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    @stack('scripts')
</body>

</html>
