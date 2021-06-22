<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <title>Formular</title>
  </head>

  <body>
    <div class="container">
    <h1>Formular</h1>
    <?php
        if (isset($_POST["text1"])) {
            print("Aufruf über Formular") ;
            $text1 = $_POST["text1"] ;
            $text2 = $_POST["text2"] ;
            $summe = $_POST["text1"] + $_POST["text2"];
        } else {
            print("Aufruf über die URL") ;
            $text1 = "" ;
            $text2 = "" ;
            $summe = "" ;
        }
    ?>
        <div class="row">
            <form method="POST">
                <div class="mb-3">
                    <label for="text1" class="form-label">Unser erstes Eingabefeld</label>
                    <input type="text" class="form-control" placeholder="<?php print($text1); ?>" 
                    id="text1" name="text1" aria-describedby="helptext" title="Das Erste Eingabefeld" />
                    <div id="helptext" class="form-text">Bitte geben Sie hier etwas ein</div>
                </div>
                <div class="mb-3">
                    <label for="text2" class="form-label">Unser nächstes Eingabefeld</label>
                    <input type="text" class="form-control" placeholder="<?php print($text2); ?>"
                    id="text2" name="text2" aria-describedby="helptext" title="Das Zweite Eingabefeld" />
                    <div id="helptext" class="form-text">Bitte geben Sie hier etwas ein</div>
                </div>
                <button type="submit" title="Ein schöner Button" class="btn btn-primary">Abschicken</button>
                <br />
                <div class="mb-3"><p>Das Ergebnis ist: <?php echo $summe; ?> </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>