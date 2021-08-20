import Alpine from 'alpinejs'
import { Editor } from '@tiptap/core'

import StarterKit from '@tiptap/starter-kit'
import { Color } from '@tiptap/extension-color'
import TextStyle from '@tiptap/extension-text-style'
import Underline from '@tiptap/extension-underline'

const importedExtensions = {
	'starter-kit': StarterKit,
	'extension-color': Color,
	'extension-text-style': TextStyle,
	'extension-underline': Underline,
}

window.setupEditor = function(content, extensionNames) {
	const extensions = extensionNames.map((item) => {
		return importedExtensions[item]
	})

	return (() => {
	  let _editor;

	  return {
		editor: () => _editor,
		proxy: null,
		content,
		init(element) {
		  _editor = new Editor({
			element: element,
			extensions,
			content: this.content,
			onUpdate: ({ editor }) => {
			  this.content = editor.getHTML();
			}
		  });
		  this.proxy = _editor;
		}
	  };
	})();
};

window.Alpine = Alpine
Alpine.start()
