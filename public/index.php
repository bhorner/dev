<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEV</title>

    <!-- Bootstrap -->
	  <link rel="stylesheet" href="css/flexslider.css" />
	  <link rel="stylesheet" href="sass/style.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//use.typekit.net/nnx3foq.js"></script>
	  <script>try{Typekit.load();}catch(e){}</script>
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div id="banner" class="flexslider">
      <ul class="slides">
        <li>
          <img src="http://placehold.it/1920x680" class="img-responsive" />
        </li>
        <li>
          <img src="http://placehold.it/1920x680" class="img-responsive" />
        </li>
        <li>
          <img src="http://placehold.it/1920x680" class="img-responsive" />
        </li>
 
      </ul>
    </div>
    
    <div id="main">
      <div class="container">
        <div class="callout">
          <h1 class="text-center">Congrats this is your Node Project!</h1>
        </div>
        <div class="row">
          <div class="col-sm-4 column">
            <img src="http://placehold.it/400x400" class="img-responsive" />
            <h5>Soitudin Pharetra</h5>
            <h3>Tristique Nullam</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
          </div>
          <div class="col-sm-4 column">
            <img src="http://placehold.it/400x400" class="img-responsive" />
            <h5>Soitudin Pharetra</h5>
            <h3>Tristique Nullam</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
          </div>
          <div class="col-sm-4 column">
            <img src="http://placehold.it/400x400" class="img-responsive" />
            <h5>Soitudin Pharetra</h5>
            <h3>Tristique Nullam</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/dev.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script>
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide"
        });
      }); 
    </script>
  </body>
</html>