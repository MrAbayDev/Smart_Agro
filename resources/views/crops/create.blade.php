@extends('layouts.app')

@section('content')
    <h1>Yangi ekin qo'shish</h1>
    <form action="{{ route('crops.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Ekin nomi:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="type">Ekin turi:</label>
            <select id="type" name="type">
                <option value="grain">Don</option>
                <option value="vegetable">Sabzavot</option>
                <option value="fruit">Meva</option>
            </select>
        </div>
        <div>
            <label for="planting_date">Ekish sanasi:</label>
            <input type="date" id="planting_date" name="planting_date">
        </div>
        <button type="submit">Saqlash</button>
    </form>
@endsection
