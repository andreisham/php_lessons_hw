<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            margin: 10px;
        }
        td   {
            padding: 2px 4px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="header">
    <?=drawMenu()?>
</div>
<div class="wrap">
    <?=$content?>
</div>
<div class="footer">

</div>
</body>
</html>

