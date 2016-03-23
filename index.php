<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter Search Restful API | Question 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function searchKey()
        {            
            var keyword = document.getElementById("keyword").value;            
            var xhttp = new XMLHttpRequest();            
            
            xhttp.onreadystatechange = function() {
               
                if (xhttp.readyState == 4 && xhttp.status == 200) {    
                        document.getElementById("tweet_data").innerHTML = xhttp.responseText;                        
                }
            };
            xhttp.open("GET", "getTweets.php?keyword="+keyword, true);
            xhttp.send();            
        }
    </script>
    
</head>
<body ng-app="">

<div class="container">

<div class="page-header">
    <h1>Browntape <small>Twitter Search Restful API</small></h1>
</div>

<!-- Search Navbar - START -->
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Enter Keyword</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>                    
                </ul>
            </li>
        </ul>-->
<div class="pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" ng-model="keyword" id="keyword"  size="120" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" onclick="searchKey()"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div> 

    </div>
</nav>
    

<div class="col-sm-9" id="tweet_data">     
       
        
    </div>

<!-- Search Navbar - END -->

</div>

</body>
</html>