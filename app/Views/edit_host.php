<!doctype html>
<html>
<head>
    <title>One Host</title>

    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <style>
        body {
            background-color: powderblue;
        }
        h1 {
            font-weight: bold;
            text-align: center;
        }

        table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;

            border: 1pt solid black;
        }

        td {
            font-size: 24px;
            border: 1pt solid black;
            background-color: lightsalmon;
        }
    </style>
</head>
<body>
<h1>Edit Entry</h1>
<form action="/HostPresenter/update/<?php echo $record['id'] ?>" method="post">
    <table>
        <?php
        foreach ($record as $field => $value) {
            echo '<tr><td>';
            if ($field == 'id') {
                echo '<h2>' . $value . '</h2></td><td>&nbsp;</td>';
            } else {
                ?>
                <?= $field . '</td><td>' ?>

                <input name="<?= $field ?>" type="text" value="<?= $value ?>"/>
                <?= '</td>' ?>
                <?php
            }
        }
        ?>
        <tr>
            <td>
                <button type="submit">Hit me!</button>
            </td>
            <td>
            &nbsp;
            </td>
        </tr>
    </table>
</form>
</body>
</html>
