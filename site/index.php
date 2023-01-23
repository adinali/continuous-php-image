<html>
    <body>
        <h1>Team:</h1>
        <?php
            foreach(json_decode(file_get_contents('http://players'))->players as $player)    {
              echo "<li>$player</li>";
            }
        ?>
    </body>
</html>