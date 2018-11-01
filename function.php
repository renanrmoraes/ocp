<!DOCTYPE html>
<html>
    <body>
        <h1>Function</h1>
        <?php
            for($i = 0; $i < 100000; $i++) {
                $a += $i;
                echo "$$a\n";
            }
        ?> 
    </body>
</html>
