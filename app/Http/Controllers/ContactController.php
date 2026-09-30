<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:40'],
            'company' => ['nullable', 'string', 'max:160'],
            'service' => ['required', 'in:Web Development,Mobile App Development,Custom Software,UI/UX Design,Cloud & Backend,Digital Solutions,Other'],
            'budget' => ['nullable', 'string', 'max:80'],
            'timeline' => ['nullable', 'string', 'max:80'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Contact::create($validated + ['status' => 'new']);

        $message = 'Thanks! Your message has been received. We’ll get back to you soon.';

        if ($request->expectsJson()) {
            return response()->json(['message' => $message], 201);
        }

        return to_route('contact')->with('success', $message);
    }
}
