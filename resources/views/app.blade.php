<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Test for Cor">
    <meta name="author" content="Luis A. Rivas">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Alphabet soup - Test for Projectcor</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap.css') !!}

    <!-- Custom styles for this template -->
    {!! Html::style('css/starter-app-template.css') !!}
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo and text -->
          <a class="navbar-brand" href="#">
            <img src="img/logo-alphabet-soup.svg" id="logo" alt="">
            
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container"> 
        <div class="centeri">
            <h1>Alphabeth Soup</h1>
            <h2>Handling a simple word search in a simple alphabet soup.</h2>
            <p class="lead">
            <h5>Select a matrix from matrices's panel, after enter a word 
            to search in a matrix selected, to see how many times the word appears 
            in the matrix (occurrence)
            </h5>
            </p>
        </div>
    </div><!-- /.container -->
    
    @yield('content')
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
  </body>
</html>
