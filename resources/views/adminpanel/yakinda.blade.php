<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Jardín De Ensueño</title>
    <link href="{{asset('tools/style.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('tools/font-awesome/css/font-awesome.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('tools/jquery.min.js')}}"></script>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:700,400|Lato' rel='stylesheet' type='text/css'>
    <link href="{{asset('https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/loder.png')}}">

</head>
<body>
<div class="wrapper"><!--wrapper started-->
    <div class="abovebanner"><!-- above banner started -->
        <div class="header"><!-- header started-->
            <h1 id="logo"><span>Jardín De Ensueño</span></h1>
            <p class="line1">Hayal Bahçesi</p>
        </div><!-- header ended-->

        <div class="content"><!-- content started-->
            <p>ÇOK YAKINDA HİZMETİNİZDE..</p>

            </div><!-- form ended -->

        </div><!-- content ended -->
    </div><!-- above banner ended -->

    <div class="belowbanner">
        <div class="email">
            <h2>E-mail adresimiz</h2>
            <p><a href="#">hayalbahcesi@je.com</a></p>
        </div>
        <div class="social">
            <h2>Bizi Takip Edin</h2>
            <a href="#" class="socicon-facebook"></a>
            <a href="#" class="socicon-twitter"></a>
            <a href="#" class="socicon-youtube"></a>
            <a href="#" class="socicon-instagram"></a>
        </div>
        <div class="call">
            <h2>Telefon Numaramız</h2>
            <p>+90(216)5334353</p>
        </div>
    </div>
</div>


<script type="text/javascript">
    var placeholder = $("#test").val();

    $("#test").keydown(function() {
        if (this.value == placeholder) {
            this.value = '';
        }
    }).blur(function() {
        if (this.value == '') {
            this.value = placeholder;
        }
    });
</script>

</body>
</html>
