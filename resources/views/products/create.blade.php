<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input name="name" placeholder="Nom">
    <input name="price" placeholder="Prix">
    <input name="quantity" placeholder="Quantité">
    <button>Save</button>
</form>
