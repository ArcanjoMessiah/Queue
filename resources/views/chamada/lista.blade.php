<html>
    <head>
        <title>Lista de chamadas</title>
    </head>
    <body>


        @if(isset($cadastro) && $cadastro==true)

            Cadastro realizado com sucesso! <br><br>

            
            @endif 
    
        @foreach ($chamadas as $chamada)
            {{ $chamada->origem }}
        
            <br/>
        @endforeach
        
    </body> 
</html>