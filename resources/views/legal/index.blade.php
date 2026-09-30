@extends('layouts.master')
@section('title', 'Legal Information')
@section('meta_description', 'Review draft privacy, terms, cookie and disclaimer information for Devize Tech Solutions.')
@section('content')
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]"><div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div><div class="mx-auto w-[min(1180px,calc(100%-40px))] py-14 md:w-[min(1180px,calc(100%-64px))] md:py-16"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">POLICIES &amp; INFORMATION</span><h1 class="mt-4 font-display text-4xl font-semibold tracking-[-.06em] text-white sm:text-5xl md:text-6xl">Legal information.</h1><p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300/80">Review how this website works, how information is handled and the terms that apply to its use.</p></div></section>
    <section class="mx-auto w-[min(1180px,calc(100%-40px))] py-10 md:w-[min(1180px,calc(100%-64px))] md:py-14" aria-label="Legal pages">
        <div class="mb-6 border border-amber-300/20 bg-amber-300/[.04] p-4"><p class="text-[10px] font-semibold tracking-[.12em] text-amber-200">DRAFTS FOR REVIEW</p><p class="mt-2 text-xs leading-6 text-slate-400">These pages are working drafts. DTS should verify actual business practices, governing jurisdiction and final terms before publication.</p></div>
        <div class="grid gap-3 sm:grid-cols-2">
            @foreach ([['Privacy Policy','Data collected through contact and quote forms, cookies, analytics, storage and user choices.','shield','legal.privacy'],['Terms & Conditions','Website use, services, project agreements, payments, responsibilities and liability.','file','legal.terms'],['Cookie Policy','Essential cookies, analytics, third-party embeds and browser controls.','settings','legal.cookies'],['Disclaimer','Website and blog information, third-party links and project descriptions.','grid','legal.disclaimer']] as $index => $item)
                <a href="{{ route($item[3]) }}" class="group flex min-h-[150px] items-start gap-4 border border-white/10 bg-[#0a101a] p-5 transition hover:border-blue-300/25 md:p-6"><span class="grid h-10 w-10 shrink-0 place-items-center border border-blue-300/20 bg-blue-400/[.06] text-blue-300"><x-icon :name="$item[2]" class="h-5 w-5"/></span><span><span class="text-[9px] tracking-widest text-slate-600">0{{ $index + 1 }}</span><h2 class="mt-1 font-display text-lg font-medium text-white">{{ $item[0] }}</h2><p class="mt-2 text-xs leading-5 text-slate-400">{{ $item[1] }}</p><span class="mt-3 inline-flex items-center gap-2 text-[10px] font-semibold text-blue-200">Read draft <x-icon name="arrow" class="h-3.5 w-3.5 transition group-hover:translate-x-1"/></span></span></a>
            @endforeach
        </div>
    </section>
</main>
@endsection
