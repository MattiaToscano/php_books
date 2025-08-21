@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Libreria</h1>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Casa editrice</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Genere</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Pagine</th>
                    <th scope="col">Disponibile</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Prestato a</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                    <tr @if(!$book->disponibile) class="table-danger" @endif>
                        <td>{{ $book->titolo }}</td>
                        <td>{{ $book->autore }}</td>
                        <td>{{ $book->casa_editrice }}</td>
                        <td>{{ $book->anno_pubblicazione }}</td>
                        <td>{{ $book->genere }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->numero_pagine }}</td>
                        <td>
                            <span class="badge bg-{{ $book->disponibile ? 'success' : 'danger' }}">
                                {{ $book->disponibile ? 'Sì' : 'No' }}
                            </span>
                        </td>
                        <td>{{ ucfirst($book->stato) }}</td>
                        <td>{{ $book->prestato_a }}</td>
                    </tr>
                @empty
                    <tr><td colspan="10">Nessun libro presente.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection