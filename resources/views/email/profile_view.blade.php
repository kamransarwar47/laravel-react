<x-mail::message>
# Hi, {{$user->name}}

Someone viewed your profile.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
