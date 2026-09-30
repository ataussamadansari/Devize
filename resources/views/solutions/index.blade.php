@extends('layouts.master')
@section('title', 'Solutions')
@section('meta_description', 'Explore digital solutions for startups, businesses, education and e-commerce from Devize Tech Solutions.')
@section('content')
<x-static-page eyebrow="SOLUTIONS" title="Technology should solve the right problem." description="Start with the outcome you want. We’ll help shape a solution around your users, your business and the way your team works." cta="Tell us what you need" cta-route="quote" art="abstract-product.svg" :items="[
    ['title' => 'Startup Solutions', 'description' => 'Validate an idea, launch a focused MVP and build a foundation that can evolve.', 'icon' => 'rocket', 'href' => route('solutions.show', 'startup-solutions')],
    ['title' => 'Business Solutions', 'description' => 'Improve operations with connected systems, dashboards and automation.', 'icon' => 'briefcase', 'href' => route('solutions.show', 'business-solutions')],
    ['title' => 'Education Solutions', 'description' => 'Create engaging learning platforms and tools for education providers.', 'icon' => 'book', 'href' => route('solutions.show', 'education-solutions')],
    ['title' => 'E-commerce Solutions', 'description' => 'Build online shopping experiences and connect the systems behind them.', 'icon' => 'cart', 'href' => route('solutions.show', 'ecommerce-solutions')],
    ['title' => 'Custom Solutions', 'description' => 'Solve a specific challenge with software shaped around your organization.', 'icon' => 'puzzle', 'href' => route('solutions.show', 'custom-solutions')],
]" />
@endsection

