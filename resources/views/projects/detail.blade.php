@extends('layouts.master')
@section('title', $project['title'])
@section('meta_description', $project['description'])
@section('content')
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0d1728] via-[#09111d] to-[#080c14]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-40"></div>
        <div class="pointer-events-none absolute -right-20 -top-24 -z-10 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
        <div class="mx-auto w-[min(1220px,calc(100%-40px))] py-10 md:w-[min(1220px,calc(100%-64px))] md:py-14">
            <a href="{{ $back }}" class="inline-flex items-center gap-2 text-xs text-slate-400 transition hover:text-white"><span aria-hidden="true">←</span> All projects</a>
            <div class="grid items-center gap-8 py-9 md:grid-cols-[1fr_.9fr] md:py-12">
                <div class="max-w-2xl"><span class="text-[10px] font-semibold tracking-[.18em] text-blue-300">{{ $project['eyebrow'] }}</span><h1 class="mt-5 font-display text-4xl font-semibold leading-[1.05] tracking-[-.065em] text-white sm:text-5xl md:text-6xl">{{ $project['title'] }}</h1><p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80 md:text-base">{{ $project['description'] }}</p><div class="mt-5 flex flex-wrap gap-2"><span class="rounded-full border border-white/10 bg-white/[.04] px-3 py-1.5 text-[10px] text-slate-300">{{ $project['type'] }}</span><span class="rounded-full border border-blue-300/20 bg-blue-300/[.06] px-3 py-1.5 text-[10px] text-blue-200">Concept project</span></div><a class="mt-7 inline-flex items-center gap-3 rounded-md border border-blue-300/50 bg-blue-500/15 px-5 py-3 text-xs font-semibold text-blue-50 transition hover:bg-blue-500/25" href="{{ route('quote') }}">Discuss a project <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a></div>
                <img class="mx-auto w-full max-w-[540px] rounded-xl border border-white/10 bg-[#111a28]" src="{{ asset('images/'.$slug.'.svg') }}" alt="{{ $project['title'] }} project concept artwork" width="720" height="420">
            </div>
        </div>
    </section>

    <div class="mx-auto w-[min(1220px,calc(100%-40px))] pb-20 md:w-[min(1220px,calc(100%-64px))] md:pb-28">
        <section class="grid gap-6 border-b border-white/10 py-12 md:grid-cols-[.65fr_1.35fr] md:py-16" aria-labelledby="overview-heading"><div><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">01 / OVERVIEW</p><h2 id="overview-heading" class="mt-3 font-display text-2xl font-medium tracking-tight text-white">Project overview</h2></div><p class="max-w-3xl text-sm leading-7 text-slate-400">{{ $project['overview'] }}</p></section>

        <section class="grid gap-6 border-b border-white/10 py-12 md:grid-cols-2 md:py-14">
            <article><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">02 / THE CHALLENGE</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Challenge</h2><p class="mt-4 text-sm leading-7 text-slate-400">{{ $project['challenge'] }}</p></article>
            <article class="md:border-l md:border-white/10 md:pl-8"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">03 / OUR APPROACH</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Solution</h2><p class="mt-4 text-sm leading-7 text-slate-400">{{ $project['solution'] }}</p></article>
        </section>

        <section class="grid gap-8 border-b border-white/10 py-12 md:grid-cols-2 md:py-14">
            <div><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">04 / PRODUCT</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Key features</h2><ul class="mt-5 grid gap-3">@foreach ($project['features'] as $feature)<li class="flex items-start gap-3 text-sm text-slate-300"><span class="mt-1 text-blue-300">✓</span>{{ $feature }}</li>@endforeach</ul></div>
            <div class="md:border-l md:border-white/10 md:pl-8"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">05 / ENGINEERING</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Technology stack</h2><div class="mt-5 flex flex-wrap gap-2">@foreach ($project['stack'] as $technology)<span class="rounded-md border border-white/10 bg-white/[.025] px-3 py-2 text-xs text-slate-300">{{ $technology }}</span>@endforeach</div></div>
        </section>

        <section class="grid gap-6 border-b border-white/10 py-12 md:grid-cols-[.65fr_1.35fr] md:py-14"><div><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">06 / EXPERIENCE</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Design &amp; UX</h2></div><p class="max-w-3xl text-sm leading-7 text-slate-400">{{ $project['design'] }}</p></section>

        <section class="border-b border-white/10 py-12 md:py-14"><div class="flex flex-wrap items-end justify-between gap-4"><div><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">07 / VISUALS</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Project gallery</h2></div><p class="text-xs text-slate-500">Concept artwork</p></div><figure class="mt-6 overflow-hidden rounded-xl border border-white/10 bg-[#111a28]"><img class="max-h-[620px] w-full object-cover" src="{{ asset('images/'.$slug.'.svg') }}" alt="{{ $project['title'] }} concept visual" width="720" height="420"></figure></section>

        <section class="border-b border-white/10 py-12 md:py-14"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">08 / HOW IT TAKES SHAPE</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Development process</h2><ol class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">@foreach ($project['process'] as $index => $step)<li class="rounded-lg border border-white/[.08] bg-white/[.025] p-4"><span class="text-[9px] tracking-widest text-blue-300">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span><p class="mt-2 text-sm text-slate-300">{{ $step }}</p></li>@endforeach</ol></section>

        <section class="grid gap-6 border-b border-white/10 py-12 md:grid-cols-2 md:py-14">
            <article><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">09 / RESULTS</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Results &amp; impact</h2><p class="mt-4 text-sm leading-7 text-slate-400">{{ $project['impact'] }}</p></article>
            <article class="md:border-l md:border-white/10 md:pl-8"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">10 / CONSIDERATIONS</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Challenges &amp; solutions</h2><div class="mt-4 space-y-4">@foreach ($project['challenges'] as [$challenge, $approach])<div><h3 class="text-sm font-medium text-slate-200">{{ $challenge }}</h3><p class="mt-1 text-xs leading-6 text-slate-400">{{ $approach }}</p></div>@endforeach</div></article>
        </section>

        <section class="border-b border-white/10 py-12 md:py-14"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">11 / CLIENT FEEDBACK</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Client testimonial</h2><p class="mt-4 max-w-2xl text-sm leading-7 text-slate-400">No client testimonial is available for this concept project.</p></section>

        <section class="border-b border-white/10 py-12 md:py-14"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">12 / DETAILS</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Project information</h2><dl class="mt-5 grid gap-3 sm:grid-cols-2">@foreach ($project['information'] as [$label, $value])<div class="flex flex-col gap-1 rounded-lg border border-white/[.08] bg-white/[.025] p-4"><dt class="text-[10px] text-slate-500">{{ $label }}</dt><dd class="text-sm text-slate-200">{{ $value }}</dd></div>@endforeach</dl></section>

        <section class="border-b border-white/10 py-12 md:py-14"><p class="text-[9px] font-semibold tracking-[.17em] text-blue-300">13 / EXPLORE MORE</p><h2 class="mt-3 font-display text-2xl font-medium text-white">Related projects</h2><div class="mt-5 grid gap-4 sm:grid-cols-2">@foreach ($project['related'] as $relatedSlug)<a href="{{ route('projects.show', $relatedSlug) }}" class="group flex items-center justify-between rounded-lg border border-white/10 bg-white/[.025] p-5 transition hover:border-blue-300/30"><div><span class="text-[9px] font-semibold tracking-widest text-blue-300">{{ $relatedSlug === 'snapstar' ? 'SOCIAL PLATFORM' : 'EDUCATION PLATFORM' }}</span><h3 class="mt-2 font-display text-lg text-white">{{ $relatedSlug === 'snapstar' ? 'SnapStar' : 'GrowPec' }}</h3></div><span class="text-blue-300 transition group-hover:translate-x-1" aria-hidden="true">→</span></a>@endforeach</div></section>

        <section class="mt-12 flex flex-col justify-between gap-5 rounded-xl border border-blue-300/15 bg-gradient-to-r from-blue-500/[.12] via-blue-500/[.04] to-transparent p-6 sm:flex-row sm:items-center md:mt-14 md:p-8"><div><h2 class="font-display text-xl font-medium text-white">Have a product idea?</h2><p class="mt-2 text-xs text-slate-400">Let’s talk about the right next step for your project.</p></div><a href="{{ route('quote') }}" class="inline-flex items-center gap-3 self-start rounded-md bg-blue-500 px-4 py-3 text-xs font-semibold text-white transition hover:bg-blue-400 sm:self-auto">Request a quote <x-icon name="arrow" class="h-4 w-4" /></a></section>
    </div>
</main>
@endsection
