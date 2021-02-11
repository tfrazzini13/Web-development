<!doctype html>
<html>

<head>
</head>

<body>
    <h1>TONY BAG OF DONUTS MADDDDD LIBBBBS </h1>
        <form action="site.php" method="get">
            plant name: <input type="text" name="plant name"> <br>
            name of man: <input type="text" name="name of man"> <br>
            adverb: <input type="text" name="adverb"> <br>
            noun: <input type="text" name="noun"> <br>
            animal: <input type="text" name="animal"> <br>
            food name: <input type="text" name="food name"> <br>
            <input type="submit">
        </form>
    <br><br>
        <?php
                $plantname = $_GET["plantname"];
                $nameofaman = $_GET["nameofaman"];
                $adverb = $_GET["adverb"];
                $noun = $_GET["noun"];
                $animal = $_GET["animal"];
                $foodname = $_GET["foodname"];
                
                echo "She was out of her $plantname after work <br>";
                echo "Stressed out she had a $nameofaman. <br>";
                echo "So she ran $adverb out of the house. <br>";
                echo "She tripped over the $noun. <br>";
                echo "So she had to go $animal before getting to the ER. <br>";
                echo "After that she knew $foodname about herself. <br>"
            ?>  


</body>