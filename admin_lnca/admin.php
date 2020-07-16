<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Submit</title>
  
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='http://cdn.quilljs.com/1.3.6/quill.snow.css'>


  <style type="text/css">
  	#editor-container {
	  height: 350px;
	}
  </style>

  
</head>

<body>

	<div id="form-container" class="container">
	  <form action="proceso_agregar.php" method="POST" enctype="multipart/form-data">

	  	<h1>ADMIN PANEL:</h1> <br><br>
			      		
		<input type="file" id="imagen" name="imagen"> <br>
		<input type="text" id="titulo" name="titulo" placeholder="Titulo"> <br><br>
		<textarea id="descripcion" name="descripcion" placeholder="Descripcion"></textarea> <br><br><br>

	    <div class="row form-group">
	      <label for="about">CONTENIDO:</label>
	      <input name="about" type="hidden">
	      <div id="editor-container" name="contenido"></div>
	    </div>
	    <div class="row">
	      <input type="submit" name="Insertar" value="Insertar">
	    </div>
	  </form>
	</div>


	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='http://cdn.quilljs.com/1.3.6/quill.js'></script>

  

	<!-- Initialize Quill editor -->
	<script>

		var toolbarOptions = [
		  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		  ['blockquote', 'code-block'],

		  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
		  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
		  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
		  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
		  [{ 'direction': 'rtl' }],                         // text direction

		  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
		  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

		  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		  [{ 'font': [] }],
		  [{ 'align': [] }],                                      // remove formatting button

		  ['link', 'image', 'video']

		];

	  	var quill = new Quill('#editor-container', {

	  		modules: {
	  			toolbar: toolbarOptions
	  		},

	  		placeholder: 'Aquí va el contenido del articulo:',
	    	theme: 'snow'
	  	});

	</script>



</body>

</html>
