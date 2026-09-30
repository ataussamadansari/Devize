@extends('layouts.master')
@section('title', 'Privacy Policy')
@section('meta_description', 'Draft privacy information about data submitted through Devize Tech Solutions website forms and related services.')
@section('content')
<x-legal-document title="Privacy Policy" description="This draft explains information that may be processed when you use the DTS website and submit a contact or project quote request." :sections="[
    ['title' => 'Information we collect', 'body' => 'When you submit the contact form, the site requests your name, email address, selected service and message, with phone and company as optional fields. Quote requests also ask for project details and preferred contact method; budget and timeline are optional. Do not submit sensitive personal information through these forms.'],
    ['title' => 'Contact and quote form data', 'body' => 'Contact enquiries are stored in the contacts table and quote requests are stored separately in the quotes table, each with a new status when submitted. The current application does not provide a public account or enquiry dashboard. DTS must confirm who can access these records and how long they are retained.'],
    ['title' => 'Cookies and session data', 'body' => 'The Laravel application may use session and CSRF cookies to support secure form submissions and normal website operation. The exact cookie names and settings depend on the deployed environment. See the Cookie Policy draft for more information.'],
    ['title' => 'Analytics', 'body' => 'No analytics provider was found in the current application code. If analytics or advertising tools are enabled in deployment, this section should be updated to name them and explain what data they collect.'],
    ['title' => 'Storage and security', 'body' => 'Form records are stored in the application database configured for the deployment. Appropriate access controls, backups, retention and security practices must be confirmed for the production environment; no system can guarantee absolute security.'],
    ['title' => 'Third-party services', 'body' => 'The site loads fonts from Bunny Fonts and embeds a Google Maps view on the Contact page. When those resources load, the providers may receive technical request information from your browser and may process it under their own policies. Confirm the providers and settings used in production.'],
    ['title' => 'Your choices and rights', 'body' => 'Depending on your location, you may have rights to access, correct or request deletion of personal information. Applicable rights, response timelines and any exceptions depend on the laws that apply to DTS and should be confirmed before publication.'],
    ['title' => 'Contact information', 'body' => 'For questions about information submitted through this site, email '.config('contact.email').'. DTS should confirm the responsible privacy contact and any required legal entity details.'],
]" />
@endsection
