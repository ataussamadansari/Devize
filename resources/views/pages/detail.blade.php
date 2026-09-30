@extends('layouts.master')
@section('title', $page['title'])
@section('meta_description', $page['description'])
@section('content')
<main class="mx-auto w-[min(1220px,calc(100%-40px))] pb-20 pt-10 md:w-[min(1220px,calc(100%-64px))] md:pb-28 md:pt-14">
    <section class="relative isolate overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-[#0d1728] via-[#09111d] to-[#080c14] px-6 py-10 md:px-12 md:py-14">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-40"></div><div class="pointer-events-none absolute -right-20 -top-24 -z-10 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
        <a href="{{ $back }}" class="inline-flex items-center gap-2 text-xs text-slate-400 transition hover:text-white"><span aria-hidden="true">←</span> Back to overview</a>
        <div class="grid items-center gap-7 md:grid-cols-[1.1fr_.9fr]">
            <div class="relative z-10 max-w-2xl pt-8"><span class="text-[10px] font-semibold tracking-[.18em] text-blue-300">{{ $page['eyebrow'] }}</span><h1 class="mt-5 font-display text-4xl font-semibold leading-[1.05] tracking-[-.065em] text-white sm:text-5xl md:text-6xl">{{ $page['title'] }}</h1><p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80 md:text-base">{{ $page['description'] }}</p><a class="mt-7 inline-flex items-center gap-3 rounded-md border border-blue-300/50 bg-blue-500/15 px-5 py-3 text-xs font-semibold text-blue-50 transition hover:bg-blue-500/25" href="{{ route('quote') }}">Discuss a project <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a></div>
            <img class="mx-auto w-full max-w-[430px] drop-shadow-[0_25px_50px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Abstract digital product interface" width="640" height="520">
        </div>
    </section>
    <section class="mt-12 md:mt-16"><div class="mb-6 flex items-end justify-between gap-5"><div><span class="text-[9px] font-semibold tracking-[.17em] text-blue-300">A CLOSER LOOK</span><h2 class="mt-2 font-display text-2xl font-medium tracking-tight text-white md:text-3xl">What this can include</h2></div><span class="hidden text-[10px] text-slate-500 sm:block">A starting point for the conversation</span></div>
        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">@foreach ($page['items'] as $index => $item)<article class="flex items-center gap-4 rounded-lg border border-white/[.08] bg-white/[.025] p-4"><span class="grid h-9 w-9 shrink-0 place-items-center rounded-full border border-emerald-300/15 bg-emerald-300/[.06] text-emerald-200"><x-icon name="check" class="h-4 w-4" /></span><div><span class="text-[9px] tracking-widest text-slate-600">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span><h3 class="mt-0.5 text-xs font-medium text-slate-200">{{ $item }}</h3></div></article>@endforeach</div>
    </section>
    <section class="mt-12 flex flex-col justify-between gap-5 rounded-xl border border-blue-300/15 bg-gradient-to-r from-blue-500/[.12] via-blue-500/[.04] to-transparent p-6 sm:flex-row sm:items-center md:mt-16 md:p-8"><div><h2 class="font-display text-xl font-medium text-white">Have a challenge in mind?</h2><p class="mt-2 text-xs text-slate-400">Let’s talk about what would make sense for your team.</p></div><a href="{{ route('quote') }}" class="inline-flex items-center gap-3 self-start rounded-md bg-blue-500 px-4 py-3 text-xs font-semibold text-white transition hover:bg-blue-400 sm:self-auto">Request a quote <x-icon name="arrow" class="h-4 w-4" /></a></section>
</main>
@endsection

