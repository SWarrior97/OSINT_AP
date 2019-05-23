<!DOCTYPE html>
<html>
    <head>
        <title>Permissão Negada</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{$message}}</div>
                <a href="{{ URL::previous() }}">Voltar para a página anterior</a>
            </div>
        </div>
    </body>
</html>
