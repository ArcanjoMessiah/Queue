<html>

<head>
    <title>Lista de Atendimentos</title>
</head>

<body>





    @foreach ($atendimentos as $atendimento)
    {{ $atendimento->created_at }} <a href="/atendimento/atualizar/{{ $atendimento->id }}"'>Finalizar atendimento </a>



    <br />
    @endforeach

</body>

</html>