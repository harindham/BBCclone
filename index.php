<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bbcworld</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        body{
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
        #banner{
            float: left;
        }
        #banner a{
            float: left;
            font-size: 90%;
            font-weight: 600;
            padding-top: 10px;
            text-decoration: none;
            color: black;
            height: 28px;
            border-right: 0.2px solid black;
            width: 80px;
            text-align: center;
        }
        div input{
            border: none;
            background-color: lightgray;
            padding-left: 10px;
            padding-top: 4px;
            padding-bottom: 4px;
        }
        #searchbox{
            padding-left: 15px;
            padding-top: 25px;
            position: relative;
            top: 8px;
            width: 500px;
        }
        #header
        {
            background-color: #BB1919;
            height: 80px;
            color: white;
        }
        #header h1 a{
            font-size: 150%;
            position: relative;
            left: 105px;
            top: 10px;
            text-decoration: none;
            color: white;
        }
        #banner a:hover{
            color: red;
        }
        #nav{
            background-color: #BB1919;
            height: 30px;
        }
        #nav a{
            text-decoration: none;
            color: white;
            padding-right: 20px;
            border-right: 1px solid red;
            padding-left: 20px;
            width: 80px;
            text-align: center;
        }
        #nav a:hover{
            text-decoration: underline;
        }
        #maintitle{
            z-index: 0;
            margin-bottom: 40px;
        }
        h3{
            border-bottom: 1px solid brown;
            width: 117px;
            font-weight: 800;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        #slidebar{
            background-color: #BB1919;
            width: 100px;
            height: 2400px;
            float: left;
            border-top: 2px solid white;
            transition: transform 1s;
            position: relative;
            left: -100px;
        }
        .active{
            transform: translate(100px,0px);
        }
        #slidebar ul{
            color: white;
            position: relative;
            left: 0px;
        }
        #slidebar ul li{
            margin-bottom: 14px;
        }

        #main{
            margin: 0px 109px 0px 135px;
            height: 2400px;
            position: relative;
            top: 10px;
            transition: transform 0.25s;
        }
        #main.shift{
            transform: translate(100px,0px);
        }
        #trigger{
            background-color: #BB1919;
            border: 0px;
            color: white;
            transition: transform 1s;
            float: left;
            position: relative;
            top: 1.5px;
            left: -100px;
        }
        #mainb{
            float: left;
            width: 83%;
        }
        #section-1{
            width: 100%;
            height: 300px;
        }
        #section-2{
            margin-top: 8px;
            width: 100%;
            height: 300px;
        }
        #section-3{
            margin-top: 8px;
            width: 100%;
            height: 300px;
        }
        .paddingright{
            margin-right: 0.76%;
        }
        .common-main{
            float: left;
            width: 32.565%;
            height: 300px;
        }
        #video-name{
            font-size: 21px;
            position: relative;
            top: 5px;
        }
        #video-date{
            font-size: 14px;
            color: #808080;
        }
        #mainb-content{
            width: 80%;
            height: 400px;
        }
        #content-1{
            float: left;
            width: 27%;
        }
        #date{
            font-size: 15px;
            position: relative;
            top: -3.5px;
            color: #808080;
            margin-left: 4px;
            padding-right: 12px;
            border-right: 1px solid #BB1919;
        }
        #technology{
            color: #BB1919;
            font-size: 16px;
            position: relative;
            left: 5px;
            top: -5px;
        }
        #mainb-image{
            float: left;
            width: 45%;
        }
        #video-heading{
            font-size: 18px;
            width: 194px;
            height: 70px;
            font-weight: 800;
        }
        #video-heading span{
            border-bottom: 1px solid brown;
        }
        #video-name-sidebar{
            font-size: 12px;
            position: relative;
            top: -6px;
        }
        #video-date-sidebar{
            position: relative;
            top: -18px;
            font-size: 8px;
            color: #808080;
        }
        #sidebar{
            border-left: 1px solid grey;
            padding-left: 17px;
            width: 15%;
            float: right;
        }
        .common-sidebar{
            float: left;
            width: 100%;
        }
        #downbar{
            background-color: lightgray;
            clear: both;
            font-weight: bold;
            padding: 10px;
            height: 120px;
        }
        #title{
            margin: 4px auto 0px auto;
            position: relative;
            left: 1500px;
            color: red;
        }
        #title-content{
            font-size: 20px;
        }
        #title-content a{
            color: blue;
        }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div id="banner">
    <a href="#" style="width: 180px; text-align: right;padding-right: 25px;"><image src="bbc-logo.png" style="position: relative; left: 10px; top: -3px;"></image></a>
    <a href="#" style="width: 180px; text-align: left; padding-left: 20px;"><span style="padding-right: 10px;"><img src="signinimage.png" width="15px"></span>Sign in</a>
    <a href="#">Home</a>
    <a href="#">News</a>
    <a href="#">Sport</a>
    <a href="#">Reel</a>
    <a href="#">Worklife</a>
    <a href="#">Travel</a>
    <a href="#">Future</a>
    <a href="#">Culture</a>
    <a href="#" style="width: 120px; text-align: left; padding-left: 12px;">More<img src="more-arrow.png" style=" width: 15px; margin-left: 37px ;"> </a>
    <span id="searchbox"><input placeholder="search" style="width: 209px;"></span>
    </div><br>
    <div id="header">
        <h1><a href="#">NEWS</a></h1>
    </div>
    <div id="nav">
        <a href="https://www.bbc.com/home" style="width: 145px; text-align: right; float: left; padding-left: 0px;">Home</a>
        <a href="https://www.bbc.com/news/coronavirus">Coronavirus</a>
        <a href="https://www.bbc.com/news/av/10462520">Science</a>
        <a href="https://www.bbc.com/news/world" target="_blank">Video</a>
        <a href="#">World</a>
        <a href="#">Asia</a>
        <a href="#">UK</a>
        <a href="#">Stories</a>
        <a href="file:///C:/Users/hp/Documents/DemoWebsite.html" target="_blank">Entertainment & arts</a>
        <a href="#">Health</a>
        <a href="#">World News Tv</a>
        <a href="#">In Pictures</a>
    </div>
    <!--<div id="title">
        <span id="title-content"><strong>This is a demo website.</strong></span>
    </div>-->
    <div id="slidebar">
        <ul>
            <li>Home</li>
            <li>News</li>
            <li>Latest Update</li>
            <li>Sign in</li>
            <li>Sign up</li>
            
        </ul>
    </div>
    <button id="trigger" style="font-weight: bolder; border: 0px;"> &gt;&gt;</button>
    <div id="main">
        <div id="maintitle">
            <h3>Entertainment</h3> 
        </div>
        <div id="mainb-content">
            <h1>Asda bug exposed payment details</h1>
            <div id="content-1">
                <p style="width: 68%; color: #5a5a5a;">Security vulnerabilities that put customers at risk have affected Asda's website for a couple of years, a security expert has revealed</p>
                <p><img src="clock.png" width="19px"><span id="date">22 May 2021</span><span id="Technology">Technology</span></p><hr style="width: 60px; position:; position: relative; left: -107px; height: 0.2px; background-color: #BB1919;">
                <span><p>Surveillance firm hit in hack attack</p><p>eBay flaw has existed for months</p></span>
            </div>
            <div id="mainb-image">
                <img src="asda.png" width="100%"> 
            </div>
        </div>
        <div id="video-heading"><span>Popular Youtube Videos</span></div>
        <div id="mainb">
            <div id="section-1">
            <div id="video-part1" class="paddingright common-main">    
            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/nfs8NYg7yQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <Span><p><span id="video-name">The Lumineers - Angela</span></p><span id="video-date">54,069,583 views • Sep 13, 2016</Span></Span>
            </div>
            <div id=video-part2 class="paddingright common-main">
            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/q3gnxO8bUxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <Span><p><span id="video-name"><a href="file:///C:/Users/hp/Documents/newpage.html" target="_blank">Harindham,Gregory - If I Go, I'm Going</a></span></p><span id="video-date">21,786,301 views • 15 May, 2021</Span></Span>
            </div>
            <div id=video-part3 class="paddingright common-main">
            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/7BJ7MDOmLPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <Span><p><span id="video-name">Gregory Alan Isakov - San Luis (OFFICIAL VIDEO)</span></p><span id="video-date">8,605,483 views • Oct 18, 2018</Span></Span>
            </div>
            </div>
            <div id="section-2">
                <div id="video-part1" class="paddingright common-main">    
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/1E_2pLa_pg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">The Lumineers - Angela</span></p><span id="video-date">54,069,583 views • Sep 13, 2016</Span></Span>
                </div>
                <div id=video-part2 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/tXsQJhoauxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Gregory Alan Isakov - If I Go, I'm Going</span></p><span id="video-date">17,946,380 views • Feb 2, 2011</Span></Span>
                </div>
                <div id=video-part3 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/8_NBwub3gxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Gregory Alan Isakov - San Luis (OFFICIAL VIDEO)</span></p><span id="video-date">8,605,483 views • Oct 18, 2018</Span></Span>
                </div>
            </div>
            <div id="section-3">
                <div id="video-part1" class="paddingright common-main">    
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/nfs8NYg7yQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">The Lumineers - Angela</span></p><span id="video-date">54,069,583 views • Sep 13, 2016</Span></Span>
                </div>
                <div id=video-part2 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/q3gnxO8bUxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Harindham,Gregory - If I Go, I'm Going</span></p><span id="video-date">17,946,380 views • 15 May, 2021</Span></Span>
                </div>
                <div id=video-part3 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/7BJ7MDOmLPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Gregory Alan Isakov - San Luis (OFFICIAL VIDEO)</span></p><span id="video-date">8,605,483 views • Oct 18, 2018</Span></Span>
                </div>
                </div>
                <div id="section-3">
                <div id="video-part1" class="paddingright common-main">    
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/1E_2pLa_pg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">The Lumineers - Angela</span></p><span id="video-date">54,069,583 views • Sep 13, 2016</Span></Span>
                </div>
                <div id=video-part2 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/tXsQJhoauxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Gregory Alan Isakov - If I Go, I'm Going</span></p><span id="video-date">17,946,380 views • Feb 2, 2011</Span></Span>
                </div>
                <div id=video-part3 class="paddingright common-main">
                <iframe width="100%" height="180px" src="https://www.youtube.com/embed/8_NBwub3gxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name">Gregory Alan Isakov - San Luis (OFFICIAL VIDEO)</span></p><span id="video-date">8,605,483 views • Oct 18, 2018</Span></Span>
                </div>
                </div>     
        </div>
        <div id="sidebar">
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/FAfxTvlq87s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">Love, Rosie - High Hopes</span></p><span id="video-date-sidebar">Dua Lipa</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/8ui9umU0C2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">Manchester Orchestra - The Silence</span></p><span id="video-date-sidebar">Manchestor Orchestra</Span></Span>
                </div>
                <div class="common-sidebar">
                    <iframe width="100%" height="140px" src="https://www.youtube.com/embed/JFSytRgNJIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">cigarettes after sex - apocalypse</span></p><span id="video-date-sidebar">cigarettes after sex</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/nLnp0tpZ0ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">PUBLIC - Make You Mine [Official Video]</span></p><span id="video-date-sidebar">PUBLIC</Span></Span>
                </div>
                <div class="common-sidebar">
                    <iframe width="100%" height="140px" src="https://www.youtube.com/embed/JFSytRgNJIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">cigarettes after sex - apocalypse</span></p><span id="video-date-sidebar">cigarettes after sex</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/nLnp0tpZ0ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">PUBLIC - Make You Mine [Official Video]</span></p><span id="video-date-sidebar">PUBLIC</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/FAfxTvlq87s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">Love, Rosie - High Hopes</span></p><span id="video-date-sidebar">Dua Lipa</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/8ui9umU0C2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">Manchester Orchestra - The Silence</span></p><span id="video-date-sidebar">Manchestor Orchestra</Span></Span>
                </div>
                <div class="common-sidebar">
                <iframe width="100%" height="140px" src="https://www.youtube.com/embed/JFSytRgNJIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <Span><p><span id="video-name-sidebar">cigarettes after sex - apocalypse</span></p><span id="video-date-sidebar">cigarettes after sex</Span></Span>
                </div>
            </div>
        </div>
        <hr style="margin-bottom: 0px; clear: both;">
        <div id="downbar"><span style="float: right;">@bbcofficial</span></div>
        <script type="text/javascript">
            var cnt=0;
            $("#trigger").click(function(){
                $("#main").toggleClass("shift");
                $("#trigger").toggleClass("active");
                $("#slidebar").toggleClass("active");
                if((cnt%2)==0){
              $("#trigger").html("&lt;&lt;");}
              else{
                $("#trigger").html("&gt;&gt;");}
                cnt=cnt+1; 

            });
        
            
        </script>
</body>
</html>
