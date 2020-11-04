@component('mail::message')

    Przykto nam że spotkały cie nie dogodności jak zmienisz zdanie możesz do nas wrócić

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/register'])
        Link do strony
    @endcomponent

    Dziekuję<br>
    {{ config('app.name') }}
@endcomponent
