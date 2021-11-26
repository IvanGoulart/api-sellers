<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $total->name }}</h1>
    <p>Seu total de vendas em <b>{{Carbon\Carbon::now('PST')->format('d-m-Y')}}</b>
            foi de: <b>R$ {{number_format($total->value, 2, ',', '.')}}</b> </p>

</body>
</html>


<style>
    p {
        font-size: 20px;
    }
</style>
