

<p>Hello {{ $user->name }},</p>
<p>You have received an email from {{ Auth::user()->name }}:</p>
<p>{{ $content }}</p>
