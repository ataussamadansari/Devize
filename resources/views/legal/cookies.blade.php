@extends('layouts.master')
@section('title', 'Cookie Policy')
@section('meta_description', 'Draft information about essential cookies and third-party resources used by the DTS website.')
@section('content')
<x-legal-document title="Cookie Policy" description="This draft describes cookies and similar technologies relevant to the current DTS website implementation. Verify the production configuration before publication." :sections="[
    ['title' => 'What cookies are', 'body' => 'Cookies are small pieces of information stored by a browser. Similar technologies can store or access information to support website features, security or measurement.'],
    ['title' => 'Essential cookies', 'body' => 'The Laravel application may use a session cookie and a CSRF token cookie to support sessions and protect form requests. The exact names, lifetime and security settings are configured per deployment. Blocking these cookies may affect form or session behavior.'],
    ['title' => 'Analytics cookies', 'body' => 'No analytics tool was identified in the current application code. If analytics is added, identify the provider, cookie names, purposes, retention and any consent mechanism here.'],
    ['title' => 'Third-party resources', 'body' => 'The Contact page embeds Google Maps, and the site requests fonts from Bunny Fonts. These resources are provided by third parties and may process technical request data. Their behavior and any cookies should be checked against the production setup and provider policies.'],
    ['title' => 'Managing cookies', 'body' => 'You can use browser settings to review, block or delete cookies. Blocking essential cookies may prevent some website features from working. The current website does not include a dedicated cookie preference panel; assess whether one is required for the jurisdictions and services involved.'],
]" />
@endsection
