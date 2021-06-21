<html>
    <head>
        <title>Inserir atendentes</title>
    </head>
    <body>
        
        <table>
    <h1>Inserir novo atendente:</h1>

            <form method="POST" action="{{ route('chamada.criar') }}">
            @csrf
            <tr>
                <td>
                    <select name="origem" placeholder=""> 
                    <option value="whatsapp">Wathsapp</option>
                    <option value="chat">Chat</option>
                    
                    </select>
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