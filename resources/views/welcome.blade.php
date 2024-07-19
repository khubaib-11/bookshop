<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .avatar {
                width: 40px;
                height : 40px;
            }

            .icon {
                width: 24px;
                height: 24px;
            }
            
        </style>
    </head>
    <body>
        <nav>
            <img src="{{ asset('avatar.png') }}" alt="" class="avatar" >
            <h3>Khubaib</h3>
            <x-lucide-search class="icon"/>
        </nav>
      
    </body>
</html>
