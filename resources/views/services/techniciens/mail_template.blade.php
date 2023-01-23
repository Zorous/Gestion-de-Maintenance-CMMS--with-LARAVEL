@component('mail::message')

<h1>Subject :  {{ $subject }}</h1>
<h2>{{ $urmessage }}</h2>
@component('mail::button' , ['url' => "https://www.google.com"])
Click here
@endcomponent



@endcomponent