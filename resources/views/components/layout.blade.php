<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Home</title>
    @vite("resources/css/app.css")
</head>
<body>
    @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 text-bold">
        {{session('success')}}
    </div>
    @endif
    <header>
        <nav >
            <a href="/">Ninja Network</a>
            <a href="{{route("ninjas.index")}}">All Ninjas</a>
            <a href="{{route("ninjas.create")}}">Create New Ninja</a>
        </nav>
    </header>
    <main class="md:px-[4rem] md:py-4">
        {{$slot}}
    </main>
</body>
</html>