<?php
$text = $_POST['text'];
$badWord = $_POST['bad-word'];

// Sostituisci tutte le occorrenze della parola data da "bad-word" con "***"
$testo_censurato = str_replace($badWord, "***", $text);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>return</title>
</head>

<body>
    <div class="container">
        <div class="m-5">
            <h3>Testo</h3>
            <?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?>
            <!-- strLen() si usa per trovare la lunghezza dei caratteri del testo-->
            <p>la lunghezza di questo testo e di <span class="fw-bold"><?php echo strlen($_POST['text']); ?></span> caratteri</p>
        </div>
        <div class="m-5">
            <h3>Testo censurato</h3>
            <?php echo $testo_censurato; ?>
            <p>la lunghezza di questo testo e di <span class="fw-bold"><?php echo strlen($testo_censurato); ?></span> caratteri</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>