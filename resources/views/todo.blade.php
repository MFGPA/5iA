<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
</h2>
</x-slot>
    <html>
        <head>
            <script src="https://kit.fontawesome.com/8b5dc63103.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../css/app.css">
            <title>5iA Todo list</title>
        </head>
        <body>
        <div>
            <p>test</p>
            <form method=”post” action=”/todo/create.php”>
                <p>Todo title: </p>
                <input name=”todoTitle” type=”text”>
                <p>Todo description: </p>
                <input name=”todoDescription” type=”text”>
                <br>
                <input type=”submit” name=”submit” value=”submit”>
            </form>
        </div>
        </body>
    </html>
    <?php
    if(isset($_POST['submit'])) {
        $title = $_POST['todoTitle'];
        $description = $_POST['todoDescription'];
        echo "you have filled title " . $title . "<br> and description " . $description;
    }
    ?>
</x-app-layout>
