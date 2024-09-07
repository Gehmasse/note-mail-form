<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Note</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php if(isset($_GET['msg'])): ?>
        <?php
            [$color, $message] = match($_GET['msg']) {
                'failed' => ['red', 'No Text Sent'],
                'sent' => ['green', 'Sent Message at ' . date('H:i:s')],
                default => ['yellow', 'Unknown Status'],
            };
        ?>

        <div class="note" style="background: <?= $color ?>"><?= $message ?></div>
    <?php endif ?>

    <form action="send.php" method="post">
        <textarea name="text" id="text"></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>