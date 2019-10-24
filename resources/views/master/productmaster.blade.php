<html>
<head>
    <h2>ini adalah list product<h2>
<head>

<body>

    <h5> {{ $product }}!!</h5>

    <table class="table" border="1">
        <thead>
        <tr>
            <th> Id </th>
            <th> Nama Produk </th>
            <th> Kode </th>
        </tr>
        <thead>
        @foreach ($products as $product)
        <tbody>
        <tr>
            <td>
                <td><h3>{{ $product -> id }}</h3></td>
                <td><h3>{{ $product -> name_product }}</h3></td>
                <td><h3>{{ $product -> kode }}</h3></td>
            </td>
        </tr>
        @endforeach
        </tbody>
        <button type="submit">Delete </button>
    </table>

</body>
</html>