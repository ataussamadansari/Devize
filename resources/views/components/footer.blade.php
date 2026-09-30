<footer class="site-footer relative border-t border-white/[.06]">
    <div class="rounded-t-[28px] border-t border-white/[.07] bg-[#030306] pt-10 md:pt-12">
        <div class="mx-auto grid w-[min(1160px,calc(100%-32px))] gap-10 pb-10 md:w-[min(1160px,calc(100%-64px))] md:grid-cols-[1.3fr_2fr] md:gap-14 md:pb-14">
            <div>
                <a class="brand inline-flex items-center gap-2.5" href="{{ route('home') }}" aria-label="Devize Tech Solutions home"><span class="brand-mark grid h-8 w-8 grid-cols-2 grid-rows-2 gap-[3px]" aria-hidden="true"><span></span><span></span><span></span><span></span></span><span class="brand-name font-display text-[22px] font-bold leading-none tracking-[-.08em]">devize<span>.</span><small class="mt-1 block font-sans text-[7px] font-semibold tracking-[.21em]">TECH SOLUTIONS</small></span></a>
                <p class="mt-4 max-w-sm text-xs leading-6 text-slate-400">We build digital products and software for real business needs.</p>
                <div class="mt-6 space-y-3 text-[11px] text-slate-400"><p>{{ config('contact.location') ?: 'Based in India - Serving clients worldwide' }}</p><a class="block transition hover:text-white" href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>@if (config('contact.phone'))<a class="block transition hover:text-white" href="tel:{{ preg_replace('/[^+0-9]/', '', config('contact.phone')) }}">{{ config('contact.phone') }}</a>@endif</div>
            </div>

            <nav class="grid grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-3" aria-label="Footer navigation">
                <div class="grid content-start gap-3 text-[11px]"><h2 class="mb-1 text-[9px] font-semibold tracking-[.15em] text-slate-300">COMPANY</h2><a class="footer-link" href="{{ route('about') }}">About us</a><a class="footer-link" href="{{ route('services') }}">Services</a><a class="footer-link" href="{{ route('projects') }}">Projects</a><a class="footer-link" href="{{ route('contact') }}">Contact us</a></div>
                <div class="grid content-start gap-3 text-[11px]"><h2 class="mb-1 text-[9px] font-semibold tracking-[.15em] text-slate-300">RESOURCES</h2><a class="footer-link" href="{{ route('blog') }}">Blog</a><a class="footer-link" href="{{ route('home') }}#faq-title">FAQ</a><a class="footer-link" href="{{ route('quote') }}">Request a quote</a></div>
                <div class="grid content-start gap-3 text-[11px]"><h2 class="mb-1 text-[9px] font-semibold tracking-[.15em] text-slate-300">LEGAL</h2><a class="footer-link" href="{{ route('legal.privacy') }}">Privacy policy</a><a class="footer-link" href="{{ route('legal.terms') }}">Terms &amp; conditions</a><a class="footer-link" href="{{ route('legal.cookies') }}">Cookie policy</a><a class="footer-link" href="{{ route('legal.disclaimer') }}">Disclaimer</a></div>
                @if (!empty(config('contact.social')))<div class="grid content-start gap-3 text-[11px]"><h2 class="mb-1 text-[9px] font-semibold tracking-[.15em] text-slate-300">SOCIAL</h2>@foreach (config('contact.social') as $network => $url)<a class="footer-link" href="{{ $url }}" target="_blank" rel="noopener noreferrer">{{ $network }}</a>@endforeach</div>@endif
            </nav>
        </div>
        <div class="border-t border-white/[.07]"><div class="mx-auto w-[min(1160px,calc(100%-32px))] py-4 text-[10px] text-slate-500 md:w-[min(1160px,calc(100%-64px))]"><span>Copyright {{ date('Y') }} Devize Tech Solutions. All rights reserved.</span></div></div>
    </div>
</footer>
