

<h2>ini adalah list Order<h2>
<hr>
<h5> {{ $orders }}!!</h5>

@foreach($salesorders as $salesorder)
    <h4> {{ $salesorder -> id }} </h4>
    <h4> {{ $salesorder -> username }} </h4>
    <h4> {{ $salesorder -> email }} </h4>
    <h4> {{ $salesorder -> password }} </h4>
    <h4> {{ $salesorder -> no_telp }} </h4>
    <h4> {{ $salesorder -> productorder }} </h4>
    <h4> {{ $salesorder -> kodeproduct }} </h4>
@endforeach