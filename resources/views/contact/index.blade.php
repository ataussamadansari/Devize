@extends('layouts.master')
@section('title', 'Contact Us')
@section('meta_description', 'Talk with Devize Tech Solutions about your project, business idea or technical challenge.')
@section('content')
<main>
    <section class="relative isolate overflow-hidden border-b border-white/10 bg-gradient-to-br from-[#0c1524] via-[#080d16] to-[#080b11]">
        <div class="dot-field pointer-events-none absolute inset-0 -z-10 opacity-30"></div>
        <div class="pointer-events-none absolute -right-16 -top-20 -z-10 h-80 w-80 rounded-full bg-blue-600/15 blur-[100px]"></div>
        <div class="mx-auto grid min-h-[330px] w-[min(1180px,calc(100%-40px))] items-center gap-5 py-12 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[1.15fr_.85fr] md:py-14">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[10px] font-semibold tracking-[.16em] text-blue-300"><span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> GET IN TOUCH</span>
                <h1 class="mt-4 font-display text-4xl font-semibold leading-[1.06] tracking-[-.065em] text-white sm:text-5xl md:text-6xl">Let's Build Something <span class="text-blue-300">Great Together.</span></h1>
                <p class="mt-4 max-w-xl text-sm leading-7 text-slate-300/80">Have a project, business idea, or technical challenge? Tell us what you're building and our team will get back to you.</p>
            </div>
            <img class="mx-auto w-full max-w-[360px] drop-shadow-[0_24px_48px_#0008]" src="{{ asset('images/abstract-product.svg') }}" alt="Abstract digital technology illustration" width="640" height="520" fetchpriority="high">
        </div>
    </section>

    <section id="contact-form" class="mx-auto grid w-[min(1180px,calc(100%-40px))] items-start gap-6 py-10 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.78fr_1.22fr] md:gap-8 md:py-14" aria-labelledby="form-title">
        <aside class="space-y-5">
            <div class="rounded-xl border border-white/10 bg-gradient-to-br from-[#0c1523] to-[#080d15] p-5 sm:p-6">
                <span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">CONTACT DETAILS</span>
                <h2 class="mt-2 font-display text-xl font-medium text-white">Reach the DTS team.</h2>
                <div class="mt-5 divide-y divide-white/10">
                    <div class="flex gap-3 py-4"><x-icon name="file" class="mt-0.5 h-4 w-4 shrink-0 text-blue-300"/><div><p class="text-[10px] text-slate-500">Email</p><a class="mt-1 inline-block break-all text-xs text-slate-200 hover:text-blue-200" href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a></div></div>
                    @if ($contactInfo['phone'])<div class="flex gap-3 py-4"><x-icon name="phone" class="mt-0.5 h-4 w-4 shrink-0 text-blue-300"/><div><p class="text-[10px] text-slate-500">Phone</p><a class="mt-1 inline-block text-xs text-slate-200 hover:text-blue-200" href="tel:{{ preg_replace('/[^+0-9]/', '', $contactInfo['phone']) }}">{{ $contactInfo['phone'] }}</a></div></div>@endif
                    <div class="flex gap-3 py-4"><x-icon name="route" class="mt-0.5 h-4 w-4 shrink-0 text-blue-300"/><div><p class="text-[10px] text-slate-500">Location</p><p class="mt-1 text-xs leading-5 text-slate-200">{{ $contactInfo['location'] ?: 'Based in India - Serving clients worldwide' }}</p></div></div>
                    <div class="flex gap-3 py-4"><x-icon name="people" class="mt-0.5 h-4 w-4 shrink-0 text-blue-300"/><div><p class="text-[10px] text-slate-500">Business hours</p><p class="mt-1 text-xs leading-5 text-slate-200">{{ $contactInfo['hours'] }}</p></div></div>
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[.025] p-5 sm:p-6">
                <span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">WHY DTS</span>
                <div class="mt-4 grid gap-3 sm:grid-cols-2 md:grid-cols-1">
                    @foreach (['Clear communication','Custom solutions','Transparent process','Long-term technical support'] as $reason)
                        <p class="flex items-center gap-2 text-xs text-slate-300"><span class="text-blue-300">&#10003;</span>{{ $reason }}</p>
                    @endforeach
                </div>
            </div>
        </aside>

        <section class="rounded-xl border border-white/10 bg-[#0b111b] p-5 sm:p-7" aria-labelledby="form-title">
            <div class="mb-6"><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">START A CONVERSATION</span><h2 id="form-title" class="mt-2 font-display text-2xl font-medium text-white">Tell us what you have in mind.</h2><p class="mt-2 text-xs text-slate-400">A few details will help us prepare for the conversation.</p></div>
            @if (session('success'))<div role="status" class="mb-5 rounded-md border border-emerald-300/20 bg-emerald-300/[.06] px-4 py-3 text-xs leading-5 text-emerald-200">{{ session('success') }}</div>@endif
            <div data-form-feedback hidden role="status" aria-live="polite" class="mb-5 rounded-md border px-4 py-3 text-xs leading-5"></div>
            @if ($errors->any())<div role="alert" class="mb-5 rounded-md border border-rose-300/20 bg-rose-300/[.06] px-4 py-3 text-xs leading-5 text-rose-200">Please check the highlighted fields and try again.</div>@endif
            <form action="{{ route('contact.store') }}" method="POST" class="grid gap-4 sm:grid-cols-2" data-ajax-form>
                @csrf
                <label class="form-field">Full name *<input name="name" autocomplete="name" required maxlength="120" value="{{ old('name') }}" placeholder="Your name" @error('name') aria-invalid="true" @enderror>@error('name')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Email address *<input type="email" name="email" autocomplete="email" required maxlength="255" value="{{ old('email') }}" placeholder="you@company.com" @error('email') aria-invalid="true" @enderror>@error('email')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Phone number<input type="tel" name="phone" autocomplete="tel" maxlength="40" value="{{ old('phone') }}" placeholder="Optional" @error('phone') aria-invalid="true" @enderror>@error('phone')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Company / organization<input name="company" autocomplete="organization" maxlength="160" value="{{ old('company') }}" placeholder="Optional" @error('company') aria-invalid="true" @enderror>@error('company')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Service interested in *<select name="service" required @error('service') aria-invalid="true" @enderror><option value="" disabled @selected(! old('service'))>Choose a service</option>@foreach (['Web Development','Mobile App Development','Custom Software','UI/UX Design','Cloud & Backend','Digital Solutions','Other'] as $service)<option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>@endforeach</select>@error('service')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <label class="form-field">Budget range<select name="budget"><option value="" @selected(! old('budget'))>Not sure yet</option>@foreach (['Under $5,000','$5,000 - $15,000','$15,000 - $50,000','$50,000+'] as $budget)<option value="{{ $budget }}" @selected(old('budget') === $budget)>{{ $budget }}</option>@endforeach</select></label>
                <label class="form-field sm:col-span-2">Project timeline<select name="timeline"><option value="" @selected(! old('timeline'))>Not decided yet</option>@foreach (['As soon as possible','Within 1 month','1-3 months','3-6 months','Flexible'] as $timeline)<option value="{{ $timeline }}" @selected(old('timeline') === $timeline)>{{ $timeline }}</option>@endforeach</select></label>
                <label class="form-field sm:col-span-2">Message *<textarea name="message" rows="4" required maxlength="5000" placeholder="What are you hoping to build or solve?" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>@error('message')<span class="text-[10px] text-rose-300">{{ $message }}</span>@enderror</label>
                <div class="sm:col-span-2"><button class="inline-flex min-h-11 w-full items-center justify-center gap-3 rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400 sm:w-auto" type="submit">Send message <x-icon name="arrow" class="h-4 w-4"/></button><p class="mt-3 text-[10px] leading-5 text-slate-500">Your enquiry is saved for the DTS team to follow up.</p></div>
            </form>
        </section>
    </section>

    <section class="border-y border-white/10 bg-[#080c13]" aria-labelledby="map-title">
        <div class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-6 py-10 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.65fr_1.35fr] md:items-center md:py-12">
            <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">BASED IN INDIA</span><h2 id="map-title" class="mt-2 font-display text-2xl font-medium text-white">Varanasi, Uttar Pradesh</h2><p class="mt-2 text-xs leading-6 text-slate-400">Serving clients worldwide. The map shows the city area, not a specific office address.</p><a href="https://www.google.com/maps/search/?api=1&amp;query={{ rawurlencode($contactInfo['location'] ?: 'Varanasi, Uttar Pradesh, India') }}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center gap-2 text-xs font-medium text-blue-200 hover:text-white">Open in Google Maps <x-icon name="arrow" class="h-4 w-4"/></a></div>
            <div class="overflow-hidden rounded-lg border border-white/10 bg-[#0b111b]"><iframe title="Map of {{ $contactInfo['location'] ?: 'Varanasi, Uttar Pradesh, India' }}" src="https://maps.google.com/maps?q={{ rawurlencode($contactInfo['location'] ?: 'Varanasi, Uttar Pradesh, India') }}&amp;z=12&amp;output=embed" width="100%" height="260" style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
        </div>
    </section>

    <section class="mx-auto grid w-[min(1180px,calc(100%-40px))] gap-8 py-12 md:w-[min(1180px,calc(100%-64px))] md:grid-cols-[.7fr_1.3fr] md:py-16" aria-labelledby="faq-title">
        <div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">GOOD QUESTIONS</span><h2 id="faq-title" class="mt-2 font-display text-2xl font-medium text-white">Before you reach out.</h2><p class="mt-2 text-xs leading-6 text-slate-400">Still unsure? Send us a note through the form.</p><a href="{{ route('quote') }}" class="mt-5 inline-flex items-center gap-2 text-xs font-semibold text-blue-200 hover:text-white">Request a project quote <x-icon name="arrow" class="h-4 w-4"/></a></div>
        <div class="divide-y divide-white/10 border-y border-white/10">
            @foreach ([['How do I start a project with DTS?','Send a short outline using the form. We will review your goals and follow up with a suitable next step.'],['What information should I provide?','A description of the challenge, who the product is for, and any timing or budget details you know are a helpful start.'],['Do you work with startups?','Yes. We work with startups as well as businesses and organizations.'],['Do you provide maintenance?','We can discuss ongoing maintenance and improvements based on your product needs.'],['How long does a project take?','Timing depends on the scope and requirements. We can discuss an estimate after learning more.'],['Do you work with international clients?','Yes. We work with clients in India and around the world.']] as $faq)
                <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-xs font-medium text-slate-200 [&::-webkit-details-marker]:hidden">{{ $faq[0] }}<span class="text-lg font-normal text-blue-300 transition group-open:rotate-45">+</span></summary><p class="max-w-2xl pt-3 pr-8 text-xs leading-6 text-slate-400">{{ $faq[1] }}</p></details>
            @endforeach
        </div>
    </section>

    <section class="border-t border-white/10 bg-gradient-to-r from-[#0c1524] via-[#101b30] to-[#0b1422]">
        <div class="mx-auto flex w-[min(1180px,calc(100%-40px))] flex-col justify-between gap-5 py-10 md:w-[min(1180px,calc(100%-64px))] md:flex-row md:items-center md:py-12"><div><span class="text-[9px] font-semibold tracking-[.16em] text-blue-300">HAVE A PROJECT IN MIND?</span><h2 class="mt-2 font-display text-xl font-medium text-white">Share your requirements. We'll help with the next steps.</h2></div><a href="{{ route('quote') }}" class="inline-flex min-h-11 items-center gap-3 self-start rounded-md bg-blue-500 px-5 text-xs font-semibold text-white transition hover:bg-blue-400 md:self-auto">Request a quote <x-icon name="arrow" class="h-4 w-4"/></a></div>
    </section>
</main>
@endsection
