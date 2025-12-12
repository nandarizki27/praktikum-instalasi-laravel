@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


    <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h1 style="color: #667eea; margin-bottom: 20px;">Welcome to Laravel Dashboard!</h1>
        
        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
            Selamat datang di praktikum instalasi Laravel. Ini adalah halaman dashboard sederhana 
            yang menggunakan Blade Template Engine.
        </p>

        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 30px;">
            <h3 style="color: #333; margin-bottom: 15px;">📚 Informasi Praktikum:</h3>
            <ul style="list-style: none; padding: 0;">
                <li style="padding: 10px 0; border-bottom: 1px solid #ddd;">
                    <strong>Laravel Version:</strong> {{ app()->version() }}
                </li>
                <li style="padding: 10px 0; border-bottom: 1px solid #ddd;">
                    <strong>PHP Version:</strong> {{ PHP_VERSION }}
                </li>
                <li style="padding: 10px 0;">
                    <strong>Mahasiswa:</strong> NANDA RIZKI RAMADHAN - G.211.23.0025
                </li>
            </ul>
        </div>
    </div>
@endsection