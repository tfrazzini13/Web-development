<!doctype html>
<html>
<head>
</head>
<body>
    <img src="Telecaster.jpg" alt="Telecaster" width="300" height="300">
        <?php
        echo "<h1>Indentify What Year Your Fender Guitar Was Made</h1>";
        echo "<hr/>";
        ?>
            <form>
                <label for="fname">Serial Number:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <input type="radio" id="USA" name="USA" value="USA">
                <label for="USA">USA</label><br>
                <input type="radio" id="Mexico" name="Mexico" value="Mexico">
                <label for="Mexico">Mexico</label><br>
                <input type="radio" id="Japan" name="Japan" value="Japan">
                <label for="Japan">Japan</label> <br>
                <input type="submit">
            </form>
</body>
</html>