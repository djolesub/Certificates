<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 596px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav" id="nav">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">My Courses</a></li>
                <li id="li1"><a href="#">Maps and Geospatile Revolution</a></li>
                <li id="li2"><a href="#">The Data Scientist’s Toolbox</a></li>
                <li id="li3"><a href="#">JavaScript Fundamentals</a></li>
                <li id="li4"><a href="#">Django in the Real World</a></li>
                <li id="li5"><a href="#">Developing Websites Using Python and Django</a></li>
                <li id="li6"><a href="#">JavaScript forExperienced Developers</a></li>
            </ul><br>
        </div>

        <main class="col-sm-9">
            <iframe id="myFrame" style="display:none" height="600"></iframe>
        </main>
    </div>
</div>
<footer class="container-fluid">

    <p class="col-md-4">Author: Djordje Subotic</p>
    <p class="col-md-4"><a href="mailto:djolesub@gmail.com">Send mail</a></p>
    <p class="col-md-4"><a href="https://github.com/djolesub">My Github</a></p>

</footer>
<script>
    var iframeWidth = $(window).innerWidth() - $("#nav").innerWidth();
    $("#myFrame").width(iframeWidth);
    /*var headerHeight = $(window).innerHeight();*/

    $("#li1").on("click",function(e){
        e.prevendDefault;
        openPdf("six");
    });
    $("#li2").on("click",function(e){
        e.prevendDefault;
        openPdf("fift");
    });
    $("#li3").on("click",function(e){
        e.prevendDefault;
        openPdf("four");
    });
    $("#li4").on("click",function(e){
        e.prevendDefault;
        openPdf("three");
    });
    $("#li5").on("click",function(e){
        e.prevendDefault;
        openPdf("two");
    });
    $("#li6").on("click",function(e){
        e.prevendDefault;
        openPdf("one");
    });


    function openPdf(num) {
        var omyFrame = $("#myFrame");
        omyFrame.css({"display": "inline"});
        var file = num + ".pdf";
        omyFrame.attr("src", file);
    }

</script>
</body>
</html>



