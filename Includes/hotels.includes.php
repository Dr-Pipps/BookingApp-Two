<?php

require_once"./Classes/methods.php";
session_start();

if(isset($_POST["submit"]))
{
    // Getting Customer Info
    $location = $_POST["location"];
    $cusName = $_POST["NameSurname"];
    $cusEmail = $_POST["Email"];
    $numNights = $_POST["NumNights"];
    $checkDate = $_POST["checkinDate"];
    $numCanditaes = $_POST["NumCandidates"];
    // Instatianting customer class:
    $cusInfo = new userInfo($hotelName,$description,$address,$Image,$rating,$costPernight);
    // Add user data to methods:
    $cusInfo->setCustName($cusName);
    $cusInfo->sethotelLocation($location);
}
$_SESSION['hotelList'] = [
    
    new hotelSelection(
    "138 Marine Beachfront Guesthouse",
    "138 Marine Beachfront Guesthouse is a national award-winning guest house with spectacular sea views and a beach front location. It is situated only minutes from the town of Hermanus.",
    "138 Kus Road, Sandbaai, 7200 Hermanus, South Africa",
    "https://unsplash.com/s/photos/hotel",
    4,
    420),
    new hotelSelection(
    "Alluvia Boutique Winery & Luxury Accommodation",
    "Alluvia Boutique Winery & Luxury Accommodation features a restaurant, outdoor swimming pool, a bar and garden in Stellenbosch. Among the facilities at this property are room service and a concierge service, along with free WiFi throughout the property. The guest house has family rooms.",
    "Helshoogte Pass, Glen Arum Road Banhoek Valley, 7599 Stellenbosch, South Africa",
    "https://unsplash.com/s/photos/luxury-hotel",
    4,
    710),
    new hotelSelection(
    "The Russel Hotel",
    "Within walking distance of Knysna’s attractions, providing guests with easy access to the Garden Route, this modern 3-star hotel offers luxurious accommodation and free private parking.",
    "Cnr. Long, Graham and Unity Street, 6570 Knysna, South Africa",
    "https://www.pexels.com/search/hotel/",
    3,
    580),
    ]
   
?>


<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../stylesheet.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>WesternBookings.com</title>
    </head>
    <body>
        <nav class="NavBar">
            <div class="web_title"><span class="logo_black">W</span>estern<span class="logo_black">B</span>ookings<span class="small_text">.com</span></div>
            <span class="material-symbols-outlined">menu</span>
        </nav>

        <div class="hotel_list">
            <ul>
                <?php
                    foreach ($_SESSION['hotelList'] as $hotelSelection) {
                        echo "
                            <div class=''>

                            </div>
                        ";
                    }
                ?>
            </ul>
        </div>
       
        <footer class="web_footer"></footer>
    </body>

</html>