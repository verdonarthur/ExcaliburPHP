<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title ?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular-resource.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular-route.js"></script>

        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <?php html::include_css_file('main.css'); ?>
    </head>
    <body>
        <header style='background-color: #428bca'>
            <div style="height: 100px;">
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="menu-collapse">
                        <ul class="nav navbar-nav">
                            <li></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="row" style="width: 100%;min-height: 720px">
            <div class="col-md-1"></div>
            <div class='col-md-9'>
                <div class='container-fluid'>
                    <?php echo $content; ?>
                </div>
            </div>           
            <div class="col-md-2">
                <div class='container-fluid'>
                    <?php echo $menu; ?>
                </div>    
            </div> 
        </div>
        <footer style="height: 50px" >
            <div class="container" style='color:white'>
            </div>
        </footer>
    </body>
</html>

