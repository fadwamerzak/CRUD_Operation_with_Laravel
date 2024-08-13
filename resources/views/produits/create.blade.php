@extends('layout.layout')
@section('content')

    <div class="card">
        <div class="card-header">Page des produits</div>
        <div class="card-body">

            <form action="{{ url('produit') }}" method="post">
                {!! csrf_field() !!}
                <label>Title</label></br>
                <input type="text" name="title" id="title" class="form-control"></br>
                <label>Description</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Price</label></br>
                <input type="number" name="price" id="price" class="form-control"></br>
                <label>Quantite</label></br>
                <input type="number" name="quantite" id="quantite" class="form-control"></br>
                <label>Fournisseur</label></br>
                <input type="text" name="fournisseur" id="fournisseur" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
