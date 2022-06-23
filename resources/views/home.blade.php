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
    <li>{{ $item['name'] }} {{ $item['lastname'] }} ->first element</li>
@endforeach

@for ($i = 0; $i < 10; $i++)
    <li> {{ $i }}</li>
@endfor
