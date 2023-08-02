<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.dashboard', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = new Contact();
        return view('contacts.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        Contact::create($validated);
        session()->flash('Add', 'Added successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $contact->update($validated);
        session()->flash('Edit', 'Modified successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('Delete', 'Deleted successfully');
        return redirect()->route('contacts.index');
    }
}
