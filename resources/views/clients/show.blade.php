@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $client->name }} - {{ $client->phone }}</h3>
    <p>Gender: {{ $client->gender }}</p>

    <h4>Programs Enrolled</h4>
    <ul>
        @forelse($client->programs as $program)
            <li>{{ $program->name }}</li>
        @empty
            <li>Not enrolled yet.</li>
        @endforelse
    </ul>

    <form action="{{ route('clients.enroll', $client->id) }}" method="POST">
        @csrf
        <label>Select programs</label><br>
        @foreach($programs as $program)
            <input type="checkbox" name="programs[]" value="{{ $program->id }}"> {{ $program->name }}<br>
        @endforeach
        <button class="btn btn-primary mt-2">Enroll</button>
    </form>
</div>
@endsection
