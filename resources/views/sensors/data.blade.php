@extends('layouts.app')

@section('content')
    <h1>Sensor ma'lumotlari</h1>
    <form action="{{ route('sensors.store') }}" method="POST">
        @csrf
        <div>
            <label for="sensor_id">Sensor:</label>
            <select id="sensor_id" name="sensor_id" required>
                @foreach($sensors as $sensor)
                    <option value="{{ $sensor->id }}">{{ $sensor->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="temperature">Harorat (°C):</label>
            <input type="number" id="temperature" name="temperature" step="0.1" required>
        </div>
        <div>
            <label for="humidity">Namlik (%):</label>
            <input type="number" id="humidity" name="humidity" step="0.1" required>
        </div>
        <div>
            <label for="soil_moisture">Tuproq namligi (%):</label>
            <input type="number" id="soil_moisture" name="soil_moisture" step="0.1" required>
        </div>
        <button type="submit">Ma'lumotlarni saqlash</button>
    </form>
@endsection
