@extends('layout.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('produit/' .$produits->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$produits->id}}" id="id"/>
                <label>Title</label></br>
                <input type="text" name="title" id="title" value="{{$produits->title}}" class="form-control"></br>
                <label>Description</label></br>
                <input type="text" name="description" id="description" value="{{$produits->description}}"
                       class="form-control"></br>
                <label>Price</label></br>
                <input type="number" name="price" id="price" value="{{$produits->price}}" class="form-control"></br>
                <label>Quantite</label></br>
                <input type="number" name="quantite" id="quantite" value="{{$produits->quantite}}"
                       class="form-control"></br>
                <label>Fournisseur</label></br>
                <input type="text" name="fournisseur" id="fournisseur" value="{{$produits->fournisseur}}"
                       class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
