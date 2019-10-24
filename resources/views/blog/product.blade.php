

<h2>ini adalah list product<h2>
<hr>
<h5> {{ $product }}!!</h5>
<table>
@foreach ($products as $product)
    <h3>{{ $product -> id }}</h3>
    <h3>{{ $product -> name_product }}</h3>
    <h3>{{ $product -> kode }}</h3>
</table>
@endforeach