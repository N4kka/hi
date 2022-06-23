<h1>Ciao {{ $name }} {{ $lastname }}, sono una pagina home</h1>

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
    <li>{{ $item['name'] }} {{ $item['lastname'] }}
        @if ($loop->first)
            -> first element
        @endif
    </li>
@endforeach

@for ($i = 0; $i < 10; $i++)
    <li> {{ $i }}</li>
@endfor

{{-- stampare lista studenti se sono presenti studenti, altrimenti scrivo che la lista é vuota --}}

@forelse ($students as $item)
    <li> {{ $item['name'] }} {{ $item['lastname'] }} </li>
@empty
    <p>Non sono presenti studenti</p>
@endforelse
