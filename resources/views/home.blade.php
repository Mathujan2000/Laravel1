<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub - Your Source for Gaming News</title>
    @vite('resources/css/style.css')
</head>
<body>
    <header>
        <h1>Welcome to GameHub</h1>
        <p>Your Source for Gaming News</p>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="new-releases">
    <h2>New Releases</h2>
    @foreach($games as $game)
    <div class="game">
        <img id="img" src="fotos/<?= $game['naamGame']?>.jpg" alt="imgclass">
            <h2>{{ $game->naamGame }}</h2>
            <p>Release Date: {{ $game->releaseDate }}</p>
        <form method="POST" action="{{ route('update', $game->id) }}">
            @csrf
            @method('PUT')
            <button type="submit" class="button">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                </svg>
                <span class="sr-only">Like</span>
            </button>
        </form>
        <span class="like-count">{{ $game->likes }}</span>
        <form method="POST" action="{{ route('destroy',$game->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                <span class="sr-only">Delete</span>
            </button>
        </form>
    </div>
    @endforeach
</section>

    <section id="upcoming-games">
        <h2>Upcoming Games</h2>
        @foreach($upcominggames as $upcoming)
            <div class="game">
                <img id="img" src="fotos/{{ $upcoming->nameUpcoming }}.jpg" alt="imgclass">
                <h2>{{ $upcoming->nameUpcoming }}</h2>
                <p>Release Date: {{ $upcoming->upcomingDate }}</p>
                <form method="POST" action="{{ route('update', $upcoming->id) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="button">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                        </svg>
                        <span class="sr-only">Like</span>
                    </button>
                </form>
                <span class="like-count">{{ $upcoming->likes }}</span>
                <form method="POST" action="{{ route('destroy',$upcoming->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        <span class="sr-only">Delete</span>
                    </button>
                </form>
            </div>
        @endforeach
    </section>
    <footer>
        <p>&copy; 2023 GameHub</p>
    </footer>
</body>
</html>
