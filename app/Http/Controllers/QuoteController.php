<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuoteController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:40'],
            'company' => ['nullable', 'string', 'max:160'],
            'service' => ['required', 'in:Web Development,Mobile App Development,Custom Software,UI/UX Design,Cloud & Backend,Digital Solutions,Other'],
            'budget' => ['nullable', Rule::in(['Under $5,000', '$5,000 - $15,000', '$15,000 - $50,000', '$50,000+', 'Not sure yet'])],
            'timeline' => ['nullable', Rule::in(['As soon as possible', 'Within 1 month', '1-3 months', '3-6 months', 'Flexible'])],
            'details' => ['required', 'string', 'max:5000'],
            'preferred_contact' => ['required', 'in:Email,Phone,Video call'],
        ]);

        Quote::create($validated + ['status' => 'new']);

        $message = 'Thanks! Your quote request has been received. We will be in touch soon.';

        if ($request->expectsJson()) {
            return response()->json(['message' => $message], 201);
        }

        return to_route('quote')->with('success', $message);
    }
}
