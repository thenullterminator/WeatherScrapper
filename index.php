<?php

// $html =file_get_contents("https://www.weather-forecast.com/locations/New-York/forecasts/latest");
// $array=explode('<p class="b-forecast__table-description-content"><span class="phrase">',$html);
// $array=explode('</span></p></td><td class="b-forecast__table-description-cell--js" colspan="9"><span class="b-forecast__table-description-title">',$array[1]);
//  echo $array[0]; 

$error="";$success="";
if($_GET)
{
    $address="https://www.weather-forecast.com/locations/".$_GET['city']."/forecasts/latest";
    $html=file_get_contents($address);

    if($html)
    {
        $array=explode('<p class="b-forecast__table-description-content"><span class="phrase">',$html);
        $array=explode('</span></p></td><td class="b-forecast__table-description-cell--js" colspan="9"><span class="b-forecast__table-description-title">',$array[1]);
        $success=$array[0]; 
    }
    else
    {
        $error="Could Not find the city!";
    }
}
else
{
    $error="Please Enter a city.";
}

if($error!='')
{
    $error=' <div class="alert alert-danger" role="alert"><b>'.$error.'</b></div>';
}
else
{
    $success=' <div class="alert alert-success" role="alert"><b>'.$success.'</b></div>';
}

?>
<html>
    <head>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
        body{
            margin:0;
            padding:0;
            overflow-y:hidden !important;
        }

        .bg{
            background-image: url("img2.jpg");
            
            /* Full height */
            height: 101.7%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
            z-index:-1;
/* .................EDITTING IMAGES..................... */
            -webkit-filter: blur(2px) contrast(1.7); /*Setting up more than one property*/
            /* -webkit-filter: contrast(1.5); */
            /* -webkit-filter: brightness(1); */
            /* -webkit-filter: opacity(2); */
/* .................EDITTING IMAGES..................... */
        }
        .bgtext
        {
            color: #0fe6df;
            border: 1px solid rgb(92, 116, 122);
            font-family: 'Montserrat', sans-serif;
            margin:  0 auto;
            width: 29.5vw;
            height: 4vw;
            padding: 0.5vw;
            border-radius: 0.5vw;
            overflow-y: hidden !important;
            font-size: 1.6vw !important;
            font-weight:bold;
            box-shadow: 0 0 20px 8px black;
        }

        #input
        {
            width:30vw;
            margin:  0 auto;
            text-align: center;
        }

        input
        {
            width:30vw;
            height:2.6vw;
            font-family: 'Montserrat', sans-serif;
            font-size:1vw;
            border-radius:0.4vw;
            box-shadow: -3px 2px 14px 5px black;
            
        }
        button
        {
            font-family: 'Montserrat', sans-serif;
            font-size:1.4vw;
            width:7vw;
            height:3vw;
            border-radius:0.5vw;
            background-color:#0069D9;
            color:white;
            /* border:1px solid black; */
            cursor:pointer;
        }
        main
        {
            /* position:absolute; */
            z-index: 99;
            /* background-color: red; */
            height:auto;
            width:35vw;
            margin:0 auto;
            position:relative;
            top:-42vw;
            
        }

        </style>

    </head>
    <body>
            <div class="bg"></div>
            <p></p>
    <main>
        

        <div class="bgtext">
                <span>Check out the Weather In your city!</span>
        </div>
        <p></p><br><br>
        <form>
        <div id="input">
                <input type="text" name="city" id="city" placeholder="Ex: London,Tokyo">
                <p></p><br><br>
                <button type="submit" name="submit"  value="Submit!">Submit!</button>
        </div>
        </form>
        <p></p><br>

        <div id="error"><?php echo $error; ?><?php echo $success; ?></div>
        <div class="alert alert-success" role="alert">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="alert alert-danger" role="alert">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
        </div>
    </main>
    </body>
</html>


