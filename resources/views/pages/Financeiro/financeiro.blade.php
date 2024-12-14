@extends('layouts.main')
@section('title', 'Financeiro')

@section('navbar')
    <x-navbar />
@endsection

    @section('content')
    
    <div class="mt-16"> <!-- Ajuste o espaçamento aqui -->
        @include('components.messages.flashMessageSuccess')
        <h1>Página de Financeiro</h1>
    </div>
@endsection
