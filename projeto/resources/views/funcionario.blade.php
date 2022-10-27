<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Funcionario</title>
</head>
<body>
    <h1> Pagina Funcionário<h1>
    {{ date("d/m/Y") }}
    <hr>
    <p> Olá {{ $nome }} seu salario é {{ $salario}} </p>
    
    @php
        $endereco = "Rua das Goiabas 23";
        $frutas = ["Pitaya","Maracuja","Kiwi","Morango","Abacaxi"];
    @endphp
    {{-- Isso é um comentario usando sintaxe Blade--}}
    @if ($salario <= 1000)
        <p> Voce receberá um bonus de {{ $salario * 0.2}}dinheiros</p>
        
    @else
        <p>Infelizmente voce não pode receber o bonus</p>
        
    @endif
    
    <ul>
        @foreach ($frutas as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>


</body>
</html>