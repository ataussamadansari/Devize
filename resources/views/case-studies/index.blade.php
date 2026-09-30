@extends('layouts.master')
@section('title', 'Case Studies')
@section('meta_description', 'Explore the product thinking and technology behind selected Devize Tech Solutions projects.')
@section('content')
<main class="mx-auto w-[min(1220px,calc(100%-40px))] pb-20 pt-10 md:w-[min(1220px,calc(100%-64px))] md:pb-28 md:pt-14">
    <section class="relative isolate overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-[#0d1728] via-[#09111d] to-[#080c14] px-6 py-10 md:px-12 md:py-14"><div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-40"></div><div class="grid items-center gap-6 md:grid-cols-[1.1fr_.9fr]"><div class="max-w-2xl"><span class="text-[10px] font-semibold tracking-[.18em] text-blue-300">BEHIND THE BUILD</span><h1 class="mt-5 font-display text-4xl font-semibold leading-tight tracking-[-.06em] text-white md:text-6xl">Thoughtful work, <span class="text-blue-300">told in detail.</span></h1><p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80">Explore the goals, product direction and technology choices behind selected DTS concepts and projects.</p></div><img class="mx-auto w-full max-w-[430px]" src="{{ asset('images/abstract-product.svg') }}" alt="Abstract digital product case study illustration" width="640" height="520"></div></section>
    <div class="mt-10 grid gap-5 md:grid-cols-2">
        @foreach ([['SnapStar','Social platform','A social product concept built around sharing moments and mobile-first interaction.','snapstar.svg','snapstar'],['GrowPec','Education platform','A learning platform concept designed to make growth and education more accessible.','growpec.svg','growpec']] as $study)
            <article class="overflow-hidden rounded-xl border border-white/10 bg-[#0a101a]"><a href="{{ route('case-studies.show', $study[4]) }}" class="group block"><div class="relative overflow-hidden bg-[#111a28]"><img src="{{ asset('images/'.$study[3]) }}" alt="{{ $study[0] }} {{ strtolower($study[1]) }} interface illustration" width="720" height="420" class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.025]"><span class="absolute left-4 top-4 rounded-full border border-white/15 bg-[#080d16]/75 px-3 py-1.5 text-[8px] tracking-[.14em] text-blue-100">{{ $study[1] }}</span></div><div class="p-5 md:p-6"><div class="flex items-center justify-between"><h2 class="font-display text-xl font-medium text-white">{{ $study[0] }}</h2><span class="text-blue-300">↗</span></div><p class="mt-2 text-xs leading-6 text-slate-400">{{ $study[2] }}</p><span class="mt-5 inline-flex items-center gap-2 text-[11px] font-semibold text-blue-200">Read case study <x-icon name="arrow" class="h-3.5 w-3.5" /></span></div></a></article>
        @endforeach
    </div>
</main>
@endsection

