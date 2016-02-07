<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Argos Hot UK Deals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            padding-top: 70px;
        }
        
        img {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
            <div class="navbar-header">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Argos Deals</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="" target="_blank">Home</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron" id="acontent">

        </div>
        <div class="row">


            <div class="row">
                <div class="col-xs-12">
                    <footer>
                        <p>&copy; Usama Chohan</p>
                    </footer>
                </div>
            </div>
        </div>
</body>

</html>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script language="Javascript">
    $(document).ready(function() {




        $.ajax({
            url: "https://w1467702.users.ecs.westminster.ac.uk/Argos/index.php/welcome/json_api",
            method: 'GET',
            dataType: 'JSON',
            scriptCharset: "utf-8"


        }).done(function(data) {
            $("#acontent").empty();
            $.each(data.deals.items, function(index, value) {

                $rest = value.deal_image.substr(-13);
                $n = $rest.slice(0, 7);
                $url = " http://www.hotukdeals.com/visit?m=5&q=xxxxxxx";
                $argos_url = $url.replace("xxxxxxx", $n);


                $("#acontent").append('<a href="' + $argos_url + '"<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-globe"></span> Argos Link </button></a>' + '       <a href="' + value.deal_link + '"<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-list-alt"></span> HUKD Link </button></a>');
                $("#acontent").append("<h3><b>" + value.temperature + "&deg </b>" + value.title + "</h3><br>" + '<img src="' + value.deal_image_highres + '" alt="Product" style="width:150px;height:150px;"><br><br>' + value.description + "<hr>");

            });




        });




    });
</script>