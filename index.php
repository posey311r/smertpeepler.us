<html>
<head>
<title>Smerty Pie</title>
</head>
<body>
<style>
.yeller {
    animation-name: turn_yeller;
    animation-duration: 300ms;
    animation-direction: alternate;
    animation-iteration-count: infinite;
}

@keyframes turn_yeller {
    from {color: black;}
    to {color: yellow;}
}

#the_hate_maker {
    color: white;
    position: absolute;
    top: 2%;
    font-size: 150px;
    width: 1000px;
    animation-name: make_hate;
    animation-delay: 3s;
    animation-duration: 200ms;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-direction: alerternate;
}

@keyframes make_hate {
    from {color: white;}
    to {color:red;}
}

</style>
<h1>
<span class=yeller>We're</span>
<marquee width=22 direction=up scrollamount=6>A</marquee><marquee width=15 direction=up scrollamount=7>r</marquee><marquee width=15 direction=up scrollamount=8>e</marquee> 
<marquee width=100 direction=down><marquee behavior=alternate>Smert!</marquee>
</marquee></h1>

<marquee loop><p>Are you smert?<br><marquee direction="up" scrolldelay="61" truespeed="300" loop>Do you like marquee tags?</marquee></marquee>
<marquee direction="right" scrolldelay="500"> Well smert peepler us!</p></marquee>

<div id="the_hate_maker">SMERT!!!</div>
<p>
<br>
<a href="home.php">-ENTER-</a>
</p>

</body>
</html>

