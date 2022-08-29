

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./stylesheet.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>WesternBookings.com</title>
    </head>
    <body>
        <nav class="NavBar">
            <div class="web_title"><span class="logo_black">W</span>estern<span class="logo_black">B</span>ookings<span class="small_text">.com</span></div>
            <span class="material-symbols-outlined">menu</span>
        </nav>
        <div class="customer_details">
            <div class="welocome_message">Welcome</div>
            <form class="form_details" action="./Includes/hotels.includes.php" method="$_POST">
                <select name="location" class="selection">
                    <option value="" disabled selected>Select Location</option>
                    <option value="">Knysna</option>
                    <option value="">Stellenbosch</option>
                    <option value="">Hermanus</option>
                </select>
                <input type="text" name="NameSurname" placeholder="Name and Surname">
                <input type="text" name="Email" placeholder="Email">
                <input type="text" name="NumNights" placeholder="Number of Nights">
                <input type="text"  name="checkinDate" placeholder="Check in Date" onfocus="(this.type='date')">
                <input type="text" name="NumCandidates" placeholder="Number of Candidates">
                <button type="submit" name="sumbmit" class="sub_button">SUBMIT</button>
            </form>
        </div>
        <footer class="web_footer"></footer>
    </body>

</html>