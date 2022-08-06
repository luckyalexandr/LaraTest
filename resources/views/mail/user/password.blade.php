@component('mail::message')
# Introduction

The body of your message.

Your password: {{ $password }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
