@props(['eyebrow', 'title', 'description', 'items' => [], 'cta' => 'Let’s talk', 'ctaRoute' => 'contact', 'art' => 'abstract-product.svg'])

<main class="mx-auto w-[min(1220px,calc(100%-40px))] pb-20 pt-10 md:w-[min(1220px,calc(100%-64px))] md:pb-28 md:pt-14">
    <section class="page-hero relative isolate overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-[#0d1728] via-[#09111d] to-[#080c14] px-6 py-10 md:px-12 md:py-14">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-40"></div>
        <div class="pointer-events-none absolute -right-20 -top-28 -z-10 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
        <div class="grid items-center gap-8 md:grid-cols-[1.05fr_.95fr] md:gap-4">
            <div class="relative z-10 max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.18em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400 shadow-[0_0_12px_#3977ff]"></span>{{ $eyebrow }}</span>
                <h1 class="mt-5 font-display text-4xl font-semibold leading-[1.05] tracking-[-.065em] text-white sm:text-5xl md:text-6xl">{{ $title }}</h1>
                <p class="mt-5 max-w-xl text-sm leading-7 text-slate-300/80 md:text-base">{{ $description }}</p>
                <a class="mt-7 inline-flex items-center gap-4 rounded-md border border-blue-300/50 bg-blue-500/15 px-5 py-3 text-xs font-semibold text-blue-50 shadow-[0_8px_32px_#1d4ed826] transition hover:-translate-y-0.5 hover:bg-blue-500/25" href="{{ route($ctaRoute) }}">{{ $cta }} <x-icon name="arrow" class="h-4 w-4 text-blue-300" /></a>
            </div>
            <div class="relative mx-auto w-full max-w-[500px] md:-mr-8">
                <img class="relative z-0 w-full drop-shadow-[0_25px_50px_#0008]" src="{{ asset('images/'.$art) }}" alt="Abstract illustration representing digital products and connected technology" width="640" height="520" fetchpriority="high">
                <span class="absolute bottom-4 right-0 rounded-full border border-white/10 bg-[#0b1421]/90 px-3 py-2 text-[9px] tracking-[.12em] text-slate-300 shadow-xl">IDEAS → INTERFACES → IMPACT</span>
            </div>
        </div>
        <div class="absolute bottom-4 left-6 hidden items-center gap-2 text-[8px] tracking-[.18em] text-slate-500 md:flex"><span class="h-px w-7 bg-blue-400/60"></span> BUILD WITH PURPOSE</div>
    </section>

    @if (count($items))
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $index => $item)
                <article class="group relative overflow-hidden rounded-xl border border-white/[.09] bg-gradient-to-br from-white/[.045] to-white/[.015] p-5 transition duration-300 hover:-translate-y-1 hover:border-blue-300/30 hover:from-blue-500/[.08] md:p-6">
                    <div class="absolute -right-8 -top-10 h-28 w-28 rounded-full bg-blue-500/[.07] blur-2xl transition group-hover:bg-blue-400/[.14]"></div>
                    <div class="relative flex items-center justify-between">
                        <span class="grid h-10 w-10 place-items-center rounded-lg border border-blue-300/15 bg-blue-400/[.08] text-blue-300"><x-icon :name="$item['icon'] ?? 'spark'" class="h-5 w-5" /></span>
                        <span class="font-display text-[10px] tracking-[.14em] text-slate-600">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <h2 class="relative mt-5 font-display text-lg font-medium text-slate-100">{{ $item['title'] }}</h2>
                    <p class="relative mt-2 text-xs leading-6 text-slate-400">{{ $item['description'] }}</p>
                    @if (!empty($item['href']))
                        <a class="relative mt-5 inline-flex items-center gap-2 text-[11px] font-semibold text-blue-200 transition group-hover:text-white" href="{{ $item['href'] }}">Explore <x-icon name="arrow" class="h-3.5 w-3.5" /></a>
                    @endif
                </article>
            @endforeach
        </div>
    @endif
</main>

