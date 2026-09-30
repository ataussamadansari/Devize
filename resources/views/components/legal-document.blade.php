@props(['title', 'description', 'sections' => []])

<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div><div class="pointer-events-none absolute -right-16 -top-16 -z-10 h-72 w-72 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto w-[min(1180px,calc(100%-40px))] py-12 md:w-[min(1180px,calc(100%-64px))] md:py-16">
            <nav aria-label="Breadcrumb" class="text-[10px] text-slate-500"><a class="hover:text-white" href="{{ route('home') }}">Home</a><span class="mx-2">/</span><a class="hover:text-white" href="{{ route('legal') }}">Legal</a></nav>
            <div class="mt-8 max-w-3xl"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">LEGAL INFORMATION</span><h1 class="mt-3 font-display text-4xl font-semibold leading-tight tracking-[-.06em] text-white sm:text-5xl">{{ $title }}</h1><p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300/80">{{ $description }}</p></div>
        </div>
    </section>

    <div class="mx-auto grid w-[min(1000px,calc(100%-40px))] gap-8 py-10 md:w-[min(1000px,calc(100%-64px))] md:grid-cols-[minmax(0,1fr)_260px] md:gap-12 md:py-14">
        <article class="min-w-0">
            <div class="mb-8 border border-amber-300/20 bg-amber-300/[.04] p-4"><p class="text-[10px] font-semibold tracking-[.12em] text-amber-200">DRAFT - REVIEW REQUIRED</p><p class="mt-2 text-xs leading-6 text-slate-400">This draft reflects the website implementation where known. DTS should verify its business practices, applicable jurisdiction and final legal wording before relying on or publishing it as a final policy.</p></div>
            <div class="space-y-8">@foreach ($sections as $section)<section id="{{ \Illuminate\Support\Str::slug($section['title']) }}" class="scroll-mt-24"><h2 class="font-display text-xl font-medium text-white">{{ $section['title'] }}</h2><p class="mt-3 text-sm leading-7 text-slate-400">{{ $section['body'] }}</p></section>@endforeach</div>
            <p class="mt-10 border-t border-white/10 pt-5 text-[10px] leading-5 text-slate-500">Questions about this draft? <a class="text-blue-200 hover:text-white" href="{{ route('contact') }}">Contact Devize Tech Solutions</a>.</p>
        </article>
        <aside class="md:sticky md:top-24 md:self-start"><div class="border border-white/10 bg-[#0b111b] p-5"><p class="text-[9px] font-semibold tracking-[.15em] text-blue-300">LEGAL PAGES</p><nav class="mt-4 grid gap-3 text-xs text-slate-400" aria-label="Legal pages"><a class="hover:text-white" href="{{ route('legal.privacy') }}">Privacy Policy</a><a class="hover:text-white" href="{{ route('legal.terms') }}">Terms &amp; Conditions</a><a class="hover:text-white" href="{{ route('legal.cookies') }}">Cookie Policy</a><a class="hover:text-white" href="{{ route('legal.disclaimer') }}">Disclaimer</a></nav></div></aside>
    </div>
</main>
