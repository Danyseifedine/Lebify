@if ($contents['0']->items['theme']['visibility'])
    <button id="theme-dark" aria-label="Switch to light theme" style="z-index: 99999"
        class="position-fixed rounded-circle bottom-0 p-5 end-0 m-5">
        <i class="bi bi-moon fs-1" aria-hidden="true"></i>
    </button>
    <button id="theme-light" aria-label="Switch to dark theme" style="z-index: 99999"
        class="position-fixed rounded-circle bottom-0 p-5 end-0 m-5">
        <i class="bi bi-sun fs-1" aria-hidden="true"></i>
    </button>
@endif

<header style="border-bottom: 1px solid rgba(255, 255, 255, 0.058) !important;display: none;" id="kt_app_header"
    class="app-header container-lg mt-5 glass-nav" data-kt-sticky="true"
    data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
    data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
    <div class="mx-7 app-container container-xxl d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        @if ($contents['0']->items['logo']['visibility'])
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                <a href="/" aria-label="Home">
                    <img alt="{{ $contents['0']->items['logo']['alt'] }}"
                        src="{{ asset('vendor/img/logo/' . $contents['0']->items['logo']['url']) }}"
                        class="h-50px app-sidebar-logo-default" width="auto" height="50">
                </a>
            </div>
        @endif
        <nav class="d-flex align-items-center justify-content-center flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu align-items-center app-header-mobile-drawer align-items-stretch"
                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <div class="items d-flex gap-8 justify-content-center">
                        {{-- @foreach ($sortedMenu as $menu)
                            @if ($menu['visibility'])
                                <div
                                    class="menu-item me-0 me-lg-2 {{ request()->url() == url($menu['url']) ? 'active' : '' }}">
                                    <span class="menu-link">
                                        <a class="menu-title" href="{{ $menu['url'] }}"
                                            title="{{ $menu['label'] }}">{{ $menu['label'] }}</a>
                                    </span>
                                </div>
                            @endif
                        @endforeach --}}

                        {{-- @if ($contents['0']->items['right-menu']['join_us']['visibility'])
                            <div class="join-us-mobile menu-item me-0 me-lg-2">
                                <span class="menu-link">
                                    <a class="menu-title" href="#join_us" title="Join Us">join us</a>
                                </span>
                            </div>
                        @endif

                        @if ($contents['0']->items['right-menu']['get_started']['visibility'])
                            <div class="join-us-mobile menu-item me-0 me-lg-2">
                                <span class="menu-link">
                                    <button class="get-template menu-title"
                                        title="{{ $contents['0']->items['right-menu']['get_started']['label'] }}">
                                        {{ $contents['0']->items['right-menu']['get_started']['label'] }}
                                    </button>
                                </span>
                            </div>
                        @endif --}}
                    {{-- </div>
                </div>
            </div> --}}
            {{-- <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <button class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle" aria-label="Toggle menu">
                        <i class="bi bi-list fs-1" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </nav>
        <div class="join-us-desktop align-items-center flex-grow-1 flex-lg-grow-0">
            @if ($contents['0']->items['right-menu']['join_us']['visibility'])
                <div class="menu-item me-0 me-lg-2">
                    <span class="menu-link">
                        <a class="menu-title" href="{{ $contents['0']->items['right-menu']['join_us']['url'] }}"
                            title="{{ $contents['0']->items['right-menu']['join_us']['label'] }}">
                            {{ $contents['0']->items['right-menu']['join_us']['label'] }}
                        </a>
                    </span>
                </div>
            @endif

            @if ($contents['0']->items['right-menu']['get_started']['visibility'])
                <div class="menu-item me-0 me-lg-2">
                    <span class="menu-link">
                        <button class="get-template menu-title"
                            title="{{ $contents['0']->items['right-menu']['get_started']['label'] }}">
                            {{ $contents['0']->items['right-menu']['get_started']['label'] }}
                        </button>
                    </span>
                </div>
            @endif
        </div> --}}
    {{-- </div> --}}
</header>

@push('scripts')
    @if ($contents['0']->items['theme']['visibility'])
        <script>
            var mode = KTThemeMode.getMode();
            var btn_dark = document.getElementById('theme-dark');
            var btn_light = document.getElementById('theme-light');

            if (mode === 'dark') {
                btn_light.style.display = 'none';
                btn_dark.style.display = 'block';
            } else {
                btn_light.style.display = 'block';
                btn_dark.style.display = 'none';
            }

            btn_dark.addEventListener('click', function() {

                KTThemeMode.setMode('light');
                localStorage.setItem('data-bs-theme', 'light');
                btn_light.style.display = 'block';
                btn_dark.style.display = 'none';

            });

            btn_light.addEventListener('click', function() {
                KTThemeMode.setMode('dark');
                localStorage.setItem('data-bs-theme', 'dark');
                btn_light.style.display = 'none';
                btn_dark.style.display = 'block';
            });
        </script>
    @endif
@endpush
