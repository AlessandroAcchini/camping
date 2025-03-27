<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌴🍾LES SIO EN VACANCES🍾🌴</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex-grow h-full bg-gray-100">

    <header class="flex items-center justify-center p-5 shadow-md bg-white">
        <div class="font-bold text-3xl">Camping CAPFUN</div>
    </header>
    
    <br>
    <!-- COMPTE A REBOURS -->
    <div class="flex justify-center">
        <label id="Compte" style="background-color: #f0f0f0; padding: 10px; border-radius: 8px;"></label>
        <script type="text/javascript">
            var Affiche = document.getElementById("Compte");
            function Rebour() {
                var date1 = new Date();
                var date2 = new Date("Jun 29, 2025 00:00:00");
                var sec = (date2 - date1) / 1000;
                var n = 24 * 3600;
                if (sec > 0) {
                    j = Math.floor(sec / n);
                    h = Math.floor((sec - (j * n)) / 3600);
                    mn = Math.floor((sec - ((j * n + h * 3600))) / 60);
                    sec = Math.floor(sec - ((j * n + h * 3600 + mn * 60)));
                    Affiche.innerHTML = "il ne reste plus que : " + j + " jours " + h + " heures " + mn + " minutes " + sec + " secondes" + " avant le  🌴☀ CAMPING ☀🌴 ";
                    window.status = "Temps restant : " + j + " j " + h + " h " + mn + " min " + sec + " s ";
                }
                tRebour = setTimeout("Rebour();", 1000);
            }
            Rebour();
        </script>
    </div> 
    <!-- FIN COMPTE A REBOURS -->
 
    <div class="flex justify-center font-bold text-3xl mt-10"> 
        <a href="https://www.capfun.com/camping-france-languedoc_roussillon-emeraude-FR.html" target="_blank"> Mais, où allons-nous ?</a>
        
    </div>
    <p class="flex justify-center">⏫clique⏫</p>
    <br>
   
    <div class="flex justify-center mb-10">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/photo2.jpg" class="d-block w-full h-[300px] sm:h-[600px] md:h-[700px]" alt="incr">
                </div>
                <div class="carousel-item">
                    <img src="images/photo1.jpg" class="d-block w-full h-[300px] sm:h-[600px] md:h-[700px]" alt="incr">
                </div>
                <div class="carousel-item">
                    <img src="images/photo3.jpg" class="d-block w-full h-[300px] sm:h-[600px] md:h-[700px]" alt="incr">
                </div>
                <div class="carousel-item">
                    <img src="images/photo4.jpg" class="d-block w-full h-[300px] sm:h-[600px] md:h-[700px]" alt="incr">
                </div>
                <div class="carousel-item">
                    <img src="images/photo5.jpg" class="d-block w-full h-[300px] sm:h-[600px] md:h-[700px]" alt="incr">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--Script Bootstrap--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

    <div class="flex justify-center font-bold text-3xl mt-10">Mais, qui sommes-nous ?</div><br>

    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/emilien.jpg" class="img-fluid rounded-start" alt="Emilien Millot">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Emilien Millot</h5>
                            <p class="card-text">Le nudiste du groupe, il a une meuf mais il embrasse des garçons.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/pierre.jpg" class="img-fluid rounded-start" alt="Pierre Gallardo">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Pierre Gallardo</h5>
                            <p class="card-text">Le daron du groupe, le plus alcoolique, le plus fou, bref, le plus expérimenté.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/etienne.jpg" class="img-fluid rounded-start" alt="Étienne Vitrey">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Étienne Vitrey</h5>
                            <p class="card-text">Ce gars cache bien son jeu, c'est un gros détraquer, il vit pour les femmes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/flavio.jpg" class="img-fluid rounded-start" alt="Flavio Lode">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Flavio Lode</h5>
                            <p class="card-text">Vous me le surveillez celui-là, sous alcool il est capable de se perdre n'importe où n'importe quand.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/thomas.jpg" class="img-fluid rounded-start" alt="Thomas Mignon">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Thomas Mignon</h5>
                            <p class="card-text">L'expert en la matière, un commando de l'armée une fois sous 3g de Jäger, il filme tout, c'est ce mec dont vous avez besoin.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/hugo.jpg" class="img-fluid rounded-start" alt="Thomas Mignon">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Hugo Simonin</h5>
                            <p class="card-text">L'artiste du groupe, mais n'oubliez pas de lui retirer son téléphone s'il boit, ça pourrait devenir dangereux pour lui.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/alessandro.jpg" class="img-fluid rounded-start" alt="Alessandro Acchini">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Alessandro Acchini</h5>
                            <p class="card-text">Et pour finir le gars qui se fait traiter de gay parce que le ratio est négatif ++ il espère en finir avec ça cet été.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

            <div class="flex justify-center font-bold text-3xl mt-10">Avis ! (pas encore fonctionnel)</div>

            <div class="flex justify-center my-10">
    <div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-md">
        <?php if(isset($_GET['success'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                Merci pour votre avis! Il a bien été enregistré.
            </div>
        <?php endif; ?>
        
        <form action="submit-review.php" method="post" class="space-y-6">
            <div>
                <label for="id_utilisateur" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="id_utilisateur" name="id_utilisateur" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
            </div>
            <div>
                <label for="commentaire" class="block text-sm font-medium text-gray-700">Votre commentaire</label>
                <textarea id="commentaire" name="commentaire" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border"></textarea>
            </div>
            
            <div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Envoyer l'avis
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>