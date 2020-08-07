@component('mail::message')

Olá Glavieira, 

Você recebeu um contato de {{ $name }}

Assunto : {{ $subject }}

Mensagem:

{{ $message }}

-------------
Contato:

Email: {{ $email }} <br>
Telefone: {{ $number }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
