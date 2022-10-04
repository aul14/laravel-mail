@component('mail::message')
    # Introduction

    Saya sedang belajar mengirim email dengan laravel.

    @component('mail::button', ['url' => $data['url']])
        Visit
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
