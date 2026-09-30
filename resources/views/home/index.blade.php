@extends('layouts.master')

@section('title', 'Home')
@section('meta_description', 'Devize Tech Solutions designs and builds websites, mobile apps and custom software for growing businesses.')

@section('content')
<main>
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-35"></div>
        <div class="pointer-events-none absolute -right-24 top-8 -z-10 h-80 w-80 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[540px] w-[min(1180px,calc(100%-40px))] items-center gap-6 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-2 md:gap-10 md:py-16 lg:min-h-[590px]">
            <div class="max-w-xl">
                <span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> DIGITAL PRODUCTS, BUILT WITH PURPOSE</span>
                <h1 class="mt-5 font-display text-4xl font-semibold leading-[1.06] tracking-[-.065em] text-white sm:text-5xl lg:text-6xl">We build digital products that move <span class="text-blue-300">business forward.</span></h1>
                <p class="mt-5 max-w-lg text-sm leading-7 text-slate-300/80">Websites, mobile apps and custom software shaped around your people, your goals and the way your business works.</p>
                <div class="mt-7 flex flex-wrap items-center gap-3">
                    <a class="inline-flex min-h-12 items-center gap-4 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white shadow-[0_8px_30px_#1d4ed833] transition hover:-translate-y-0.5 hover:bg-blue-400" href="{{ route('quote') }}">Start a project <x-icon name="arrow" class="h-4 w-4" /></a>
                    <a class="inline-flex min-h-12 items-center gap-2 rounded-md border border-white/15 px-5 text-xs font-semibold text-slate-200 transition hover:border-white/30 hover:bg-white/[.04]" href="{{ route('services') }}">Explore services</a>
                </div>
            </div>
            <div class="relative mx-auto w-full max-w-[540px]">
                <img class="w-full drop-shadow-[0_24px_48px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Illustration of a modern software dashboard and connected product tools" width="640" height="520" fetchpriority="high">
                <span class="absolute bottom-3 left-2 rounded-full border border-white/10 bg-[#0b1421]/90 px-3 py-2 text-[9px] tracking-[.12em] text-slate-300 sm:bottom-8 sm:left-0">IDEAS → INTERFACES → IMPACT</span>
            </div>
        </div>
    </section>

    {{-- Tools we build with --}}
    <section class="border-b border-white/10 bg-[#090d14]" aria-labelledby="tools-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-6 md:w-[min(1180px,calc(100%-64px))] md:py-5">
            <div class="mb-4 flex flex-wrap items-end justify-between gap-2 md:mb-3"><div><h2 id="tools-title" class="text-[9px] font-semibold tracking-[.15em] text-slate-400">LANGUAGES, FRAMEWORKS &amp; TOOLS</h2><p class="mt-1 text-[9px] text-slate-600">Stack choices depend on the project.</p></div><span class="text-[8px] tracking-[.12em] text-slate-600">DTS TOOLKIT</span></div>
            @php($tools = [['PHP','LANGUAGE'],['JavaScript','LANGUAGE'],['TypeScript','LANGUAGE'],['Dart','LANGUAGE'],['Kotlin','LANGUAGE'],['Java','LANGUAGE'],['Laravel','FRAMEWORK'],['React','FRAMEWORK'],['Next.js','FRAMEWORK'],['React Native','FRAMEWORK'],['Flutter','FRAMEWORK'],['Express','FRAMEWORK'],['Jetpack Compose','FRAMEWORK'],['Tailwind CSS','FRAMEWORK'],['Node.js','RUNTIME'],['MySQL','DATABASE'],['PostgreSQL','DATABASE'],['Firebase','PLATFORM'],['Supabase','PLATFORM'],['AWS','CLOUD'],['Docker','DEVOPS']])
            <div class="tech-marquee" role="region" aria-label="Programming languages, frameworks and tools used by Devize Tech Solutions">
                <div class="tech-marquee-track">
                    @foreach ([false, true] as $duplicate)
                        <div class="tech-marquee-set" @if ($duplicate) aria-hidden="true" @endif>
                            @foreach ($tools as [$name, $kind])<span class="tech-chip"><span class="tech-chip-dot" aria-hidden="true"></span><span class="tech-chip-name">{{ $name }}</span><span class="tech-chip-kind">{{ $kind }}</span></span>@endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- What we do --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-24" id="services" aria-labelledby="services-title">
        <div class="mb-8 flex flex-col justify-between gap-4 md:mb-10 md:flex-row md:items-end">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHAT WE DO</span><h2 id="services-title" class="mt-3 max-w-2xl font-display text-3xl font-medium leading-tight tracking-[-.05em] text-white md:text-4xl">Services built around <span class="text-blue-300">your business.</span></h2></div>
            <p class="max-w-md text-xs leading-6 text-slate-400">One capable team to design, build and support the digital tools your business needs.</p>
        </div>
        <div class="grid grid-cols-1 border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['Web Development','Business websites, SaaS platforms, web applications and e-commerce.','code',['Web apps','E-commerce','Integrations'],'web-development'],
                ['Mobile App Development','Useful mobile experiences for your customers and your team.','phone',['iOS','Android','Cross-platform'],'mobile-app-development'],
                ['Custom Software','Purpose-built systems for your workflows and business operations.','settings',['CRM & ERP','Dashboards','Automation'],'custom-software'],
                ['UI/UX Design','Clear interfaces that make digital products easier to use.','pen',['Product design','Prototypes','Design systems'],'ui-ux-design'],
                ['Cloud & Backend','APIs, databases and infrastructure behind dependable products.','cloud',['APIs','Cloud','Data'],'cloud-backend'],
                ['Digital Solutions','Integrations and automation shaped around your business needs.','spark',['Automation','Integrations','Digital'],'digital-solutions'],
            ] as $index => $service)
                <a href="{{ route('services.show', $service[4]) }}" class="group relative min-h-[230px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5 transition hover:from-blue-500/[.08] md:p-6">
                    <span class="absolute right-5 top-5 font-display text-[10px] tracking-widest text-slate-600">0{{ $index + 1 }}</span>
                    <span class="grid h-10 w-10 place-items-center rounded-md border border-blue-300/20 bg-blue-400/[.07] text-blue-300"><x-icon :name="$service[2]" class="h-5 w-5" /></span>
                    <h3 class="mt-5 pr-7 font-display text-base font-medium text-slate-100">{{ $service[0] }}</h3>
                    <p class="mt-2 max-w-sm text-xs leading-5 text-slate-400">{{ $service[1] }}</p>
                    <div class="mt-4 flex flex-wrap gap-1.5">@foreach ($service[3] as $tag)<span class="rounded border border-white/10 px-2 py-1 text-[8px] text-slate-500">{{ $tag }}</span>@endforeach</div>
                    <x-icon name="arrow" class="absolute bottom-6 right-5 h-4 w-4 text-blue-300 opacity-0 transition group-hover:translate-x-1 group-hover:opacity-100" />
                </a>
            @endforeach
        </div>
    </section>

    {{-- More than code --}}
    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="approach-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-9 py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.9fr_1.1fr] md:items-center md:gap-16 md:py-20">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">MORE THAN CODE</span><h2 id="approach-title" class="mt-3 font-display text-3xl font-medium leading-tight tracking-[-.05em] text-white md:text-4xl">Technology should simplify business — <span class="text-blue-300">not complicate it.</span></h2><p class="mt-4 max-w-lg text-xs leading-6 text-slate-400">We start with the people, processes and goals behind the brief. Then we choose the right technology to make a meaningful difference.</p><a href="{{ route('about') }}" class="mt-5 inline-flex items-center gap-2 text-xs font-medium text-slate-200 hover:text-white">More about our approach <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a></div>
            <div class="divide-y divide-white/10 border-y border-white/10">
                @foreach ([['Business first','We understand your goals before recommending a solution.'],['Modern technology','We choose tools that fit the product and the people building it.'],['Scalable foundations','We build systems that can evolve with your business.'],['Clear collaboration','We keep decisions, timelines and progress transparent.']] as $index => $principle)
                    <article class="grid min-h-[76px] grid-cols-[32px_1fr_16px] items-center gap-3 py-4"><span class="font-display text-[10px] text-slate-500">0{{ $index + 1 }}</span><div><h3 class="font-display text-sm font-medium text-slate-100">{{ $principle[0] }}</h3><p class="mt-1 text-[11px] leading-5 text-slate-400">{{ $principle[1] }}</p></div><x-icon name="arrow" class="h-3.5 w-3.5 text-blue-300" /></article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Founder message --}}
    <x-founder-message />

    {{-- Selected work --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-24" id="projects" aria-labelledby="work-title">
        <div class="mb-8 flex flex-col justify-between gap-4 md:mb-10 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">SELECTED WORK</span><h2 id="work-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">A few things we’ve <span class="text-blue-300">built.</span></h2></div><p class="max-w-sm text-xs leading-6 text-slate-400">A glimpse at digital products and platforms from the DTS portfolio.</p></div>
        <div class="grid gap-5 md:grid-cols-2">
            @foreach ([['SnapStar','Social platform','A social platform concept focused on sharing the moments people want to remember.','snapstar.svg','snapstar'],['GrowPec','Education platform','An education platform concept designed to make learning more accessible.','growpec.svg','growpec']] as $project)
                <a href="{{ route('projects.show', $project[4]) }}" class="group overflow-hidden rounded-lg border border-white/10 bg-[#0a0f18] transition hover:border-blue-300/25">
                    <div class="relative overflow-hidden bg-[#111827]"><img class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.025]" src="{{ asset('images/'.$project[3]) }}" alt="{{ $project[0] }} product interface illustration" width="720" height="420" loading="lazy"><span class="absolute left-4 top-4 rounded border border-white/15 bg-[#080d16]/80 px-2.5 py-1.5 text-[8px] tracking-[.12em] text-slate-200">{{ $project[1] }}</span></div>
                    <div class="p-5 md:p-6"><div class="flex items-center justify-between"><h3 class="font-display text-xl font-medium text-white">{{ $project[0] }}</h3><x-icon name="arrow" class="h-4 w-4 text-blue-300 transition group-hover:translate-x-1" /></div><p class="mt-2 text-xs leading-6 text-slate-400">{{ $project[2] }}</p><div class="mt-4 flex gap-2"><span class="rounded border border-white/10 px-2 py-1 text-[8px] text-slate-400">{{ $project[0] === 'SnapStar' ? 'Flutter' : 'Laravel' }}</span><span class="rounded border border-white/10 px-2 py-1 text-[8px] text-slate-400">Product concept</span></div></div>
                </a>
            @endforeach
        </div>
        <p class="mt-4 text-[9px] leading-5 text-slate-500">Project concepts. Detailed outcomes can be shared when verified and approved.</p>
        <a class="mt-5 inline-flex items-center gap-2 text-xs font-medium text-slate-300 transition hover:text-white sm:hidden" href="{{ route('projects') }}">All projects <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a>
    </section>

    {{-- A clean way forward --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" id="process" aria-labelledby="process-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-20">
            <div class="mb-8 flex flex-col justify-between gap-4 md:mb-10 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">OUR PROCESS</span><h2 id="process-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">A clean way <span class="text-blue-300">forward.</span></h2></div><p class="max-w-sm text-xs leading-6 text-slate-400">From first idea to launch, we keep each step clear.</p></div>
            <div class="grid border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ([['Discover','Understand your users, goals and requirements.','people'],['Design','Create user flows, wireframes and prototypes.','pen'],['Build','Develop the frontend, backend and integrations.','code'],['Launch','Prepare deployment and production setup.','rocket'],['Grow','Maintain, improve and support your product.','route']] as $index => $step)
                    <article class="relative min-h-[180px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5 md:p-6"><span class="absolute right-5 top-5 text-[9px] text-slate-500">0{{ $index + 1 }}</span><x-icon :name="$step[2]" class="h-5 w-5 text-blue-300"/><h3 class="mt-6 font-display text-sm font-medium text-white">{{ $step[0] }}</h3><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $step[1] }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Good questions --}}
    <section class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.8fr_1.2fr] md:gap-16 md:py-24" aria-labelledby="faq-title">
        <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">GOOD QUESTIONS</span><h2 id="faq-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">A few things you might <span class="text-blue-300">wonder.</span></h2><p class="mt-4 max-w-sm text-xs leading-6 text-slate-400">Have another question? We’re happy to talk it through.</p><a class="mt-5 inline-flex items-center gap-2 text-xs font-medium text-blue-200 hover:text-white" href="{{ route('contact') }}">Contact us <x-icon name="arrow" class="h-4 w-4" /></a></div>
        <div class="divide-y divide-white/10 border-y border-white/10">
            @foreach ([['What services does DTS provide?','We design and build websites, mobile applications, custom software and the backend systems that support them.'],['Can you build custom software for my business?','Yes. We can discuss your needs and shape a custom application around your users and business goals.'],['Can you work with an existing product?','We can discuss improvements, integrations and ongoing maintenance for an existing website or application.'],['How does a project get started?','We start with a conversation about the challenge, requirements and goals, then agree on a suitable scope and next steps.']] as $question)
                <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-xs font-medium text-slate-200 [&::-webkit-details-marker]:hidden">{{ $question[0] }}<span class="text-lg font-normal text-blue-300 transition group-open:rotate-45">+</span></summary><p class="max-w-2xl pt-3 pr-8 text-xs leading-6 text-slate-400">{{ $question[1] }}</p></details>
            @endforeach
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="relative isolate overflow-hidden border-y border-white/10 bg-gradient-to-r from-[#0c1524] via-[#101b30] to-[#0b1422]" aria-labelledby="cta-title">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-25"></div><div class="pointer-events-none absolute left-1/2 top-1/2 -z-10 h-56 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-blue-500/15 blur-[90px]"></div>
        <div class="mx-auto flex w-[min(900px,calc(100%-40px))] flex-col items-center py-14 text-center md:w-[min(900px,calc(100%-64px))] md:py-20"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">LET’S MAKE SOMETHING USEFUL</span><h2 id="cta-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white sm:text-4xl md:text-5xl">Have an idea? <span class="text-blue-300">Let’s build it.</span></h2><p class="mt-4 max-w-xl text-xs leading-6 text-slate-300/75">Tell us what you’re working on. We’ll talk through your goals and help map out a clear next step.</p><a class="mt-6 inline-flex min-h-12 items-center gap-4 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Request a quote <x-icon name="arrow" class="h-4 w-4" /></a></div>
    </section>
</main>
@endsection
