@extends('layouts.master')

@section('title', 'About Us')
@section('meta_description', 'Meet Devize Tech Solutions: a technology partner building practical digital products for businesses, startups and organizations.')

@section('content')
<main>
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-35"></div>
        <div class="pointer-events-none absolute -right-20 top-0 -z-10 h-80 w-80 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[440px] w-[min(1180px,calc(100%-40px))] items-center gap-5 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-16">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> ABOUT DEVIZE TECH SOLUTIONS</span>
                <h1 class="mt-5 font-display text-4xl font-semibold leading-[1.06] tracking-[-.065em] text-white sm:text-5xl md:text-6xl">We Build Digital Solutions That <span class="text-blue-300">Move Businesses Forward.</span></h1>
                <p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80">Devize Tech Solutions is a software development company focused on building modern, reliable and scalable digital products for businesses, startups and organizations.</p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a class="inline-flex min-h-12 items-center gap-4 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Start a project <x-icon name="arrow" class="h-4 w-4" /></a>
                    <a class="inline-flex min-h-12 items-center gap-2 rounded-md border border-white/15 px-5 text-xs font-semibold text-slate-200 transition hover:border-white/30 hover:bg-white/[.04]" href="{{ route('contact') }}">Contact us</a>
                </div>
            </div>
            <div class="relative mx-auto w-full max-w-[520px]">
                <img class="w-full drop-shadow-[0_24px_48px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Digital product interfaces connected through technology" width="640" height="520" fetchpriority="high">
                <div class="absolute bottom-2 left-2 rounded-lg border border-white/10 bg-[#0b1421]/90 px-4 py-3 sm:bottom-6 sm:left-0"><p class="text-[8px] font-semibold tracking-[.15em] text-blue-300">OUR CORE BELIEF</p><p class="mt-1 text-xs text-slate-200">Technology should solve real problems.</p></div>
            </div>
        </div>
    </section>

    {{-- Identity --}}
    <section class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.8fr_1.2fr] md:gap-16 md:py-24" aria-labelledby="who-title">
        <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHO WE ARE</span><h2 id="who-title" class="mt-3 font-display text-3xl font-medium leading-tight tracking-[-.05em] text-white md:text-4xl">More Than Just a Software Development Company.</h2></div>
        <div class="space-y-4 text-sm leading-7 text-slate-400"><p>At Devize Tech Solutions, we combine technology, design and business understanding to transform ideas into practical digital products. From websites and web applications to mobile apps and custom software, we focus on building solutions that are useful, scalable and built for the long term.</p><p>We work with startups, businesses and organizations at different stages, shaping each engagement around its users, goals and constraints. Our approach starts with understanding the problem, then moves through clear planning, thoughtful design, engineering and ongoing improvement.</p><p class="border-l-2 border-blue-400/60 pl-4 text-slate-200">We don’t just write code. We build digital products that solve real business problems.</p></div>
    </section>

    {{-- Founder message --}}
    <x-founder-message />

    {{-- Capabilities --}}
    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="capabilities-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-20">
            <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHAT WE DO</span><h2 id="capabilities-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">Capability from idea to launch.</h2></div><a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-xs font-medium text-slate-300 transition hover:text-white">Explore services <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a></div>
            <div class="grid grid-cols-1 border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([['Web Development','Websites, web applications and commerce experiences.','code','web-development'],['Mobile App Development','Mobile products for customers and teams.','phone','mobile-app-development'],['Custom Software','Purpose-built platforms, tools and workflows.','settings','custom-software'],['UI/UX Design','Research and interfaces that make products clear.','pen','ui-ux-design'],['Cloud & Backend','APIs, databases and deployment foundations.','cloud','cloud-backend'],['Digital Solutions','Integrations and technology shaped around your needs.','spark','digital-solutions']] as $index => $service)
                    <a href="{{ route('services.show', $service[3]) }}" class="group relative min-h-[185px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5 transition hover:from-blue-500/[.08] md:p-6"><span class="absolute right-5 top-5 font-display text-[10px] tracking-widest text-slate-600">0{{ $index + 1 }}</span><span class="grid h-10 w-10 place-items-center rounded-md border border-blue-300/20 bg-blue-400/[.07] text-blue-300"><x-icon :name="$service[2]" class="h-5 w-5" /></span><h3 class="mt-5 pr-7 font-display text-base font-medium text-slate-100">{{ $service[0] }}</h3><p class="mt-2 text-xs leading-5 text-slate-400">{{ $service[1] }}</p></a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mission and vision --}}
    <section class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-px py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-2 md:py-20" aria-label="Mission and vision">
        @foreach ([['OUR MISSION','Make technology practical, accessible and valuable for every business.','We turn business needs into useful digital experiences, choosing an approach that fits the people who will use and maintain the product.','spark'],['OUR VISION','To become a trusted technology partner for businesses building the future.','We aim to build lasting partnerships through innovation, reliable delivery and support for continued digital transformation.','route']] as $item)
            <article class="border border-white/10 bg-gradient-to-br from-blue-500/[.07] to-transparent p-6 md:p-8"><x-icon :name="$item[3]" class="h-5 w-5 text-blue-300"/><p class="mt-6 text-[9px] font-semibold tracking-[.16em] text-blue-300">{{ $item[0] }}</p><h2 class="mt-3 max-w-lg font-display text-2xl font-medium leading-snug tracking-[-.04em] text-white">{{ $item[1] }}</h2><p class="mt-4 max-w-lg text-xs leading-6 text-slate-400">{{ $item[2] }}</p></article>
        @endforeach
    </section>

    {{-- Values --}}
    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="values-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-20">
            <div class="mb-8 max-w-xl"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHAT GUIDES US</span><h2 id="values-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">Our values, in the work.</h2></div>
            <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([['Innovation','We explore better ways to solve the problem at hand.','spark'],['Quality','We care about reliable, maintainable products.','check'],['Transparency','We communicate clearly through each project.','people'],['Customer first','Business goals guide our technology decisions.','briefcase'],['Ownership','We take responsibility for the products we build.','shield'],['Continuous learning','We keep improving as technology and needs change.','book']] as $value)
                    <article class="flex gap-4 border border-white/[.08] bg-white/[.02] p-5"><x-icon :name="$value[2]" class="h-5 w-5 shrink-0 text-blue-300"/><div><h3 class="font-display text-sm font-medium text-white">{{ $value[0] }}</h3><p class="mt-2 text-xs leading-5 text-slate-400">{{ $value[1] }}</p></div></article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Method --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="method-title">
        <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">HOW WE WORK</span><h2 id="method-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">A thoughtful path to delivery.</h2></div><p class="max-w-md text-xs leading-6 text-slate-400">Each step makes the next one clearer, keeping the work connected to the original need.</p></div>
        <ol class="grid border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([['Understand','Learn the users, business goals and real problem.','people'],['Plan','Agree on requirements, priorities and a practical scope.','file'],['Design','Shape user journeys and a clear product experience.','pen'],['Build','Develop the product and connect its systems.','code'],['Test','Review quality, usability and key product flows.','check'],['Launch','Prepare a reliable release and handover.','rocket'],['Improve','Use feedback and changing needs to plan what comes next.','route']] as $index => $step)
                <li class="min-h-[155px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5"><div class="flex items-center justify-between"><span class="font-display text-[10px] tracking-widest text-slate-500">0{{ $index + 1 }}</span><x-icon :name="$step[2]" class="h-4 w-4 text-blue-300"/></div><h3 class="mt-6 font-display text-sm font-medium text-white">{{ $step[0] }}</h3><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $step[1] }}</p></li>
            @endforeach
        </ol>
    </section>

    {{-- Technology --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="technology-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.7fr_1.3fr] md:items-start md:py-20">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">TECHNOLOGY</span><h2 id="technology-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white">Tools chosen for the job.</h2><p class="mt-4 text-xs leading-6 text-slate-400">We use a practical, modern stack and match the tools to each product’s goals and constraints.</p></div>
            <div class="grid gap-3 sm:grid-cols-2">
                @foreach ([['Web','Laravel · PHP · MySQL · JavaScript · Tailwind'],['Mobile','Flutter · React Native · Kotlin'],['Backend & Cloud','REST APIs · Firebase · Supabase · AWS'],['Tools','Git · GitHub · Docker · CI/CD']] as $stack)
                    <article class="rounded-lg border border-white/10 bg-[#0d1420] p-5"><h3 class="text-[9px] font-semibold tracking-[.14em] text-blue-300">{{ $stack[0] }}</h3><p class="mt-3 text-xs leading-6 text-slate-300">{{ $stack[1] }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Portfolio --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-16 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="work-title">
        <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">OUR PROJECTS</span><h2 id="work-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white md:text-4xl">Ideas taking shape.</h2></div><a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-xs font-medium text-slate-300 transition hover:text-white">View all projects <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a></div>
        <div class="grid gap-5 md:grid-cols-2">
            @foreach ([['GrowPec','Education platform','A learning platform concept focused on a clear, accessible web experience.','growpec.svg','growpec','Laravel'],['SnapStar','Social platform','A mobile social platform concept for sharing meaningful moments.','snapstar.svg','snapstar','Flutter']] as $project)
                <a href="{{ route('projects.show', $project[4]) }}" class="group overflow-hidden rounded-lg border border-white/10 bg-[#0a0f18] transition hover:border-blue-300/25"><div class="overflow-hidden bg-[#111827]"><img class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.025]" src="{{ asset('images/'.$project[3]) }}" alt="{{ $project[0] }} project concept illustration" width="720" height="420" loading="lazy"></div><div class="p-5 md:p-6"><span class="text-[8px] font-semibold tracking-[.14em] text-blue-300">{{ $project[1] }} · CONCEPT</span><div class="mt-2 flex items-center justify-between"><h3 class="font-display text-xl font-medium text-white">{{ $project[0] }}</h3><x-icon name="arrow" class="h-4 w-4 text-blue-300 transition group-hover:translate-x-1"/></div><p class="mt-2 text-xs leading-6 text-slate-400">{{ $project[2] }}</p><span class="mt-4 inline-block rounded border border-white/10 px-2 py-1 text-[8px] text-slate-400">{{ $project[5] }}</span></div></a>
            @endforeach
        </div>
        <p class="mt-4 text-[9px] leading-5 text-slate-500">These are product concepts. Verified client outcomes are not currently published.</p>
    </section>

    {{-- Why DTS --}}
    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="why-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-16 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.8fr_1.2fr] md:gap-16 md:py-20">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHY DTS</span><h2 id="why-title" class="mt-3 font-display text-3xl font-medium leading-tight tracking-[-.05em] text-white md:text-4xl">A capable partner, focused on your goals.</h2><p class="mt-4 text-xs leading-6 text-slate-400">A good technology decision should make the product and the business work better.</p></div>
            <div class="divide-y divide-white/10 border-y border-white/10">
                @foreach ([['Business-oriented solutions','Product decisions start with the need they should address.'],['Modern technology','Use current tools selected to fit the product and team.'],['Custom development','Shape the experience around your users and workflows.'],['Clear communication','Keep scope, decisions and progress easy to follow.'],['Scalable architecture','Build a foundation that can adapt as needs evolve.'],['Long-term support','Plan for maintenance and improvement after launch.']] as $reason)
                    <article class="flex items-start gap-4 py-4"><span class="mt-1 text-blue-300">✓</span><div><h3 class="text-sm font-medium text-slate-200">{{ $reason[0] }}</h3><p class="mt-1 text-xs leading-5 text-slate-400">{{ $reason[1] }}</p></div></article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-r from-[#0c1524] via-[#101b30] to-[#0b1422]" aria-labelledby="cta-title">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-25"></div><div class="mx-auto flex w-[min(900px,calc(100%-40px))] flex-col items-center py-14 text-center md:w-[min(900px,calc(100%-64px))] md:py-20"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">LET’S BUILD SOMETHING MEANINGFUL</span><h2 id="cta-title" class="mt-3 font-display text-3xl font-medium tracking-[-.05em] text-white sm:text-4xl md:text-5xl">Have an idea? <span class="text-blue-300">Let’s talk.</span></h2><p class="mt-4 max-w-xl text-xs leading-6 text-slate-300/75">Have an idea, business challenge or product in mind? Let’s talk about how we can turn it into a digital solution.</p><a class="mt-6 inline-flex min-h-12 items-center gap-4 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Start a project <x-icon name="arrow" class="h-4 w-4" /></a></div>
    </section>
</main>
@endsection
