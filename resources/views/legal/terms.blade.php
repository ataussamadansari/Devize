@extends('layouts.master')
@section('title', 'Terms & Conditions')
@section('meta_description', 'Draft terms for use of the Devize Tech Solutions website and information about project agreements.')
@section('content')
<x-legal-document title="Terms & Conditions" description="This is a working outline for website use and DTS services. A final version should be reviewed against actual DTS contracts and governing law." :sections="[
    ['title' => 'Website use', 'body' => 'Use this website lawfully and do not attempt to disrupt its operation, gain unauthorized access or misuse its content. These draft terms should be completed with any specific rules DTS intends to apply.'],
    ['title' => 'Services', 'body' => 'The site describes software development, design and related digital services for general information. A service description on this website is not, by itself, a binding offer or a guarantee of a particular result.'],
    ['title' => 'Project agreements and payments', 'body' => 'Project scope, deliverables, schedule, fees, payment milestones, expenses, change requests and acceptance should be set out in a separate written agreement before work begins. No payment terms are established by this draft.'],
    ['title' => 'Intellectual property', 'body' => 'Ownership and permitted use of project deliverables, pre-existing materials, third-party components and licenses should be defined in the applicable project agreement. Do not rely on this draft to determine ownership.'],
    ['title' => 'Client responsibilities', 'body' => 'Project agreements should identify client responsibilities, including timely feedback, access, content, approvals and confirmation that supplied materials may lawfully be used.'],
    ['title' => 'Liability', 'body' => 'Any warranties, exclusions, liability limits, indemnities and remedies must be drafted for the actual services and reviewed under the applicable law. This placeholder does not set a legal limit.'],
    ['title' => 'Termination', 'body' => 'A project agreement should explain how either party may end an engagement, notice requirements, outstanding payments, handover and treatment of work completed up to termination.'],
    ['title' => 'Governing law and changes', 'body' => 'The governing jurisdiction and dispute process have not been confirmed in this draft. DTS should add the correct legal entity, location, effective date and process for updating these terms after legal review.'],
]" />
@endsection
