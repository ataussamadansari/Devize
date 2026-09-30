@extends('layouts.master')
@section('title', 'Insights & Resources')
@section('meta_description', 'Practical insights on software development, technology, design, business and digital products from Devize Tech Solutions.')
@section('content')
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div><div class="pointer-events-none absolute -right-20 top-0 -z-10 h-80 w-80 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[330px] w-[min(1180px,calc(100%-40px))] items-center gap-6 py-12 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-14">
            <div class="max-w-2xl"><span class="text-[10px] font-semibold tracking-[.18em] text-blue-300">INSIGHTS &amp; RESOURCES</span><h1 class="mt-4 font-display text-4xl font-semibold leading-tight tracking-[-.06em] text-white sm:text-5xl md:text-6xl">Ideas, Insights &amp; <span class="text-blue-300">Technology.</span></h1><p class="mt-4 max-w-xl text-sm leading-7 text-slate-300/80">Practical insights on software development, technology, design, business and digital products.</p></div>
            <img class="mx-auto w-full max-w-[360px]" src="{{ asset('images/blog-mvp.svg') }}" alt="Illustration of digital product ideas and technology" width="720" height="420" fetchpriority="high">
        </div>
    </section>

    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-12 md:w-[min(1180px,calc(100%-64px))] md:py-16" aria-labelledby="featured-title">
        <div class="mb-5 flex items-center gap-3"><span class="h-px w-7 bg-blue-400"></span><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">FEATURED ARTICLE</span></div>
        <a href="{{ route('blog.show', 'planning-an-mvp') }}" class="group grid overflow-hidden border border-white/10 bg-[#0a101a] transition hover:border-blue-300/25 md:grid-cols-2">
            <div class="overflow-hidden bg-[#111827]"><img class="h-full min-h-[230px] w-full object-cover transition duration-500 group-hover:scale-[1.025]" src="{{ asset('images/blog-mvp.svg') }}" alt="Digital product workspace illustration" width="720" height="420"></div>
            <div class="flex flex-col justify-center p-6 md:p-9"><span class="text-[9px] font-semibold tracking-[.14em] text-blue-300">PRODUCT DEVELOPMENT</span><h2 id="featured-title" class="mt-3 font-display text-2xl font-medium leading-snug tracking-[-.04em] text-white md:text-3xl">A practical way to plan your first MVP</h2><p class="mt-3 text-xs leading-6 text-slate-400">A focused first release starts with a clear user need and something useful to learn. Here's a practical way to decide what belongs in your MVP.</p><div class="mt-5 flex flex-wrap items-center gap-x-3 gap-y-2 text-[10px] text-slate-500"><span>By Devize Tech Solutions</span><span aria-hidden="true">·</span><span>6 min read</span></div><span class="mt-6 inline-flex items-center gap-2 text-xs font-semibold text-blue-200">Read article <x-icon name="arrow" class="h-4 w-4 transition group-hover:translate-x-1"/></span></div>
        </a>
    </section>

    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="articles-title">
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-12 md:w-[min(1180px,calc(100%-64px))] md:py-16">
            <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">THE DTS JOURNAL</span><h2 id="articles-title" class="mt-2 font-display text-2xl font-medium text-white md:text-3xl">Explore all articles</h2></div><label class="relative block w-full md:max-w-xs"><span class="sr-only">Search articles</span><input data-blog-search type="search" placeholder="Search articles..." class="min-h-11 w-full rounded-md border border-white/10 bg-[#0b111b] px-3 text-xs text-white outline-none placeholder:text-slate-500 focus:border-blue-300/50"></label></div>
            <div class="mt-5 flex flex-wrap gap-2" role="group" aria-label="Filter articles">
                @foreach ([['all','All'],['product','Product'],['design','UI/UX'],['engineering','Engineering'],['technology','Technology']] as [$key,$label])<button type="button" data-blog-filter="{{ $key }}" aria-pressed="{{ $key === 'all' ? 'true' : 'false' }}" class="blog-filter {{ $key === 'all' ? 'is-active' : '' }}">{{ $label }}</button>@endforeach
            </div>
            <div class="mt-7 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([['Designing digital products for clarity','Design','Small interface decisions can make a complex product feel simple and intuitive.','blog-design.svg','designing-for-clarity','design ui-ux product','5 min read'],['Choosing a technology stack for your product','Engineering','A useful stack fits the needs of your product and the people who will maintain it.','blog-stack.svg','choosing-a-technology-stack','engineering technology','7 min read']] as $post)
                    <article data-blog-card data-category="{{ $post[5] }}" data-search="{{ strtolower($post[0].' '.$post[1].' '.$post[2]) }}" class="overflow-hidden border border-white/10 bg-[#0b111b] transition hover:border-blue-300/25"><a href="{{ route('blog.show', $post[4]) }}" class="group block"><div class="overflow-hidden bg-[#111827]"><img src="{{ asset('images/'.$post[3]) }}" alt="Illustration for {{ strtolower($post[0]) }}" width="720" height="420" loading="lazy" class="aspect-[1.72] w-full object-cover transition duration-500 group-hover:scale-[1.03]"></div><div class="p-5"><span class="text-[8px] font-semibold tracking-[.14em] text-blue-300">{{ strtoupper($post[1]) }}</span><h3 class="mt-3 font-display text-lg font-medium leading-snug text-white">{{ $post[0] }}</h3><p class="mt-2 text-xs leading-6 text-slate-400">{{ $post[2] }}</p><div class="mt-4 flex items-center justify-between text-[9px] text-slate-500"><span>Devize Tech Solutions</span><span>{{ $post[6] }}</span></div><span class="mt-4 inline-flex items-center gap-2 text-[10px] font-semibold text-blue-200">Read more <x-icon name="arrow" class="h-3.5 w-3.5"/></span></div></a></article>
                @endforeach
            </div>
            <p data-blog-empty hidden class="mt-6 text-center text-xs text-slate-400">No articles match your search.</p>
        </div>
    </section>

    <section class="mx-auto flex w-[min(1180px,calc(100%-40px))] flex-col justify-between gap-4 py-10 md:w-[min(1180px,calc(100%-64px))] md:flex-row md:items-center md:py-12"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">BUILDING SOMETHING?</span><h2 class="mt-2 font-display text-xl font-medium text-white">Turn what you have read into a practical next step.</h2></div><a href="{{ route('quote') }}" class="inline-flex min-h-11 items-center gap-3 self-start rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400 md:self-auto">Discuss your project <x-icon name="arrow" class="h-4 w-4"/></a></section>
</main>
@endsection
