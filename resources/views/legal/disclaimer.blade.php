@extends('layouts.master')
@section('title', 'Disclaimer')
@section('meta_description', 'Draft disclaimer about DTS website content, blog information, third-party links and project descriptions.')
@section('content')
<x-legal-document title="Disclaimer" description="A draft notice about the general information published on the Devize Tech Solutions website." :sections="[
    ['title' => 'Website content', 'body' => 'Website content is provided for general information and may change. DTS should review descriptions regularly and correct information that is incomplete or no longer current.'],
    ['title' => 'Blog and information', 'body' => 'Articles and other information are general educational material. They are not legal, financial, security or other professional advice and should not replace advice based on your specific circumstances.'],
    ['title' => 'Third-party links and services', 'body' => 'Links and embedded resources may be provided by third parties. DTS does not control their content, availability or privacy practices. Review the relevant provider information before using an external service.'],
    ['title' => 'Services and project information', 'body' => 'Service descriptions are general and do not promise a specific outcome. Portfolio items currently shown as concepts are illustrative; they should not be read as verified client results, endorsements or production deployments. Project scope and outcomes depend on the relevant written agreement and circumstances.'],
]" />
@endsection
