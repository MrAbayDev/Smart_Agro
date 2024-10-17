@extends('layouts.app')

@section('content')
    <h1>Yangi ferma qo'shish</h1>
    <form action="{{ route('farms.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Ferma nomi:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="location">Manzil:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div>
            <label for="size">Maydoni (gektar):</label>
            <input type="number" id="size" name="size" step="0.01" required>
        </div>
        <button type="submit">Saqlash</button>
    </form>
@endsection
