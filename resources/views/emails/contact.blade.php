@component('mail::message')
    Son Nom :

    {{ $information['name'] }}

    Son email :

    {{ $information['email'] }}

    Le message :

    {{ $information['message'] }}

@endcomponent
