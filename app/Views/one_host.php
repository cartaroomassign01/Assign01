<!doctype html>
<html>
    <head>
        <title>One Host</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>

        <ul>
            <?php
            foreach ($record as $field => $value) {
                echo '<li>' .
                $field . ': ' . $value .
                '</li>';
            }
            ?>

        </ul>
    </body>
</html>
