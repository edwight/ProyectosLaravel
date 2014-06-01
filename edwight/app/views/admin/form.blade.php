<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    {{HTML::style('css/bootstrap.css')}}
     <!-- FONTAWESOME STYLES-->
     {{HTML::style('css/font-awesome.css')}}
        <!-- CUSTOM STYLES-->
     {{HTML::style('css/custom.css')}}
     <!-- GOOGLE FONTS-->
    {{HTML::script('tinymce/tinymce.min.js')}}
    <!-- EDITOR TYNYMCE -->
    <script>
        tinymce.init({selector:'textarea'});
    </script>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a   href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           formulario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Nuevo Articulo</h3>
                                    {{Form::Open(array('action'=>'ArticuloController@store','role'=>'form','files'=> true))}}
                                        <div class="form-group">
                                        {{Form::label('titulo','Titulo')}}
                                        {{Form::text('titulo','',$attributes = array('class'=>'form-control','placeholder'=>'Titulo'))}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::label('leyenda','Leyenda')}}
                                        {{Form::textarea('leyenda','',$attributes = array('class'=>'form-control','rows'=>'4'))}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::label('description','description')}}
                                        {{Form::textarea('description','',$attributes = array('class'=>'form-control','rows'=>'4'))}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::label('categoria','categoria')}}
                                        {{Form::text('etiquetas','',$attributes = array('class'=>'form-control','placeholder'=>'Categoria'))}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::file('imagen' ,$attributes = array('title'=>'imagen','data-filename-placement'=>'inside'))}}
                                        </div>
                                      
                                        {{Form::button('Crear Nuevo', array('type'=>'submit','class'=>'btn btn-primary'))}}
                                    {{Form::close()}}
                                
                                    <br />
                              
                                 </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    {{HTML::script('js/jquery-1.10.2.js')}}
      <!-- BOOTSTRAP SCRIPTS -->
    {{HTML::script('js/bootstrap.min.js')}}
    <!-- METISMENU SCRIPTS -->
    {{HTML::script('js/jquery.metisMenu.js')}}
      <!-- CUSTOM SCRIPTS -->
    {{HTML::script('js/custom.js')}}
    <!-- FILE BOOTSTRAP -->
   
 {{HTML::script('js/bootstrap.file-input.js')}}
    <script type="text/javascript">
        //Calling Bootstrap File Input
        $('input[type=file]').bootstrapFileInput();
        $('.file-inputs').bootstrapFileInput();
    </script>
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
   
</body>
</html>
