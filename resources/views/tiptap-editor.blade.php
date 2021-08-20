<div x-data="setupEditor('{{ $content }}', {{ json_encode($extensions) }})" x-init="() => init($refs.element)">
	@if($slot->toHtml() !== '')
		{{ $slot }}
	@else
		<x-tiptap-menu />
	@endif
	<div {{ $attributes }} x-ref="element"></div>
	<input type="hidden" name="{{ $attributes['name'] }}" x-model="content" />
</div>
