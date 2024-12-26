@extends('layouts.main')
@section('title', 'Financeiro')

@section('navbar')
    <x-navbar />
@endsection

@section('content')
    <div class="mt-16 bg-bgCinza relative"> 
        @include('components.messages.flashMessageSuccess')

        <x-headerVisaoGeral />

        <!-- Controle do Modal no canto direito -->
        <div class="absolute top-10 right-4">
            <x-modalControl />
        </div>

        <div class="absolute" style="top: 58px; right: 125px; display: flex; gap: 8px;">
        <x-modalContas :bandeiras="$bandeiras" modal-id="cadastroContaModal" button-text="Cadastrar Conta" />
    </div>
        <br>
        <h1>Olá {{$userName}}</h1>

        <p>Adicione outros elementos aqui.</p>
    </div>
@endsection
