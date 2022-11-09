{{-- diharapkan memakai /home pak untuk membuka websitenya, terima kasih --}}

@extends('template')

@section('title', 'Valorant')

@section('content')
    <body>
        <br>
        <div id="teks1"><center>VALORANT</center></div>
        <br>
        <div id="container">
            <div id="teks2">
                <center>Choose your character:</center>
            </div>
        </div>
        <center>
        <form action = "<?php $_PHP_SELF ?>" method = "GET" style="color: white; font-weight:bold;">
            Jett, Phoenix, Neon, Sova, Fade, Omen, Harbour, Killjoy, Chamber: <br><br><input type = "text" name = "chara" />
            <input type = "submit" />
            <br>
            <div id="warn">
                WARNING!! (Case sensitive)
            </div>

         </form>
         <br>
        @switch($chara)
            @case("Jett")
            <h3><b>Role : Duelist</b></h3>
            <img class="image" src="https://images3.alphacoders.com/110/1104327.jpg" height=350px width="500px">
                @break
            @case("Neon")
            <h3><b>Role : Duelist</b></h3>
            <img class="image" src="https://staticg.sportskeeda.com/editor/2022/01/b6089-16410467800908-1920.jpg" height=350px width="500px">
                @break
            @case("Phoenix")
            <h3><b>Role : Duelist</b></h3>
            <img class="image" src="https://images5.alphacoders.com/108/thumb-1920-1081931.jpg" height=350px width="500px">
                @break
            @case("Sova")
            <h3><b>Role : Initiator</b></h3>
            <img class="image" src="https://img.esportsku.com/wp-content/uploads//2022/07/sova.webp" height=350px width="500px">
                @break
            @case("Fade")
            <h3><b>Role : Initiator</b></h3>
            <img class="image" src="https://media.distractify.com/brand-img/ox6_CefEZ/1200x628/valorant-fade-1650910454416.png" height=350px width="500px">
                @break
            @case("Omen")
            <h3><b>Role : Controller</b></h3>
            <img class="image" src="https://cdn.givemesport.com/wp-content/uploads/2022/01/21_10_12_f7d2805aa98e0d02a993c7e9dc45168d_960-3.jpg" height=350px width="500px">
                @break
            @case("Harbour")
            <h3><b>Role : Controller</b></h3>
            <img class="image" src="https://dailyspin.id/wp-content/uploads/2022/10/harbor-valorant.jfif_.jpg" height=350px width="500px">
                @break
            @case("Killjoy")
            <h3><b>Role : Sentinels</b></h3>
            <img class="image" src="https://images3.alphacoders.com/110/1102034.jpg" height=350px width="500px">
                @break
            @case("Chamber")
            <h3><b>Role : Sentinels</b></h3>
            <img class="image" src="https://images.alphacoders.com/118/1186644.png" height=350px width="500px">
                @break
            @default
        @endswitch
        <br><br>
    </center>

    <div id="footer">

        <p id="follow">Follow Us</p>
        <div id="sosmed">
            <div id="sosmedfb">
                <a href="https://www.facebook.com/gaming/valorant">
                    <img id="fbp" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png">
                </a>
            </div>
            <div id="sosmedig" >
                <a href="https://www.instagram.com/playvalorantofficial/">
                    <img id="igb" src="https://png.pngtree.com/png-clipart/20180626/ourmid/pngtree-instagram-icon-instagram-logo-png-image_3584852.png" alt="">
                </a>
            </div>
            <div id="sosmedtwit">
                <a href="https://twitter.com/playvalorant">
                    <img id="twitb" src="https://i0.wp.com/eltallerdehector.com/wp-content/uploads/2022/10/Twitter-logo-png.png?resize=600%2C494&ssl=1" alt="">
                </a>
            </div>
            <div id="sosmedtube">
                <a href="https://www.youtube.com/channel/UC8CX0LD98EDXl4UYX1MDCXg">
                    <img id="tubeb" src="https://www.freepnglogos.com/uploads/youtube-play-red-logo-png-transparent-background-6.png" alt="">
                </a>
            </div>
        </div>
        <p id="about" >©2021 All Right Reserved, Valorant,Inc, Riot Games</p>
    </div>
    </body>

    
@endsection

<style>
    body {
    background-image: url(https://images3.alphacoders.com/114/1149777.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }   
    h3{
        color: aqua;
    }

    #teks1{
        font-size: 110px;
        color: white;
        font-weight: bold;
    }

    #teks2{
        font-size: 30px;
        color: aqua;
    }

    #warn{
        color: red;
    }

    #footer{
        color: white;
        height: 120px;
        text-align: center;
        font-size: large;
        background-color: black;
        margin-top: 130px;
    }

    #fbp{
        width: 25px;
        height: 25px;
    }

    #fbp:hover{
        opacity: 0.5;
    }

    #sosmed{
        display: flex;
        justify-content: center;
    }

    #igb{
        width: 25px;
        height: 25px;
    }

    #igb:hover{
        opacity: 0.5;
    }

    #twitb{
        width: 25px;
        height: 25px;
    }

    #twitb:hover{
        opacity: 0.5;
    }

    #tubeb{
        width: 25px;
        height: 25px;
    }

    #tubeb:hover{
        opacity: 0.5;
    }

</style>