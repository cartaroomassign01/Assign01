<!doctype html>
<html>
    <head>
        <title>Walkthrough</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    </head>
    <style>
        h1{
            font-weight: bold;
            text-align: center;
        }
        table {
            width: 50%;
            margin-left:auto;
            margin-right:auto;

            border: 1pt solid black;
        }
        td {
            font-size: 24px;
            border: 1pt solid black;
        }
        td.odd {
            background-color: mistyrose;
        }
        td.even {
            background-color: lightsalmon;
        }
    </style>
    <body>
    <h1>Host Presenter</h1>

        <table>
            <?php

            foreach ($records as $record) {
                echo '<tr>' .
                '<td class="odd"><a href="/hostPresenter/show/' . $record['id'] . '">' . $record['companyName'] . "(show)" . '</a></td>'
                 . " " .
                '<td class="even"><a href="/hostPresenter/edit/' . $record['id'] . '"> Edit</a>' . '</td></tr>';
            }
            ?>

        </table>
    </body>
</html>
