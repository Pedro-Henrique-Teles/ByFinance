@extends('layouts.main')
@section('title', 'Testes')
@section('content')

<x-modalContas :bandeiras="$bandeiras" modal-id="cadastroContaModal" button-text="Cadastrar Conta" />

@endsection