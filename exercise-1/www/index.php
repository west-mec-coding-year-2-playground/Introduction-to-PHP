<?php
/*
* Configuration Variables
*/ 
  $PORT = 8000;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        LAMP STACK
                    </h1>
                    <h2 class="subtitle">
                        Your local development environment
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
          <div class="container">
              <h3 class="title is-3 has-text-centered">Exercises</h3>
              <div class="container is-fluid">
              <ul class="has-text-centered">
                <li><a href="/">Getting started with PHP</a></li>
                <li><a href="/">Functions and control structures</a></li>
                <li><a href="/">Manipulating strings</a></li>
                <li><a href="/">Handling user input</a></li>
                <li><a href="/">Working with files and directories</a></li>
                <li><a href="/">Manipulating arrays</a></li>
              </ul>
              </div>
          </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect("mysql", "root", "password", null);
                                    /* check connection */
                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="http://localhost:8000/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:8080">phpMyAdmin</a></li>
                                <li><a href="http://localhost:8000/test_db.php">Test DB Connection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>



