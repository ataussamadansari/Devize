<section class="relative isolate overflow-hidden border-y border-blue-200/[.08] bg-[#071a33]" aria-labelledby="founder-message-title">
    <div class="pointer-events-none absolute -left-24 top-1/2 -z-10 h-72 w-72 -translate-y-1/2 rounded-full bg-blue-600/15 blur-[100px]"></div>
    <div class="pointer-events-none absolute -right-20 top-0 -z-10 h-80 w-80 rounded-full bg-indigo-500/10 blur-[110px]"></div>
    <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] items-center gap-8 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.72fr_1.28fr] md:gap-14 md:py-20">
        <figure class="relative mx-auto w-full max-w-[320px]">
            <div class="relative aspect-[4/4.5] overflow-hidden rounded-2xl border border-blue-200/15 bg-gradient-to-br from-[#142d4d] via-[#102644] to-[#0b1b31] shadow-[0_25px_70px_rgba(0,0,0,.28)]">
                @if (file_exists(public_path('images/founder-ataussamad.jpg')))
                    <img src="{{ asset('images/founder-ataussamad.jpg') }}" alt="Ataussamad Ansari, CEO and Founder of Devize Tech Solutions" class="h-full w-full object-cover" width="640" height="720" loading="lazy">
                @else
                    <div class="absolute inset-0 grid place-items-center overflow-hidden" role="img" aria-label="Founder portrait placeholder">
                        <div class="absolute -right-12 -top-10 h-52 w-52 rounded-full border border-blue-200/10"></div><div class="absolute -right-5 -top-3 h-40 w-40 rounded-full border border-blue-200/[.08]"></div>
                        <div class="relative mt-[-20px] grid h-32 w-32 place-items-center rounded-full border border-blue-100/15 bg-blue-200/[.06] font-display text-4xl font-medium tracking-[-.06em] text-blue-100/80 shadow-[0_0_60px_rgba(96,165,250,.12)]">AA</div>
                        <div class="absolute bottom-0 left-1/2 h-[34%] w-[78%] -translate-x-1/2 rounded-t-[48%] border border-blue-100/10 bg-gradient-to-b from-blue-100/[.13] to-blue-100/[.025]"></div>
                    </div>
                @endif
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#061326]/95 via-[#061326]/65 to-transparent px-5 pb-5 pt-16"><p class="text-[8px] font-semibold tracking-[.16em] text-blue-200">DEVIZE TECH SOLUTIONS</p><p class="mt-1 text-xs text-white">Ataussamad Ansari</p></div>
            </div>
            <figcaption class="mt-3 text-center text-[9px] tracking-[.08em] text-slate-500">CEO &amp; Founder</figcaption>
        </figure>

        <div class="relative max-w-3xl">
            <span class="absolute -left-1 -top-12 select-none font-display text-7xl leading-none text-blue-300/15 md:-left-8 md:-top-14 md:text-8xl" aria-hidden="true">&ldquo;</span>
            <span class="text-[9px] font-semibold tracking-[.17em] text-blue-300">MESSAGE FROM THE FOUNDER</span>
            <h2 id="founder-message-title" class="mt-3 font-display text-3xl font-medium leading-tight tracking-[-.05em] text-white md:text-4xl">Building Technology With <span class="text-blue-300">Purpose.</span></h2>
            <div class="mt-5 space-y-4 text-xs leading-6 text-slate-300/80 md:text-[13px] md:leading-7">
                <p>At Devize Tech Solutions, we believe technology is most valuable when it solves real problems and creates meaningful opportunities.</p>
                <p>We started DTS with a simple vision: to help businesses, startups, and organizations turn their ideas into reliable digital products. From websites and web applications to mobile apps and custom software, our focus is not just on writing code, but on understanding the problem, designing the right solution, and building technology that can grow with the business.</p>
                <p>We believe in thoughtful development, transparent communication, continuous learning, and long-term partnerships. Every project is an opportunity to learn, innovate, and create something that delivers real value.</p>
                <p>Our journey is still growing, and we are excited to build that journey together with our clients, partners, and team.</p>
            </div>
            <div class="mt-7 border-t border-blue-100/10 pt-5"><p class="founder-signature text-2xl text-blue-100">Ataussamad Ansari</p><p class="mt-1 text-[9px] font-semibold tracking-[.12em] text-slate-400">CEO &amp; FOUNDER</p><p class="mt-1 text-[9px] tracking-[.12em] text-slate-500">DEVIZE TECH SOLUTIONS</p></div>
        </div>
    </div>
</section>
