<h1>Produits</h1>

<a href="{{ route('products.create') }}">Ajouter</a>

@foreach($products as $product)
    <p>{{ $product->name }} - {{ $product->price }} DT</p>
@endforeach
