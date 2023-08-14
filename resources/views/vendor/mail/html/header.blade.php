@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="./img/180x180.png" class="logo" alt="WMPCCA Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
