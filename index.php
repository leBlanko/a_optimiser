<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Optimisation</title>

    <!-- Bootstrap -->
    <link href="http://localhost:8888/a_optimiser/min/?f=a_optimiser/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:8888/a_optimiser/min/?f=a_optimiser/css/main.css" rel="stylesheet">

    <!-- jquery -->
    <script src="http://localhost:8888/a_optimiser/min/?f=a_optimiser/js/jquery-1.12.1.min.js"></script>
    <script src="http://localhost:8888/a_optimiser/min/?f=a_optimiser/js/fonctions.js"></script>
    <script src="http://localhost:8888/a_optimiser/min/?f=a_optimiser/js/main.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>

      <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><img src="images/chat.png"></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

<?php

  ob_start("compress");
 function compress( $minify )
    {
  /* remove comments */
      $minify = preg_replace( '!/*[^*]**+([^/][^*]**+)*/!', '', $minify );

        /* remove tabs, spaces, newlines, etc. */
      $minify = str_replace( array("rn", "r", "n", "t", '  ', '    ', '    '), '', $minify );

        return $minify;
    }

    /* css files for combining */
    include('bootstrap.css');
    include('main.css');

ob_end_flush();

?>
