@extends('layout.layout')
@section('content')


    <div class="card">
        <div class="card-header">Produits Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Title : {{ $produits->title }}</h5>
                <p class="card-text">Description : {{ $produits->description }}</p>
                <p class="card-text">Price : {{ $produits->price }}</p>
                <p class="card-text">Quantite : {{ $produits->quantite }}</p>
                <p class="card-text">Fournisseur : {{ $produits->fournisseur }}</p>
            </div>

            </hr>

        </div>
    </div>
