<?php
include("include/header.php");
?>
<script type="text/javascript" src="slideshow.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        slideShow();
    });

    function slideShow() {
        //Set the opacity of all images to 0
        $('#gallery a').css({opacity: 0.0});

        //Get the first image and display it (set it to full opacity)
        $('#gallery a:first').css({opacity: 1.0});

        //Set the caption background to semi-transparent
        $('#gallery .caption').css({opacity: 0.5});

        //Resize the width of the caption according to the image width
        $('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});

        //Get the caption of the first image from REL attribute and display it
        $('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
            .animate({opacity: 0.7}, 3000);

        //Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
        setInterval('gallery()', 2000);

    }

    function gallery() {

        //if no IMGs have the show class, grab the first image
        let current = ($('#gallery a.show') ? $('#gallery a.show') : $('#gallery a:first'));

        //Get next image, if it reached the end of the slideshow, rotate it back to the first image
        let next = ((current.next().length) ? ((current.next().hasClass('caption')) ? $('#gallery a:first') : current.next()) : $('#gallery a:first'));

        //Get next image caption
        let caption = next.find('img').attr('rel');

        //Set the fade in effect for the next image, show class has higher z-index
        next.css({opacity: 0.0})
            .addClass('show')
            .animate({opacity: 1.0}, 1000);

        //Hide the current image
        current.animate({opacity: 0.0}, 1000)
            .removeClass('show');

        //Set the opacity to 0 and height to 1px
        $('#gallery .caption').animate({opacity: 0.0}, {
            queue: false,
            duration: 0
        }).animate({height: '1px'}, {queue: true, duration: 300});

        //Animate the caption, opacity to 1.0 and heigth to 50px, a slide up effect
        $('#gallery .caption').animate({opacity: 1.0}, 100).animate({height: '50px'}, 500);

        //Display the content
        $('#gallery .content').html(caption);
    }

</script>
<style type="text/css">
    .clear {
        clear: both
    }

    #gallery {
        position: relative;
        height: 240px
    }

    #gallery a {
        float: left;
        position: absolute;
    }

    #gallery a img {
        border: none;
    }

    #gallery a.show {
        z-index: 500
    }

    #gallery .caption {
        z-index: 600;
        background-color: #000;
        color: #ffffff;
        height: 50px;
        width: 100%;
        position: absolute;
        bottom: 0;
    }

    #gallery .caption .content {
        margin: 5px
    }

    #gallery .caption .content h3 {
        margin: 0;
        padding: 0;
        color: #1DCCEF;
    }
</style>

<div id="content_mid"><span class="title">About Software</span><br/>
    <div id="gallery">

        <a href="#" class="show">
            <img src="images/vid1.jpg" alt="Flowing Rock" width="360" height="240" title="" alt=""
                 rel="<h3>Flash and Windows</h3>Learn Adobe Flash and Microsoft Windows."/>
        </a>

        <a href="#">
            <img src="images/vig.jpg" width="360" height="240" title="" alt=""
                 rel="<h3>Photoshop-Illustrator</h3>Learn Adobe Photoshop and Adobe Illustrator."/>
        </a>

        <a href="#">
            <img src="images/vid2.jpg" width="360" height="240" title="" alt=""
                 rel="<h3>C++ & Office</h3>Learn Borland C++ and Microsoft Office."/>
        </a>

        <a href="#">
            <img src="images/vid3.jpg" width="360" height="240" title="" alt=""
                 rel="<h3>User Guide</h3>Learn Microsoft Office at a glance using User Guide."/>
        </a>

        <a href="#">
            <img src="images/bannar.jpg" width="360" height="240" title="" alt="nbhj"
                 rel="<h3>Hi, I am Programmer</h3>Learn Microsoft Office at a glance using User Guide."/>
        </a>

        <a href="#">
            <img src="images/web1.jpeg" width="360" height="240" title="" alt=""
                 rel="<h3>Photoshop</h3>Learn Adobe Photoshop CS6."/>
        </a>

        <a href="#">
            <img src="images/web2.jpg" width="360" height="240" title="" alt=""
                 rel="<h3>Premiere</h3>Learn Adobe Premiere and Microsoft Word."/>
        </a>
        <div class="caption">
            <div class="content"></div>
        </div>
    </div>
    <div class="clear"></div>
    <br>

    Look! Our product written by selim Ashraf. He has written letious book about computer. And go on..Look! Our product
    written by selim Ashraf. He has written letious book about computer. And go on.. Look! Our product written by selim
    Ashraf. He has written letious book about computer. And go on.. Look! Our product written by selim Ashraf. He has
    written letious book about computer. And go on..
    selim Ashraf is an actor and computer books author. He has written verious kind of computer books.

    <?php
    echo "<br /> <font face='Verdana' size='4' color=red> 
	<b>Welcome our site </b></font>";
    if (isset($_SESSION['selim'])){
    echo $_SESSION['selim'];}
    ?>
    <br>
    <?php
    $current = date("d-M-Y");
    //$timeset = strtotime("+4 hour");
    $timeset = time();
    $bdtime = date("H:i:s:a");
    if ($bdtime < 12) {
        echo "Good Morning";
    } elseif ($bdtime < 16) {
        echo "Good Afternoon";
    } elseif ($bdtime < 20) {
        echo "Good Evening";
    } elseif ($bdtime < 24) {
        echo "Good Night";
    }

    $bdtime = date("l h:i:s A", $timeset);
    $set1 = "16/12/20";
    $set2 = "25/12/20";
    $set3 = "21/02/21";

    echo "<br /> Today is $current <br /> Now Bd Time is: $bdtime <br />";
    if ($current == $set1) {
        echo "<br /> <font face='Verdana' size='4' color=green> 
<b>Welcome to Indepandent Day</b></font><br />";
    }
    if ($current == $set2) {
        echo "<br /> <font face='Verdana' size='4' color=green> 
<b>Welcome to Happy Crismass </b></font><br />";
    }
    if ($current == $set3) {
        echo "<br /> <font face='Verdana' size='4' color=green> 
<b>Welcome to International Mother Language Day </b></font><br />";
    }
    ?>

</div>
<script type="text/javascript" src="gradualfader.js">

    /***********************************************
     * Gradual Element Fader- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
     * Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
     * This notice must stay intact for legal use
     ***********************************************/

</script>


<div id="content_right"><span class="title">
Image Gallery </span><br/> Look! here is some Image.<br/>

    <img class="sample gradualfader" src="images/about1.jpeg">
    <img class="sample gradualfader" src="images/about2.jpeg">
    <img class="sample gradualfader" src="images/about3.jpeg">
    <script type="text/javascript">
        gradualFader.init() //activate gradual fader
    </script>
    <img class="sample" src="images/vig.jpg">
    <img class="sample" src="images/vid1.jpg">
    <img class="sample" src="images/vid2.jpg">
    <img class="sample" src="images/vid3.jpg">
    <img class="sample" class="sample" src="images/web1.jpeg">
    <img class="sample" src="images/web3.jpeg"/>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/>
<?php
include("include/footer.php");
?>
