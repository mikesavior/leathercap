<?php get_header();	?>
  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/navbar-fixed-top/#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Home</a></li>
            <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#about">About</a></li>
            <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#contact">Contact</a></li>
            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/navbar-fixed-top/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Action</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Another action</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Separated link</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://getbootstrap.com/examples/navbar/">Default</a></li>
            <li><a href="http://getbootstrap.com/examples/navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./index_files/index.php">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<?php get_footer();	?>