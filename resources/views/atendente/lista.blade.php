<html>
    <head>
        <title>Lista de atendentes</title>
    </head>
    <body>


        @if(isset($cadastro) && $cadastro==true)

            Cadastro realizado com sucesso! <br><br>
            
            
            @endif 
    
        @foreach ($atendentes as $atendente)
            {{ $atendente->nome }}
            <br/>
        @endforeach
    </body> 
</html>