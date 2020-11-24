<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du pendu simplon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Jeu du pendu simplon</h1>
        <!-- Buttons letter -->
        <div id="pendu-lettre">
            <div class="text-center mb-1">
                <button type="button" class="btn btn-outline-primary pendu-btn">A</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">B</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">C</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">D</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">E</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">F</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">G</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">H</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">I</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">J</button>
            </div>
            <div class="text-center mb-1">
                <button type="button" class="btn btn-outline-primary pendu-btn">K</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">L</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">M</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">N</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">O</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">P</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">Q</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">R</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">S</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">T</button>
            </div>
            <div class="text-center mb-1">
                <button type="button" class="btn btn-outline-primary pendu-btn">U</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">V</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">W</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">X</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">Y</button>
                <button type="button" class="btn btn-outline-primary pendu-btn">Z</button>
            </div>
        </div>
        <!-- Img pendu en background -->
        <div id="pendu-img" class="text-center" >

        </div>
        <!-- Affichage des lettre du mot si trouvé -->
        <div id="pendu-mot" class="text-center">
            <!-- Créer des span en fonction du nombre de lettres dans le mot -->
            <?php $length_mot = $_SESSION['length-mot'];
            for ($index = 0; $index < $length_mot; $index++) :
            ?>

                <span>_</span>

            <?php endfor; ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="penduModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="penduModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 id="penduModalTitle"></h2>
                    <p id="penduModalContent"></p>
                </div>
                <div class="modal-footer">
                    <button id="penduModalBtn" type="button" class="btn btn-primary">Nouvelle partie</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="public/js/script.js"></script>
</body>

</html>