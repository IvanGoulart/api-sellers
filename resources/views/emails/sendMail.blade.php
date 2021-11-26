<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $total->name }}</h1>
    <p>Seu total de vendas em {{Carbon\Carbon::now('PST')->format('d-m-Y i')}} foi de: R$ {{number_format($total->value, 2, ',', '.')}}</p>

</body>
</html>


<style>
    p {
        font-size: 20px;
    }
</style>