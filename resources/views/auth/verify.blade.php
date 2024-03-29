@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите вашу электронную почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                    {{ __('Если вы не получили письмо с подтверждением') }}, <a href="{{ route('verification.resend') }}">{{ __('нажмите здесь, чтобы отправить заново') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
