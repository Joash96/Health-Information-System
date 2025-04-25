<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request) {
        $query = Client::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', "%{$request->search}%")
                  ->orWhere('phone', 'like', "%{$request->search}%");
        }

        $clients = $query->get();

        return view('clients.index', compact('clients'));
    }

    public function create() {
        return view('clients.create');
    }

    public function store(Request $request) {
        // ✅ Validate request
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'gender'  => 'required|in:Male,Female',
            'email'   => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // ✅ Create client with only the allowed fields
        Client::create($validated);

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }

    public function show(Client $client) {
        return view('clients.show', [
            'client' => $client->load('programs')
        ]);
    }

    public function enroll(Request $request, Client $client) {
        $request->validate([
            'programs' => 'required|array',
            'programs.*' => 'exists:programs,id',
        ]);

        $client->programs()->syncWithoutDetaching($request->programs);

        return redirect()->route('clients.show', $client)->with('success', 'Client enrolled in programs.');
    }
    public function destroy(Client $client)
{
    $client->delete();

    return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
}

}
