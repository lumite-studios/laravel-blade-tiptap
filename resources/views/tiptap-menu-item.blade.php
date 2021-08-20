<button {{ $attributes }} @click.prevent="editor().chain().focus().{{ $action }}({{ json_encode($parameters) }}).run()">
	{{ $slot }}
</button>
