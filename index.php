<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>index</title>
</head>

<body>
    <div class="container p-5">
        <div class="card">
            <div class="card-body">
                <form action="return.php">
                    <div class="mb-3">
                        <label for="text-area" class="form-label">Scrivi qui il tuo testo</label>
                        <input type="text" class="form-control" id="text-area" placeholder="..." name="text"></input>
                    </div>
                    <div class="mb-3">
                        <label for="word" class="form-label">Inserisci la parola da censurare</label>
                        <input type="text" class="form-control" id="word" placeholder="..." name="bad-word">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary mb-3">invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>