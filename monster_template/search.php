<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search Results</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/search.css"/>

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                            HEADER
  =========================================================-->
    <header class="border-bottom">
        <div class="heading-panel">
            <div class="container">
                <div class="contact-info pull-xs-left">
                    <a href="callto:#">
                        <span class="icon icon-xs icon-primary fa-phone"></span>
                        + 4 (8056)  0000 1756
                    </a>
                </div>
                <ul class="inline-list pull-xs-right">
                    <li><a href="#" class="icon icon-xs icon-default fa-facebook"></a></li>
                    <li><a href="#" class="icon icon-xs icon-default fa-twitter"></a></li>
                    <li><a href="#" class="icon icon-xs icon-default fa-google-plus"></a></li>
                    <li><a href="#" class="icon icon-xs icon-default fa-pinterest"></a></li>
                </ul>
            </div>
        </div>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <nav class="navbar navbar-default navbar-static-top ">

                    <div class="navbar-header">
                        <h1 class="navbar-brand">
                            <a href="./">
                                <span class="navbar-brand__icon fa-paper-plane"></span>
                                Peace
                            </a>
                        </h1>
                    </div>

                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="index-1.html">Company</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Fresh</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">Services</a>
                        </li>
                        <li>
                            <a href="index-3.html">News</a>
                        </li>

                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well-2">
        <div class="container">
            <div class="search-form">
                <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label" for="in">
                        <input id="in" class="search-form_input" type="text" name="s"
                               placeholder="Search"/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit btn btn-primary-variant-1" type="submit">Search</button>
                </form>
            </div>
            <h2 class="border-bottom-sm">Search Results</h2>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  


    <!--========================================================
                            FOOTER
  =========================================================-->
    <footer>

        <section>
            <div class="container">

                <p class="rights">
                    Peace (c) <span id="copyright-year"></span> |
                    <a href="index-5.html">Privacy Policy</a>
                </p>
            </div>
        </section>
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->

</body>
</html>
