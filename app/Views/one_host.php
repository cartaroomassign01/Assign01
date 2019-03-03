<!doctype html>
<html>
    <head>
        <title>One Host</title>

        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<style>
		body {
            background-color: #EEB9F8;
        }

        h1 {
            font-size: 75px;
            text-align: center;
        }
		
		li{
			font-size :30px;
			font-family : "Comic Sans MS", cursive, sans-serif;
			padding-top: 50px;
            padding-right: 30px;
            padding-bottom: 50px;
            padding-left: 80px;
		}
		button {
  background-color: #90F4F5;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
		</style>
    </head>
    <body>
	<h1> Room Info </h1>
	<a href="/"><button type="button">Go Back</button></a>
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
