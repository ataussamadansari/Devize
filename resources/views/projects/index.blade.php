@extends('layouts.master')
@section('title', 'Projects')
@section('meta_description', 'Explore selected digital product work from Devize Tech Solutions.')
@section('content')
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0d1728] via-[#09111d] to-[#080c14]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-40"></div>
        <div class="mx-auto grid w-[min(1220px,calc(100%-40px))] items-center gap-5 py-14 md:w-[min(1220px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-20">
            <div class="max-w-2xl">
                <span class="text-[10px] font-semibold tracking-[.18em] text-blue-300">SELECTED WORK</span>
                <h1 class="mt-5 font-display text-4xl font-semibold leading-tight tracking-[-.06em] text-white md:text-6xl">Ideas made <span class="text-blue-300">real.</span></h1>
                <p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80">A few examples from the DTS portfolio. Explore the product thinking, design and engineering behind each concept.</p>
            </div>
            <img class="mx-auto w-full max-w-[430px]" src="{{ asset('images/abstract-product.svg') }}" alt="Digital product interface illustration" width="640" height="520">
        </div>
    </section>

    <section class="mx-auto w-[min(1220px,calc(100%-40px))] pb-20 pt-12 md:w-[min(1220px,calc(100%-64px))] md:pb-28 md:pt-16" aria-labelledby="projects-heading">
        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">OUR PORTFOLIO</span>
                <h2 id="projects-heading" class="mt-2 font-display text-2xl font-medium tracking-[-.04em] text-white">Selected projects</h2>
            </div>
            <div class="flex flex-wrap gap-2" role="group" aria-label="Filter projects">
                @foreach ([['all', 'All projects'], ['web', 'Web'], ['mobile', 'Mobile'], ['social', 'Social'], ['education', 'Education']] as [$filter, $label])
                    <button type="button" class="project-filter {{ $filter === 'all' ? 'is-active' : '' }}" data-project-filter="{{ $filter }}" aria-pressed="{{ $filter === 'all' ? 'true' : 'false' }}">{{ $label }}</button>
                @endforeach
            </div>
        </div>

        <div id="project-grid" class="mt-7 grid gap-5 md:grid-cols-2">
            @foreach ([['SnapStar','Social platform','A social platform concept focused on sharing the moments people want to remember.','snapstar.svg','Flutter · Supabase · Firebase','snapstar','mobile social'],['GrowPec','Education platform','An education platform concept designed to make learning and personal growth more accessible.','growpec.svg','Laravel · PostgreSQL · JavaScript','growpec','web education']] as $project)
                <article class="project-card overflow-hidden rounded-xl border border-white/10 bg-[#0a101a]" data-project-category="{{ $project[6] }}">
                    <a href="{{ route('projects.show', $project[5]) }}" class="group block" aria-label="View {{ $project[0] }} project details">
                        <div class="overflow-hidden bg-[#111a28]"><img src="{{ asset('images/'.$project[3]) }}" alt="{{ $project[0] }} {{ strtolower($project[1]) }} illustration" width="720" height="420" class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.025]"></div>
                        <div class="p-5 md:p-6">
                            <span class="text-[8px] font-semibold tracking-[.15em] text-blue-300">{{ $project[1] }} · CONCEPT</span>
                            <div class="mt-2 flex items-center justify-between"><h3 class="font-display text-xl font-medium text-white">{{ $project[0] }}</h3><span class="text-blue-300" aria-hidden="true">↗</span></div>
                            <p class="mt-2 text-xs leading-6 text-slate-400">{{ $project[2] }}</p>
                            <div class="mt-4 flex flex-wrap gap-2">@foreach (explode(' · ', $project[4]) as $tech)<span class="rounded border border-white/10 px-2 py-1 text-[9px] text-slate-400">{{ $tech }}</span>@endforeach</div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
        <p class="mt-5 text-[10px] leading-5 text-slate-500">Portfolio examples and product concepts. Detailed project outcomes can be shared when verified and approved.</p>
    </section>
</main>
@endsection
