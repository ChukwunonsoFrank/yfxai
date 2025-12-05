@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Moxyai')
                <img width="120" src="{{ asset('wp-content/uploads/2023/05/moxyai-logo-blue.png') }}" alt="Moxyai Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
