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
                <center>Choose your role:</center>
            </div>
        </div>
        <br>
        <center>
        <form action = "<?php $_PHP_SELF ?>" method = "GET" style="color: white; font-weight:bold;">
            Choose your agent (lower case ["jett", "phoenix", "neon", "chamber"]): <br><input type = "text" name = "hari" />
            <input type = "submit" />
        
         </form>
         <br>
        @switch($hari=$_GET["hari"])
            @case("jett")
            <h3>Chara:</h3>
            <img class="image" src="https://images3.alphacoders.com/110/1104327.jpg" height=350px width="400px">
                @break
            @case("neon")
            <h3>Chara</h3>
            <img class="image" src="https://staticg.sportskeeda.com/editor/2022/01/b6089-16410467800908-1920.jpg" height=350px width="400px">
                @break
            @case("phoenix")
            <h3>Chara:</h3>
            <img class="image" src="https://images5.alphacoders.com/108/thumb-1920-1081931.jpg" height=350px width="400px">
          @break
          @case("chamber")
            <h3>Chara:</h3>
            <img class="image" src="https://images.alphacoders.com/118/1186644.png" height=350px width="400px">
          @break
            @default
        @endswitch
        <br><br>
    </center>
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
        color: orange;
    }

    #teks1{
        font-size: 110px;
        color: white;
        font-weight: bold;
    }

    #teks2{
        font-size: 30px;
        color: orange;
    }
</style>