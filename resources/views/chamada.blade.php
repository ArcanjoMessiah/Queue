<html>
    <head>
        <title>Lista de chamadas</title>
    </head>
    <body>

    
        @foreach ($chamadas as $chamada)
            {{ $chamada->origem }}
            <br/>
        @endforeach
    </body> 
</html>

