<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body style="background-color: #fcfcfc">
    <?php require("connection.php") ?>
        <form method="post" enctype="multipart/form-data" action="save.php" class="container" style="margin-left: auto; margin-right: auto;">
            <input style="font-size: x-large;" class="input " id="title" placeholder="Title">

            <textarea class="input" id="textarea" placeholder="Write something..." rows="15"></textarea>
            <div style="display: flex; justify-content: flex-end;">
                <input type="button" class="button" value="Clear" onclick="javascript:eraseText();"> 
                <button type="submit" class="button" id="add"> Add </button>
            </div>
        </form>
</body>

</html>