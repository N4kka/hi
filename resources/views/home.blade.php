<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
        <ul>
            <li>
                <a href=" {{ route('about') }} ">About</a>
            </li>
        </ul>
    </header>
</body>

</html>


<h1>Ciao {{ $name }} {{ $lastname }}, sono una pagina home</h1>
<img src="https://i.pinimg.com/736x/08/4c/95/084c951c772a87eb599724411b34f2a5.jpg" alt="">

{{-- Se l'utente é loggato, scrivo "sei loggato"
altrimenti scrivo "effettuare login" --}}

@if ($isLoggedIn)
    <p>Sei Loggato</p>
@else
    <p>Effettuare login</p>
@endif

{{-- stampare lista studenti --}}

@foreach ($students as $item)
    {{-- aggiungo la frase solo se é il primo elemento --}}
    <li style="list-style: none">{{ $item['name'] }} {{ $item['lastname'] }}
        @if ($loop->first)
            -> first element
        @endif
    </li>
@endforeach

@for ($i = 0; $i < 10; $i++)
    <li style="list-style:circle"> {{ $i }}</li>
@endfor

{{-- stampare lista studenti se sono presenti studenti, altrimenti scrivo che la lista é vuota --}}

@forelse ($students as $item)
    <li style="list-style: none"> {{ $item['name'] }} {{ $item['lastname'] }} </li>
@empty
    <p>Non sono presenti studenti</p>
@endforelse
