<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div id="header">
    <div id="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Valorant_logo_-_pink_color_version.svg/816px-Valorant_logo_-_pink_color_version.svg.png" id="logos">
    </div>
    <div id="navbar">
        <div class="nav-item">
            Home
        </div>
        <div class="nav-item">
            Character
        </div>
        <div id="more">
            <div class="nav-item">
                About us
            </div>
        </div>
    </div>
</div>

<style>
    #header{
    background-color: black;
    height: 50px;
    color: aliceblue;
    display: flex;
    justify-content: space-between;
    padding: 0 5%;
    align-items: center;

}

#logo{
    font-size: 2em; 
}

#logos{
    width: 70px;
    height: 50px;
}

#navbar{
    width: 20%;
    display: flex;
    justify-content: space-around;
}

.nav-item{
    padding: 5px;
}

.nav-item:hover{
    background-color: white;
    color: black;
}

#more{
    position: relative;
}

#more-dropdown{
    display: none;
    background-color: black;
    width: 150px;
    position: absolute;
    right: 0;
}


#courses{
    position: relative;
}


@media screen and (max-width: 800px){
    body{
        background-color: lightblue;
    }
}

@media screen and (max-width: 400px){
    body{
        background-color: lightcoral;
    }

    #navbar{
        flex-direction: column;
    }
}
</style>

