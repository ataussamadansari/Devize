@extends('layouts.master')
@section('title', $page['title'])
@section('meta_description', $page['description'])
@push('head')
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $page['title'] }} | Devize Tech Solutions">
<meta property="og:description" content="{{ $page['description'] }}">
<meta property="og:image" content="{{ asset('images/'.$page['image']) }}">
<script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@type' => 'Article', 'headline' => $page['title'], 'description' => $page['description'], 'image' => asset('images/'.$page['image']), 'datePublished' => '2026-09-30', 'author' => ['@type' => 'Organization', 'name' => 'Devize Tech Solutions'], 'publisher' => ['@type' => 'Organization', 'name' => 'Devize Tech Solutions']], JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) !!}</script>
@endpush
@section('content')
@php
    $relatedPosts = [
        'planning-an-mvp' => ['A practical way to plan your first MVP', 'Product Development', 'blog-mvp.svg'],
        'designing-for-clarity' => ['Designing digital products for clarity', 'UI/UX Design', 'blog-design.svg'],
        'choosing-a-technology-stack' => ['Choosing a technology stack for your product', 'Engineering', 'blog-stack.svg'],
    ];
@endphp
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div><div class="pointer-events-none absolute -right-16 -top-16 -z-10 h-72 w-72 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto w-[min(980px,calc(100%-40px))] py-8 md:w-[min(980px,calc(100%-64px))] md:py-12">
            <nav aria-label="Breadcrumb" class="text-[10px] text-slate-500"><a class="transition hover:text-white" href="{{ route('home') }}">Home</a><span class="mx-2">/</span><a class="transition hover:text-white" href="{{ route('blog') }}">Blog</a><span class="mx-2">/</span><span class="text-slate-300">{{ $page['category'] }}</span></nav>
            <div class="mt-8 max-w-3xl"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">{{ strtoupper($page['category']) }}</span><h1 class="mt-4 font-display text-3xl font-semibold leading-tight tracking-[-.055em] text-white sm:text-4xl md:text-5xl">{{ $page['title'] }}</h1><p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300/80">{{ $page['description'] }}</p><div class="mt-6 flex flex-wrap items-center gap-x-3 gap-y-2 text-[10px] text-slate-400"><span>By Devize Tech Solutions</span><span aria-hidden="true">·</span><time datetime="2026-09-30">{{ $page['date'] }}</time><span aria-hidden="true">·</span><span>{{ $page['reading_time'] }}</span></div></div>
        </div>
    </section>

    <div class="mx-auto w-[min(1060px,calc(100%-40px))] pb-16 md:w-[min(1060px,calc(100%-64px))] md:pb-24">
        <figure class="-mt-1 overflow-hidden border-x border-b border-white/10 bg-[#111827]"><img src="{{ asset('images/'.$page['image']) }}" alt="Illustration for {{ $page['title'] }}" width="720" height="420" class="aspect-[2/1] w-full object-cover"></figure>

        <div class="grid gap-10 pt-10 lg:grid-cols-[210px_minmax(0,1fr)] lg:gap-14">
            <aside class="lg:sticky lg:top-24 lg:self-start">
                <details class="group rounded-lg border border-white/10 bg-[#0a101a] p-4 lg:hidden"><summary class="flex cursor-pointer list-none items-center justify-between text-xs font-semibold text-slate-200">In this article <span class="text-blue-300 group-open:rotate-45">+</span></summary><ol class="mt-3 space-y-2">@foreach ($page['sections'] as $section)<li><a class="text-[10px] leading-5 text-slate-400 hover:text-blue-200" href="#{{ \Illuminate\Support\Str::slug($section['title']) }}">{{ $section['title'] }}</a></li>@endforeach</ol></details>
                <div class="hidden border-l border-white/10 pl-4 lg:block"><p class="text-[9px] font-semibold tracking-[.14em] text-slate-300">IN THIS ARTICLE</p><ol class="mt-4 space-y-3">@foreach ($page['sections'] as $section)<li><a class="text-[10px] leading-5 text-slate-500 transition hover:text-blue-200" href="#{{ \Illuminate\Support\Str::slug($section['title']) }}">{{ $section['title'] }}</a></li>@endforeach</ol></div>
            </aside>

            <article class="min-w-0">
                <p class="mb-8 border-l-2 border-blue-400/60 pl-4 text-base leading-7 text-slate-200">{{ $page['description'] }}</p>
                @foreach ($page['sections'] as $section)
                    <section id="{{ \Illuminate\Support\Str::slug($section['title']) }}" class="mb-9 scroll-mt-24">
                        <h2 class="font-display text-2xl font-medium tracking-[-.035em] text-white">{{ $section['title'] }}</h2>
                        @foreach ($section['paragraphs'] as $paragraph)<p class="mt-4 text-sm leading-7 text-slate-400">{{ $paragraph }}</p>@endforeach
                        @if (!empty($section['points']))<ul class="mt-4 space-y-3">@foreach ($section['points'] as $point)<li class="flex gap-3 text-sm leading-6 text-slate-300"><span class="text-blue-300">&#10003;</span><span>{{ $point }}</span></li>@endforeach</ul>@endif
                    </section>
                @endforeach

                <div class="mt-10 border-y border-white/10 py-5"><p class="text-[9px] font-semibold tracking-[.14em] text-slate-500">TAGS</p><div class="mt-3 flex flex-wrap gap-2">@foreach ($page['tags'] as $tag)<span class="rounded-full border border-white/10 px-3 py-1.5 text-[10px] text-slate-400">{{ $tag }}</span>@endforeach</div></div>

                <section class="mt-8" aria-labelledby="share-title"><h2 id="share-title" class="text-xs font-semibold text-slate-200">Share this article</h2><div class="mt-3 flex flex-wrap gap-2"><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="share-link">LinkedIn</a><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="share-link">Facebook</a><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&amp;text={{ urlencode($page['title']) }}" target="_blank" rel="noopener noreferrer" class="share-link">X</a><a href="https://wa.me/?text={{ urlencode($page['title'].' '.url()->current()) }}" target="_blank" rel="noopener noreferrer" class="share-link">WhatsApp</a><button type="button" data-copy-link class="share-link">Copy link</button></div></section>

                <section class="mt-10 flex gap-4 border border-white/10 bg-[#0a101a] p-5" aria-label="About the author"><span class="grid h-11 w-11 shrink-0 place-items-center rounded-full border border-blue-300/20 bg-blue-400/[.08] font-display text-sm font-semibold text-blue-200">DTS</span><div><h2 class="text-xs font-semibold text-white">Devize Tech Solutions</h2><p class="mt-1 text-[11px] leading-5 text-slate-400">Software development team building modern digital products and practical technology solutions.</p></div></section>
            </article>
        </div>
    </div>

    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="related-title">
        <div class="mx-auto w-[min(1060px,calc(100%-40px))] py-12 md:w-[min(1060px,calc(100%-64px))] md:py-16"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">KEEP READING</span><h2 id="related-title" class="mt-2 font-display text-2xl font-medium text-white">You may also like</h2><div class="mt-6 grid gap-4 sm:grid-cols-2">@foreach ($page['related'] as $relatedSlug)@php($related = $relatedPosts[$relatedSlug])<a href="{{ route('blog.show', $relatedSlug) }}" class="group grid grid-cols-[100px_1fr] overflow-hidden border border-white/10 bg-[#0b111b] transition hover:border-blue-300/25"><img src="{{ asset('images/'.$related[2]) }}" alt="" width="720" height="420" loading="lazy" class="h-full min-h-[110px] w-full object-cover"><div class="p-4"><span class="text-[8px] font-semibold tracking-[.12em] text-blue-300">{{ strtoupper($related[1]) }}</span><h3 class="mt-2 font-display text-sm font-medium leading-snug text-white">{{ $related[0] }}</h3><span class="mt-3 inline-flex items-center gap-1 text-[9px] text-slate-400 group-hover:text-blue-200">Read article <x-icon name="arrow" class="h-3 w-3"/></span></div></a>@endforeach</div></div>
    </section>

    <section class="bg-gradient-to-r from-[#0c1524] via-[#101b30] to-[#0b1422]"><div class="mx-auto flex w-[min(1060px,calc(100%-40px))] flex-col justify-between gap-5 py-10 md:w-[min(1060px,calc(100%-64px))] md:flex-row md:items-center md:py-12"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">YOUR NEXT STEP</span><h2 class="mt-2 font-display text-xl font-medium text-white">Need help building your next digital product?</h2><p class="mt-2 text-xs text-slate-400">Let's turn your idea into a reliable, useful solution.</p></div><a href="{{ route('quote') }}" class="inline-flex min-h-11 items-center gap-3 self-start rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400 md:self-auto">Start a project <x-icon name="arrow" class="h-4 w-4"/></a></div></section>
</main>
@endsection
