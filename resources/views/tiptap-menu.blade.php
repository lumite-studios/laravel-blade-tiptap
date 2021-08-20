<div {{ $attributes }}>
	@if($slot->toHtml() !== '')
		{{ $slot }}
	@else
		<!-- bold -->
		<x-tiptap-menu-item action="toggleBold">
			bold
		</x-tiptap-menu-item>
		<!-- italic -->
		<x-tiptap-menu-item action="toggleItalic">
			italic
		</x-tiptap-menu-item>
		<!-- strike -->
		<x-tiptap-menu-item action="toggleStrike">
			strike
		</x-tiptap-menu-item>
	@endif
</div>
