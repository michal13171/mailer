@component('mail::message')

    Przykto nam że spotkały cie nie dogodności jak zmienisz zdanie możesz do nas wrócić

    @component('mail::button', ['url' => '/register'])
        Strona do aktywacji i dezaktywacji maila
    @endcomponent

    Dziekuję<br>
    {{ config('app.name') }}
@endcomponent
