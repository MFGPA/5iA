<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <head>
        <script src="https://kit.fontawesome.com/8b5dc63103.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
            <div class="ButtonTodolist">
                <a href="{{ route('todo') }}"><i class="far fa-list-alt fa-10x"></i></a>
            </div>
    </body>


</x-app-layout>
