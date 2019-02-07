<?php
    include_once "pagination.php";
?>
<html>
<head>
    <title>Pagination</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        html{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-content: center;
            align-items: center;
            height:100%;
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            flex: 0 1 auto;
            align-self: auto;
            width: 100%
            max-width: 900px;
            height: 100%;
            max-height: 600px;
            background:#fafafa;
        }
    </style>
</head>
<body style="padding-top: 300px; align-content: center;">
    <?php
        if(isset($_GET['currentpage'])){
            $currentpage = $_GET['currentpage'];
        }else{
            $currentpage = 1;
        }

    generatePagination($currentpage, "index.php?currentpage=")
    ?>
</body>
</html>