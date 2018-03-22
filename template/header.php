<?php 
//langeage file 
if(isset($_GET['ln']) && $_GET['ln']=='ar'){
    include_once 'langage/ar.php';
}else if(isset($_GET['ln']) && $_GET['ln']=='en'){
    include_once 'langage/en.php' ;
}else{
     include_once 'langage/en.php' ;
}
?>
<!DOCTYPE html>
<html lang="en" dir="<?php echo langfunc('dir') ; ?>">

<head>
    <title><?php echo langfunc('siteTitle') ; ?></title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="upper-bar">
    <a href="?ln=ar" <?php if($_GET['ln']=='ar'){ echo 'class="active"';}else{ echo 'class="unactiv"';} ?> >ARABE</a>
    <a href="?ln=en" <?php if($_GET['ln']=='en'){ echo 'class="active"';}else{ echo 'class="unactiv armarg"';} ?>>anglish</a>
</div>

<div class="banner" id="home">
    <div class="container">
        <!-- header -->
        <header>

            <div class="header-bottom-agileits">
                <div class="w3-logo">
                    <h1><a href="index.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('siteTitle') ; ?><span class="sub-logo"><?php echo langfunc('siteTitle') ; ?></span></a></h1>
                </div>
                <!-- navigation -->
                <nav class="navbar navbar-default shift">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="quali.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('aq') ; ?></a></li>
                            <li><a href="hhhh.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('pe') ; ?></a></li>
                            <li><a href="courses.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('cc') ; ?></a></li>
                            <li><a href="skills.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('sk') ; ?></a></li>
                            <li><a href="pub.php?<?php if(isset($_GET['ln']) && $_GET['ln']=='ar'){echo 'ln=ar';}else{ echo 'ln=en';}?>"><?php echo langfunc('pub') ; ?></a></li>
                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->

                </nav>
            </div>
            <div class="clearfix"></div>
            <!-- //navigation -->
        </header>
        <!-- //header -->
        <div class="banner-text-w3-agileits">
            <h5>Hi, I'm</h5>
            <h2><span>A</span>kil <span>A</span>labri</h2>
            <p><?php echo langfunc('discri') ; ?></p>
            <div class="botton">
                <a href="#about" class="scroll"><?php echo langfunc('about') ; ?> <span class="fa fa-caret-right"></span></a>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
