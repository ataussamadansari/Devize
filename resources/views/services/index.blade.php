@extends('layouts.master')

@section('title', 'Services')
@section('meta_description', 'Explore web development, mobile apps, custom software, product design and backend services from Devize Tech Solutions.')

@section('content')
<main>
    {{-- Plain, full-width hero --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div>
        <div class="pointer-events-none absolute -right-20 top-0 -z-10 h-80 w-80 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[330px] w-[min(1180px,calc(100%-40px))] items-center gap-3 py-12 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-14">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> WHAT WE DO</span>
                <h1 class="mt-4 font-display text-4xl font-semibold leading-[1.06] tracking-[-.06em] text-white sm:text-5xl md:text-6xl">Services built around <span class="text-blue-300">your business.</span></h1>
                <p class="mt-4 max-w-xl text-sm leading-7 text-slate-300/80">From the first idea to the next stage of growth, we help you design, build and support digital products that solve real problems.</p>
                <a class="mt-6 inline-flex min-h-11 items-center gap-3 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Request a quote <x-icon name="arrow" class="h-4 w-4" /></a>
            </div>
            <img class="mx-auto w-full max-w-[390px] drop-shadow-[0_20px_40px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Illustration of a digital product dashboard" width="640" height="520" fetchpriority="high">
        </div>
    </section>

    {{-- Services --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="services-list-title">
        <div class="mb-7 flex flex-col justify-between gap-3 md:mb-9 md:flex-row md:items-end">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">OUR CAPABILITIES</span><h2 id="services-list-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">What can we help you build?</h2></div>
            <p class="max-w-md text-xs leading-6 text-slate-400">Explore a service to see what it includes and how we can help.</p>
        </div>

        <div class="grid grid-cols-1 border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['Web Development','Business websites, SaaS platforms, web applications and online stores.','code',['Web apps','E-commerce','Integrations'],'web-development'],
                ['Mobile App Development','Mobile applications for iOS, Android and cross-platform products.','phone',['iOS','Android','Flutter'],'mobile-app-development'],
                ['Custom Software','Business systems, internal tools and workflow automation.','settings',['CRM & ERP','Dashboards','Automation'],'custom-software'],
                ['UI/UX Design','Research, user flows, prototypes and polished product interfaces.','pen',['Product design','Prototypes','Design systems'],'ui-ux-design'],
                ['Cloud & Backend','APIs, data architecture, authentication and cloud deployment.','cloud',['APIs','Databases','Cloud'],'cloud-backend'],
                ['Digital Solutions','Third-party integrations and practical technology for your needs.','spark',['Automation','Integrations','Digital'],'digital-solutions'],
            ] as $index => $service)
                <a href="{{ route('services.show', $service[4]) }}" class="group relative min-h-[232px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5 transition hover:from-blue-500/[.08] md:p-6">
                    <span class="absolute right-5 top-5 font-display text-[10px] tracking-widest text-slate-600">0{{ $index + 1 }}</span>
                    <span class="grid h-10 w-10 place-items-center rounded-md border border-blue-300/20 bg-blue-400/[.07] text-blue-300"><x-icon :name="$service[2]" class="h-5 w-5" /></span>
                    <h3 class="mt-5 pr-7 font-display text-base font-medium text-slate-100">{{ $service[0] }}</h3>
                    <p class="mt-2 max-w-sm text-xs leading-5 text-slate-400">{{ $service[1] }}</p>
                    <div class="mt-4 flex flex-wrap gap-1.5">@foreach ($service[3] as $tag)<span class="rounded border border-white/10 px-2 py-1 text-[8px] text-slate-500">{{ $tag }}</span>@endforeach</div>
                    <span class="absolute bottom-5 right-5 inline-flex items-center gap-2 text-[10px] font-semibold text-blue-200 opacity-0 transition group-hover:opacity-100">Details <x-icon name="arrow" class="h-3.5 w-3.5" /></span>
                </a>
            @endforeach
        </div>
    </section>

    {{-- Added content so the page has a useful next step --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="delivery-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-16">
            <div class="mb-7 max-w-2xl"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">HOW WE WORK</span><h2 id="delivery-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">A clear path from brief to build.</h2><p class="mt-3 text-xs leading-6 text-slate-400">Start with the outcome you need. We’ll agree on a scope and keep the work clear as it moves forward.</p></div>
            <div class="grid gap-3 md:grid-cols-3">
                @foreach ([['01','Understand','We learn about your users, requirements and goals.','people'],['02','Plan & build','We shape a practical plan and create the product in clear steps.','code'],['03','Launch & support','We help prepare for launch and discuss what comes next.','route']] as $step)
                    <article class="flex gap-4 rounded-lg border border-white/10 bg-[#0d1420] p-4 md:p-5"><span class="font-display text-[10px] text-blue-300">{{ $step[0] }}</span><div><h3 class="font-display text-sm font-medium text-white">{{ $step[1] }}</h3><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $step[2] }}</p></div><x-icon :name="$step[3]" class="ml-auto h-4 w-4 shrink-0 text-slate-500" /></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mx-auto flex w-[min(1180px,calc(100%-40px))] flex-col justify-between gap-5 py-12 sm:flex-row sm:items-center md:w-[min(1180px,calc(100%-64px))] md:py-14">
        <div><h2 class="font-display text-xl font-medium text-white">Not sure which service fits?</h2><p class="mt-2 text-xs leading-5 text-slate-400">Tell us what you’re trying to solve and we’ll talk through the options.</p></div>
        <a class="inline-flex min-h-11 items-center gap-3 self-start rounded-md border border-blue-300/40 bg-blue-500/10 px-5 text-xs font-semibold text-blue-100 transition hover:bg-blue-500/20 sm:self-auto" href="{{ route('quote') }}">Request a quote <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a>
    </section>
</main>
@endsection
