<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TinyEditor - JavaScript WYSIWYG Editor</title>
<link rel="stylesheet" href="">
{{HTML::style('tinyeditor/tinyeditor.css')}}
{{HTML::script('tinymce/tinymce.min.js')}}

<script>
        tinymce.init({selector:'textarea'});
</script>
</head>
<body>
<textarea>Your content here.</textarea>

{{Form::Open(array('action'=>'ArticuloController@store','role'=>'form','files'=> true))}}
{{Form::label('titulo','Titulo')}}
{{Form::text('titulo','',$attributes = array('class'=>'form-control','placeholder'=>'Titulo'))}}
{{Form::label('description','description')}}

{{Form::textarea('description','',$attributes = array('id'=>'tinyeditor','style'=>'width: 400px; height: 200px'))}}

<script>
var editor = new TINY.editor.edit('editor', {
	id: 'tinyeditor',
	width: 584,
	height: 175,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
		'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
		'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
	footer: true,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
	footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	resize: {cssclass: 'resize'}
});
</script>

{{Form::button('Crear Nuevo', array('type'=>'submit','class'=>'btn btn-primary'))}}
{{Form::close()}}     
                
</body>
</html>