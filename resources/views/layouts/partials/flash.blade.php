@php
    $flashes = [
        'success' => session('success'),
        'error'   => session('error'),
        'warning' => session('warning'),
        'info'    => session('info') ?? session('status'),
    ];
@endphp

<div class="flash-stack" id="flash-stack" aria-live="polite">
    @foreach ($flashes as $type => $message)
        @if ($message)
            <div class="flash flash--{{ $type }}" role="alert">
                <p class="flash__text">{{ $message }}</p>
                <button type="button" class="flash__close" onclick="this.closest('.flash').remove()" aria-label="Fermer le message">&times;</button>
            </div>
        @endif
    @endforeach

    {{--
    @if ($errors->any())
        <div class="flash flash--error" role="alert">
            <div class="flash__text">
                <strong>{{ __('Corrigez les points suivants :') }}</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="flash__close" onclick="this.closest('.flash').remove()" aria-label="Fermer le message">&times;</button>
        </div>
    @endif
    --}}

</div>
