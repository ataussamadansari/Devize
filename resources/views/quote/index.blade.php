@extends('layouts.master')
@section('title', 'Request a Quote')
@section('meta_description', 'Share your project requirements with Devize Tech Solutions and get a clear next step.')
@section('content')
<main>
    {{-- Plain full-width hero, without a card --}}
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div>
        <div class="pointer-events-none absolute -right-16 -top-16 -z-10 h-72 w-72 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[310px] w-[min(1180px,calc(100%-40px))] items-center gap-5 py-10 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.1fr_.9fr] md:py-12">
            <div class="max-w-2xl"><span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> PROJECT INQUIRY</span><h1 class="mt-4 font-display text-4xl font-semibold leading-[1.06] tracking-[-.06em] text-white sm:text-5xl md:text-6xl">Let's make a clear plan for <span class="text-blue-300">your idea.</span></h1><p class="mt-4 max-w-xl text-sm leading-7 text-slate-300/80">Tell us what you want to build, what you know so far, and what a good outcome looks like. We will help you map the next step.</p></div>
            <img src="{{ asset('images/abstract-product.svg') }}" alt="Abstract digital product planning illustration" width="640" height="520" class="mx-auto w-full max-w-[330px] drop-shadow-[0_24px_48px_#0008]" fetchpriority="high">
        </div>
    </section>

    <section class="mx-auto grid w-[min(1120px,calc(100%-40px))] items-start gap-7 py-10 md:w-[min(1120px,calc(100%-64px))] md:grid-cols-[.72fr_1.28fr] md:gap-10 md:py-14">
        <aside class="space-y-5 md:sticky md:top-24">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">A GOOD PLACE TO START</span><h2 class="mt-2 font-display text-2xl font-medium leading-tight text-white">Start with the details you already have.</h2><p class="mt-3 text-xs leading-6 text-slate-400">A rough outline is enough. We can clarify requirements, scope and options together.</p></div>
            <div class="divide-y divide-white/10 border-y border-white/10">
                @foreach ([['01','Your goals','What should this product help you or your customers do?'],['02','Your requirements','Share the features, audience or systems you have in mind.'],['03','Your next step','We will review your inquiry and follow up to discuss it.']] as $step)
                    <article class="grid grid-cols-[30px_1fr] gap-3 py-4"><span class="font-display text-[10px] text-blue-300">{{ $step[0] }}</span><div><h3 class="text-xs font-medium text-slate-200">{{ $step[1] }}</h3><p class="mt-1 text-[10px] leading-5 text-slate-500">{{ $step[2] }}</p></div></article>
                @endforeach
            </div>
            <p class="text-[10px] leading-5 text-slate-500">Prefer a quick conversation? Email <a class="text-blue-200 hover:text-white" href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>.</p>
        </aside>

        <section class="rounded-xl border border-white/10 bg-[#0b111b] p-5 sm:p-7 md:p-8" aria-labelledby="quote-form-title">
            <div class="mb-6"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">REQUEST A QUOTE</span><h2 id="quote-form-title" class="mt-2 font-display text-2xl font-medium text-white">Project details</h2><p class="mt-2 text-xs text-slate-400">Fields marked * are required.</p></div>
            @if (session('success'))<div role="status" class="mb-5 rounded-md border border-emerald-300/20 bg-emerald-300/[.06] px-4 py-3 text-xs leading-5 text-emerald-200">{{ session('success') }}</div>@endif
            <div data-form-feedback hidden role="status" aria-live="polite" class="mb-5 rounded-md border px-4 py-3 text-xs leading-5"></div>
            @if ($errors->any())<div role="alert" class="mb-5 rounded-md border border-rose-300/20 bg-rose-300/[.06] px-4 py-3 text-xs leading-5 text-rose-200">Please check the highlighted fields and try again.</div>@endif
            <form action="{{ route('quote.store') }}" method="POST" class="grid gap-4 sm:grid-cols-2" data-ajax-form>
                @csrf
                <label class="form-field">Full name *<input name="name" autocomplete="name" required maxlength="120" value="{{ old('name') }}" placeholder="Your name" @error('name') aria-invalid="true" @enderror>@error('name')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Email address *<input type="email" name="email" autocomplete="email" required maxlength="255" value="{{ old('email') }}" placeholder="you@company.com" @error('email') aria-invalid="true" @enderror>@error('email')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Phone number<input type="tel" name="phone" autocomplete="tel" maxlength="40" value="{{ old('phone') }}" placeholder="Optional" @error('phone') aria-invalid="true" @enderror>@error('phone')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Company / organization<input name="company" autocomplete="organization" maxlength="160" value="{{ old('company') }}" placeholder="Optional" @error('company') aria-invalid="true" @enderror>@error('company')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Service needed *<select name="service" required @error('service') aria-invalid="true" @enderror><option value="" disabled @selected(! old('service'))>Choose a service</option>@foreach (['Web Development','Mobile App Development','Custom Software','UI/UX Design','Cloud & Backend','Digital Solutions','Other'] as $service)<option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>@endforeach</select>@error('service')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Estimated budget<select name="budget"><option value="Not sure yet" @selected(old('budget', 'Not sure yet') === 'Not sure yet')>Not sure yet</option>@foreach (['Under $5,000','$5,000 - $15,000','$15,000 - $50,000','$50,000+'] as $budget)<option value="{{ $budget }}" @selected(old('budget') === $budget)>{{ $budget }}</option>@endforeach</select></label>
                <label class="form-field">Project timeline<select name="timeline"><option value="" @selected(! old('timeline'))>Choose a timeline</option>@foreach (['As soon as possible','Within 1 month','1-3 months','3-6 months','Flexible'] as $timeline)<option value="{{ $timeline }}" @selected(old('timeline') === $timeline)>{{ $timeline }}</option>@endforeach</select></label>
                <label class="form-field">Preferred contact method *<select name="preferred_contact" required>@foreach (['Email','Phone','Video call'] as $method)<option value="{{ $method }}" @selected(old('preferred_contact', 'Email') === $method)>{{ $method }}</option>@endforeach</select></label>
                <label class="form-field sm:col-span-2">Project requirements *<span class="font-normal text-slate-500">What do you want to build or improve?</span><textarea name="details" rows="5" required maxlength="5000" placeholder="Tell us about your goals, audience, key features, or any constraints..." @error('details') aria-invalid="true" @enderror>{{ old('details') }}</textarea>@error('details')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <div class="sm:col-span-2"><button class="inline-flex min-h-11 w-full items-center justify-center gap-3 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400 sm:w-auto" type="submit">Send quote request <x-icon name="arrow" class="h-4 w-4"/></button><p class="mt-3 text-[10px] leading-5 text-slate-500">Your project details are stored for the DTS team to review.</p></div>
            </form>
        </section>
    </section>
</main>
@endsection
