@component('inc.switch')
    @slot('id')
        {{ $slot . '-automatic'}}
    @endslot
    Automático:
@endcomponent