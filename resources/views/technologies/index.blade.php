@extends('layouts.master')
@section('title', 'Technologies')
@section('meta_description', 'Technologies available across Devize Tech Solutions web, mobile, backend, database, cloud and DevOps work.')
@section('content')
<x-static-page eyebrow="OUR TOOLKIT" title="The right tools for a product that lasts." description="We select technology to fit the product, the team and the problem. The technologies below are examples from the PRD and should be confirmed against DTS’s current delivery capabilities before publication." cta="Discuss your stack" cta-route="quote" :items="[
    ['title' => 'Frontend', 'description' => 'React · Next.js · HTML · CSS · JavaScript · TypeScript', 'icon' => 'code'],
    ['title' => 'Mobile', 'description' => 'Flutter · React Native · Kotlin · Java · Jetpack Compose', 'icon' => 'phone'],
    ['title' => 'Backend', 'description' => 'Laravel · Node.js · Express · PHP', 'icon' => 'settings'],
    ['title' => 'Database', 'description' => 'PostgreSQL · MySQL · MongoDB · Redis', 'icon' => 'layers'],
    ['title' => 'Cloud', 'description' => 'AWS · Google Cloud · Firebase · Supabase · Cloudflare', 'icon' => 'cloud'],
    ['title' => 'DevOps', 'description' => 'Docker · GitHub · CI/CD · Linux · Nginx', 'icon' => 'route'],
]" />
@endsection

