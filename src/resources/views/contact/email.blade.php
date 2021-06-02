@component('mail::message')
# Introduction

There is new email from {{$name}}

Email : {{$email}}

Message :

{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
