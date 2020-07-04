<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditWord</title>
    <style>
        body{
            display: flex;
            flex: 1;
            justify-content: center;
        }
        form{
            background-color: #cccccc;
            padding: 10px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <Form action="/assinatura/data" method="POST"  enctype="multipart/form-data">
        @csrf
        <div id="input">
            <label for="arquivo">Selecione o documento word</label><br>
            <input type="file" name="word" id="word">
        </div>
        <div>
            <label for="arquivo">Selecione a assinatura</label><br>
            <input type="file" name="image" id="arquivo">
        </div>
        <div>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome">
        </div>
        <input type="submit" value="ENVIAR">
    </Form>
</body>
</html>