<!doctype html>
<html>
    <head>
        <title>Walkthrough</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <body>

        <ul>
            <?php
            foreach ($records as $record) {
                echo '<li>' .
                '<a href="/HostPresenter/show/' . $record['id'] . '">' . $record['companyName'] . "(show)" . '</a>' .
                ': ' . " " .
                '<a href="/HostPresenter/edit/' . $record['id'] . '"> Edit</a>' . '</li>';
            }
            ?>

        </ul>
    </body>
</html>
