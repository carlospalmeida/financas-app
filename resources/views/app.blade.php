<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Finanças App</title>
</head>
<body>
    
    <main>

        <div class="md:columns-2">
            <div class="p-5 bg-sky-300 h-full">
                Navegação
            </div>

            <div class="">
                @yield('conteudo')
            </div>
        </div>
        
        

    </main>


</body>
</html>