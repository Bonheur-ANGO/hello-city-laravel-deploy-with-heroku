<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello City</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <p>Built with &hearts; by Bonheur ANGO</p>
    <p> <a href="/">Revenir à la page d'accueil</a> </p>



    <footer>
        <p>&copy; Copyrights {{ date('Y') }}</p>
    </footer>
</body>

</html>