<button {{ $attributes }} @click.prevent="Alpine.raw(editor).chain().focus().{{ $action }}({{ json_encode($parameters) }}).run()">
	{{ $slot }}
</button>
