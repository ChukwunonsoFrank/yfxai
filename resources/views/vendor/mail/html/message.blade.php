<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
    {{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
    {{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
{{ __('yfxai is a trademark of Yfxai Inc with the registered address at') }} <a href="https://maps.app.goo.gl/1uAg3Jj3NB4TqyU96" target="_blank" rel="noopener noreferrer">2 Av. Jean Jaurès, 92120 Châtillon, France</a>.
<br><br>
© {{ date('Y') }} {{ config('app.name') }} Inc. {{ __('All rights reserved.') }}
<br><br>
<a href="https://yfxai.com" target="_blank" rel="noopener noreferrer">www.yfxai.com</a> | <a href="mailto:support@yfxai.com">support@yfxai.com</a>
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
