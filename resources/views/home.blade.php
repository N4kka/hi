<h1>Ciao {{ $name }} {{ $lastname }}, sono una pagina home</h1>

{{-- Se l'utente é loggato, scrivo "sei loggato"
altrimenti scrivo "effettuare login" --}}

@if ($isLoggedIn)
    <p>Sei Loggato</p>
@else
    <p>Effettuare login</p>
@endif