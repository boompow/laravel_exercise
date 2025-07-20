<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Home</title>
    @vite("resources/css/app.css")
</head>
<body>
    <header>
        <nav >
            <a href="/">Ninja Network</a>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create New Ninja</a>
        </nav>
    </header>
    <main >
        {{$slot}}
    </main>
</body>
</html>