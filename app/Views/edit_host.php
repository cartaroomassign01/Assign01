<!doctype html>
<html>
    <head>
        <title>One Host</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>

        <form action="/hostPresenter/update/<?php echo $record['code'] ?>" method="post">
            <?php
            foreach ($record as $field => $value) {
                if ($field == 'code') {
                    echo $value;
                } else {
                    ?>
                    <?= $field ?>:
                    <input name="<?= $field ?>" type="text" value="<?= $value ?>"/>
                    <br/>
                    <?php
                }
            }
            ?>
            <button type="submit">Hit me!</button>
        </form>
    </body>
</html>
