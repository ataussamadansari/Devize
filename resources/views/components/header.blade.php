<header class="site-header sticky top-0 z-50 border-b border-white/[.06] bg-transparent">
    <div class="header-inner relative mx-auto grid min-h-[72px] w-[min(1220px,calc(100%-32px))] grid-cols-[1fr_auto_1fr] items-center gap-3 md:min-h-[84px] md:w-[min(1220px,calc(100%-64px))] md:gap-5">
        <a class="brand inline-flex w-fit shrink-0 items-center gap-2.5" href="{{ route('home') }}" aria-label="Devize Tech Solutions home">
            <span class="brand-mark grid h-8 w-8 grid-cols-2 grid-rows-2 gap-[3px]" aria-hidden="true"><span></span><span></span><span></span><span></span></span>
            <span class="brand-name font-display text-[21px] font-bold leading-none tracking-[-.08em]">devize<span>.</span><small class="mt-1 block font-sans text-[7px] font-semibold tracking-[.21em]">TECH SOLUTIONS</small></span>
        </a>

        <button class="menu-toggle col-start-3 flex h-10 w-10 justify-self-end items-center justify-center rounded-full border border-white/10 bg-white/[.04] text-slate-200 md:hidden" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Open navigation">
            <span class="menu-icon" aria-hidden="true"><span></span><span></span></span>
        </button>

        <nav class="primary-nav absolute left-0 right-0 top-full hidden flex-col p-3 md:static md:col-start-2 md:flex md:flex-row md:items-center md:gap-0 md:rounded-full md:border md:border-white/[.09] md:bg-white/[.045] md:p-1.5 md:shadow-[0_8px_36px_rgba(0,0,0,.16)]" id="primary-navigation" aria-label="Main navigation">
            <a class="nav-link" @if (request()->routeIs('home')) aria-current="page" @endif href="{{ route('home') }}">Home</a>
            <a class="nav-link" @if (request()->routeIs('services', 'services.show')) aria-current="page" @endif href="{{ route('services') }}">Services</a>
            <a class="nav-link" @if (request()->routeIs('projects', 'projects.show')) aria-current="page" @endif href="{{ route('projects') }}">Projects</a>
            <a class="nav-link" @if (request()->routeIs('about')) aria-current="page" @endif href="{{ route('about') }}">About Us</a>
            <a class="nav-link" @if (request()->routeIs('contact', 'contact.store')) aria-current="page" @endif href="{{ route('contact') }}">Contact</a>
            <a class="mobile-talk" href="{{ route('quote') }}">Request a quote <span aria-hidden="true">&#8599;</span></a>
        </nav>

        <a class="header-cta hidden items-center justify-self-end gap-2 rounded-full border border-violet-300/30 bg-gradient-to-r from-violet-600/90 to-indigo-500/90 px-4 py-2.5 text-[10px] font-semibold text-white shadow-[0_0_25px_rgba(139,92,246,.2)] transition hover:brightness-110 md:inline-flex" href="{{ route('quote') }}">Get started <span aria-hidden="true">&#8599;</span></a>
    </div>
</header>
