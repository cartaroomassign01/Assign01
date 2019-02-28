<!doctype html>
<html>
    <head>
        <title>One Host</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>

        <form action="/HostPresenter/update/<?php echo $record['id'] ?>" method="post">
            <?php
            foreach ($record as $field => $value) {
                if ($field == 'id') {
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
