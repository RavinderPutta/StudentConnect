<html>
    <head>
        <link relative="stylesheet" href="header.css" type="text/css">
    </head>
    <body>
        <?php
        if(isset($_SESSION['susername']))
        {
            ?>
        <div id="header">
            <div id="middleheader">
                <img src="images/banner.jpg" alt="Banner" width="70%" height="150px">
            </div>
            <div id="leftheader">
                <a href="suserspecforum.php"><img src="images/home.jpg" alt="Home" width="300px" height="150px" float="left"></a>
            </div>
            <div id="rightheader">
                <a href="logout.php"><img src="images/logout.png" alt="Logout" width="300px" height="110px" float="right"></a>
            </div>
        </div>
       <?php 
        }
 elseif (isset($_SESSION['cusername'])) 
 {     
?>
<div id="header">
            <div id="middleheader">
                <img src="images/banner.jpg" alt="Banner" width="70%" height="150px">
            </div>
            <div id="leftheader">
                <a href="cuserspecforum.php"><img src="images/home.jpg" alt="Home" width="300px" height="150px" float="left"></a>
            </div>
            <div id="rightheader">
                <a href="logout.php"><img src="images/logout.png" alt="Logout" width="300px" height="110px" float="right"></a>
            </div>
 </div>
        <?php
 }
        else
        {?>
        <div id="header">
            <div id="middleheader">
                <img src="images/banner.jpg" alt="Banner" width="70%" height="150px">
            </div>
            <div id="leftheader">
                <a href="suserspecforum.php"><img src="images/home.jpg" alt="Home" width="300px" height="150px" float="left"></a>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>