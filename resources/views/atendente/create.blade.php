<html>
    <head>
        <title>Inserir atendentes</title>
    </head>
    <body>
        
        <table>
    <h1>Inserir novo atendente:</h1>

            <form method="POST" action="{{ route('atendente.criar') }}">
            @csrf
            <tr>
                <td>
                    <input type="text" name="nome" placeholder="Nome do atendente">
                </td>
            </tr>
           <tr>
                <td> 
                    <button type="submit">Enviar </button>
                </td>
                <td>
                    <button type="reset">Limpar </button> 
                </td>

            </form>

        </table>

    
    </body> 
</html>