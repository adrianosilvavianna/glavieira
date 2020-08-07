@component('mail::message')

Olá, <br>

Você recebeu um Contato Rápido, 
<br>
Segue dados:<br>

E-MAIL: {{ $email }}
<br>
Telefone: {{ $number }}

<br>
Obrigado.
@endcomponent
