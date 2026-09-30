@extends('layouts.master')

@section('title', $service['title'])
@section('meta_description', $service['description'])

@section('content')
@php
    $featuredProjects = [
        'snapstar' => ['name' => 'SnapStar', 'type' => 'Social platform concept', 'description' => 'A social platform concept focused on sharing moments through a mobile-first product experience.', 'image' => 'snapstar.svg', 'stack' => 'Flutter · Supabase · Firebase'],
        'growpec' => ['name' => 'GrowPec', 'type' => 'Education platform concept', 'description' => 'An education platform concept designed to make learning and personal growth more accessible.', 'image' => 'growpec.svg', 'stack' => 'Laravel · PostgreSQL · JavaScript'],
    ];
@endphp

<main>
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div>
        <div class="pointer-events-none absolute -right-24 top-0 -z-10 h-96 w-96 rounded-full bg-blue-600/15 blur-[110px]"></div>
        <div class="mx-auto grid min-h-[370px] w-[min(1180px,calc(100%-40px))] items-center gap-6 py-12 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-14">
            <div class="max-w-2xl">
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-[10px] font-medium text-slate-400 transition hover:text-white"><span aria-hidden="true">←</span> All services</a>
                <span class="mt-6 inline-flex items-center gap-2 text-[9px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span>{{ $service['eyebrow'] }}</span>
                <h1 class="mt-3 font-display text-4xl font-semibold leading-[1.06] tracking-[-.06em] text-white sm:text-5xl md:text-6xl">{{ $service['title'] }}</h1>
                <p class="mt-4 max-w-xl text-sm leading-7 text-slate-300/80">{{ $service['description'] }}</p>
                <a class="mt-6 inline-flex min-h-11 items-center gap-3 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Request a quote <x-icon name="arrow" class="h-4 w-4" /></a>
            </div>
            <img class="mx-auto w-full max-w-[430px] drop-shadow-[0_20px_40px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Illustration of a digital product interface" width="640" height="520" fetchpriority="high">
        </div>
    </section>

    {{-- What we build --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="what-build-title">
        <div class="mb-7 flex flex-col justify-between gap-3 md:mb-9 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHAT WE BUILD</span><h2 id="what-build-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">Useful products for real work.</h2></div><p class="max-w-md text-xs leading-6 text-slate-400">We shape the scope around your users and goals, then choose an approach that fits.</p></div>
        <div class="grid grid-cols-1 border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($service['what'] as $index => $item)
                <article class="min-h-[190px] border-b border-r border-white/10 bg-gradient-to-br from-white/[.025] to-transparent p-5 md:p-6"><div class="flex items-center justify-between"><span class="grid h-9 w-9 place-items-center rounded-md border border-blue-300/20 bg-blue-400/[.07] text-blue-300"><x-icon :name="$item[2]" class="h-4 w-4" /></span><span class="font-display text-[9px] tracking-widest text-slate-600">0{{ $index + 1 }}</span></div><h3 class="mt-5 font-display text-sm font-medium text-slate-100">{{ $item[0] }}</h3><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $item[1] }}</p></article>
            @endforeach
        </div>
    </section>

    {{-- Service details --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="service-details-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.85fr_1.15fr] md:items-start md:gap-16 md:py-18">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">SERVICE DETAILS</span><h2 id="service-details-title" class="mt-2 font-display text-2xl font-medium leading-tight tracking-[-.04em] text-white md:text-3xl">{{ $service['title'] }} Services</h2><p class="mt-4 text-xs leading-6 text-slate-400">Get support across the parts of a product that matter to your project. We can shape a focused engagement or work through a larger build together.</p></div>
            <div class="divide-y divide-white/10 border-y border-white/10">@foreach ($service['serviceOptions'] as $index => $item)<article class="grid grid-cols-[32px_1fr] gap-3 py-4"><span class="font-display text-[10px] text-blue-300">0{{ $index + 1 }}</span><div><h3 class="text-xs font-semibold text-slate-100">{{ $item[0] }}</h3><p class="mt-1.5 text-[11px] leading-5 text-slate-400">{{ $item[1] }}</p></div></article>@endforeach</div>
        </div>
    </section>

    {{-- Technologies --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-18" aria-labelledby="technology-title">
        <div class="grid gap-6 md:grid-cols-[.8fr_1.2fr] md:items-center">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">TECHNOLOGIES</span><h2 id="technology-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">Programming languages & tools.</h2><p class="mt-3 text-xs leading-6 text-slate-400">The final stack depends on your product, integrations and team. We agree on the right choices during project planning.</p></div>
            <div class="space-y-5">
                <div><h3 class="mb-2 text-[9px] font-semibold tracking-[.14em] text-slate-500">PROGRAMMING LANGUAGES</h3><div class="flex flex-wrap gap-2">@foreach ($service['languages'] as $language)<span class="rounded-md border border-blue-300/20 bg-blue-400/[.06] px-3 py-2 font-mono text-[10px] text-blue-100">{{ $language }}</span>@endforeach</div></div>
                <div><h3 class="mb-2 text-[9px] font-semibold tracking-[.14em] text-slate-500">TECHNOLOGY AREAS</h3><div class="grid grid-cols-2 gap-2 sm:grid-cols-4">@foreach ($service['technologies'] as $technology)<div class="flex min-h-[58px] items-center gap-2 rounded-lg border border-white/10 bg-white/[.025] px-3 py-2"><span class="h-1.5 w-1.5 shrink-0 rounded-full bg-blue-400"></span><span class="text-[10px] leading-4 text-slate-300">{{ $technology }}</span></div>@endforeach</div></div>
            </div>
        </div>
    </section>

    {{-- Why DTS --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="why-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.85fr_1.15fr] md:items-center md:gap-16 md:py-18"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHY DTS</span><h2 id="why-title" class="mt-2 font-display text-2xl font-medium leading-tight tracking-[-.04em] text-white md:text-3xl">A thoughtful partner from brief to build.</h2><p class="mt-4 text-xs leading-6 text-slate-400">Good technology starts with understanding the work it needs to do. We stay focused on the purpose behind each feature.</p></div><div class="grid gap-3 sm:grid-cols-2">@foreach ([['Business first','Begin with your goals and constraints.'],['Clear communication','Keep decisions and progress easy to follow.'],['Considered design','Make the product straightforward to use.'],['Built to evolve','Leave room for changing needs.']] as $item)<article class="flex gap-3 rounded-lg border border-white/10 bg-[#0d1420] p-4"><x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-blue-300"/><div><h3 class="text-xs font-semibold text-slate-100">{{ $item[0] }}</h3><p class="mt-1 text-[10px] leading-5 text-slate-400">{{ $item[1] }}</p></div></article>@endforeach</div></div>
    </section>

    {{-- Features --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="features-title">
        <div class="mb-7"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">FEATURES</span><h2 id="features-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">Built with the details in mind.</h2></div>
        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">@foreach ($service['features'] as $index => $feature)<article class="rounded-lg border border-white/10 bg-gradient-to-br from-white/[.035] to-transparent p-4 md:p-5"><span class="font-display text-[9px] tracking-widest text-blue-300">0{{ $index + 1 }}</span><h3 class="mt-4 font-display text-sm font-medium text-slate-100">{{ $feature[0] }}</h3><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $feature[1] }}</p></article>@endforeach</div>
    </section>

    {{-- Development process --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="process-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-18"><div class="mb-7 flex flex-col justify-between gap-3 md:mb-9 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">DEVELOPMENT PROCESS</span><h2 id="process-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">A clear way forward.</h2></div><p class="max-w-md text-xs leading-6 text-slate-400">Work in clear stages, with room for useful feedback along the way.</p></div>
            <div class="grid border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-5">@foreach ([['Discover','Understand users, goals and requirements.','people'],['Design','Shape flows, interface and prototype.','pen'],['Build','Develop the product and connect its parts.','code'],['Launch','Prepare the product for release.','rocket'],['Grow','Support improvements over time.','route']] as $index => $step)<article class="min-h-[155px] border-b border-r border-white/10 p-4 md:p-5"><div class="flex items-center justify-between"><span class="font-display text-[9px] text-blue-300">0{{ $index + 1 }}</span><x-icon :name="$step[2]" class="h-4 w-4 text-slate-500"/></div><h3 class="mt-5 font-display text-sm font-medium text-white">{{ $step[0] }}</h3><p class="mt-2 text-[10px] leading-5 text-slate-400">{{ $step[1] }}</p></article>@endforeach</div>
        </div>
    </section>

    {{-- Featured projects --}}
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-20" aria-labelledby="featured-title">
        <div class="mb-7 flex items-end justify-between gap-4 md:mb-9"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">FEATURED PROJECTS</span><h2 id="featured-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">Related work</h2></div><a href="{{ route('projects') }}" class="hidden items-center gap-2 text-[11px] text-slate-300 hover:text-white sm:inline-flex">All projects <x-icon name="arrow" class="h-4 w-4 text-blue-300"/></a></div>
        <div class="grid gap-4 md:grid-cols-2">@foreach ($service['projects'] as $projectSlug)@php($project = $featuredProjects[$projectSlug])<a href="{{ route('projects.show', $projectSlug) }}" class="group overflow-hidden rounded-lg border border-white/10 bg-[#0a0f18] transition hover:border-blue-300/25"><div class="relative overflow-hidden"><img src="{{ asset('images/'.$project['image']) }}" alt="{{ $project['name'] }} product illustration" width="720" height="420" loading="lazy" class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.025]"><span class="absolute left-4 top-4 rounded border border-white/15 bg-[#080d16]/80 px-2.5 py-1.5 text-[8px] tracking-[.12em] text-slate-200">{{ $project['type'] }}</span></div><div class="p-5"><div class="flex items-center justify-between"><h3 class="font-display text-lg font-medium text-white">{{ $project['name'] }}</h3><x-icon name="arrow" class="h-4 w-4 text-blue-300 transition group-hover:translate-x-1"/></div><p class="mt-2 text-[11px] leading-5 text-slate-400">{{ $project['description'] }}</p><span class="mt-4 inline-block rounded border border-white/10 px-2 py-1 text-[8px] text-slate-500">{{ $project['stack'] }}</span></div></a>@endforeach</div>
        <p class="mt-3 text-[9px] leading-5 text-slate-500">Project concepts from the DTS portfolio.</p>
    </section>

    {{-- Industries --}}
    <section class="border-y border-white/10 bg-[#0a0f18]" aria-labelledby="industries-title">
        <div class="mx-auto flex w-[min(1180px,calc(100%-40px))] flex-col gap-5 py-12 md:w-[min(1180px,calc(100%-64px))] md:flex-row md:items-center md:justify-between md:py-14"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">INDUSTRIES</span><h2 id="industries-title" class="mt-2 font-display text-xl font-medium text-white">Where this service can help</h2></div><div class="flex flex-wrap gap-2">@foreach ($service['industries'] as $industry)<span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[.025] px-3 py-2 text-[10px] text-slate-300"><span class="h-1 w-1 rounded-full bg-blue-400"></span>{{ $industry }}</span>@endforeach</div></div>
    </section>

    {{-- FAQ --}}
    <section class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-14 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.8fr_1.2fr] md:gap-16 md:py-20" aria-labelledby="faq-title">
        <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">GOOD QUESTIONS</span><h2 id="faq-title" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white md:text-3xl">Questions about {{ strtolower($service['title']) }}?</h2><p class="mt-3 text-xs leading-6 text-slate-400">If your question isn’t covered, send us a note and we’ll talk it through.</p><a href="{{ route('contact') }}" class="mt-4 inline-flex items-center gap-2 text-[11px] font-semibold text-blue-200">Contact us <x-icon name="arrow" class="h-3.5 w-3.5"/></a></div>
        <div class="divide-y divide-white/10 border-y border-white/10">@foreach ([['What does '.$service['title'].' include?','The scope depends on your goals and requirements. We’ll agree on the deliverables together before work begins.'],['Can you work with an existing product?','We can discuss improvements, integrations or ongoing work for an existing product.'],['How do we choose the right approach?','We look at your users, requirements, timeline and constraints, then talk through suitable options.'],['How do we get started?','Send us a short project outline. We’ll follow up to understand the details and discuss next steps.']] as $question)<details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-xs font-medium text-slate-200 [&::-webkit-details-marker]:hidden">{{ $question[0] }}<span class="text-lg font-normal text-blue-300 transition group-open:rotate-45">+</span></summary><p class="max-w-2xl pt-3 pr-8 text-[11px] leading-5 text-slate-400">{{ $question[1] }}</p></details>@endforeach</div>
    </section>

    {{-- CTA --}}
    <section class="relative isolate overflow-hidden border-y border-white/10 bg-gradient-to-r from-[#0c1524] via-[#101b30] to-[#0b1422]" aria-labelledby="service-cta-title"><div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-25"></div><div class="mx-auto flex w-[min(900px,calc(100%-40px))] flex-col items-start gap-4 py-12 md:w-[min(900px,calc(100%-64px))] md:flex-row md:items-center md:justify-between md:py-14"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">HAVE A PROJECT IN MIND?</span><h2 id="service-cta-title" class="mt-2 font-display text-2xl font-medium text-white">Let’s talk about what you need.</h2><p class="mt-2 text-xs leading-5 text-slate-300/70">Share the idea. We’ll help you work out a clear next step.</p></div><a class="inline-flex min-h-11 shrink-0 items-center gap-3 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400" href="{{ route('quote') }}">Request a quote <x-icon name="arrow" class="h-4 w-4"/></a></div></section>
</main>
@endsection
