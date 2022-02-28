<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibarua Chapchap</title>
    <!-- Materialize CSS CDN -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="./materialize-v1.0.0/materialize/css/materialize.min.css">
    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once "./includes/navbar.php";
    ?>
    <main>
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col s12 large background transparent">
                <div class="col s12 m8 l6 background transparent">
                    <h3><span class="red-text">Ofa</span> mpya zinakusubiri</h3>
                    <h6>tafuta kazi / wachapakazi kwa usalama na haraka</h6>
                    <br>
                    <nav>
                    <div class="nav-wrapper rounded-1">
                        <form>
                        <div class="input-field background red">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                        </form>
                    </div>
                    </nav>
                </div>
                <img src="./assets/imgs/vibarua01.jpg" loading="lazy" class="responsive-img col s12 m8 l6 large-img">
            </div>
        </div>
        <div class="row background red">
            <div class="container">
                <h5 class="center-align padding-top padding-bottom">Aina ya Kazi maarufu zipatikanazo</h5>
                <div class="col s12">
                    <div class="row">
                        <a href="#"><div class="col s12 m8 l4">
                            <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/usafiri.jpg" alt="" loading="lazy">
                                <span class="card-title white-text text-weight center-align multiple-shadows">Usafiri</span>
                            </div>
                            </div>
                        </div>
                        </a>
                        <a href="#"><div class="col s12 m8 l4">
                            <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/nyumbani.jpg" alt="" loading="lazy">
                                <span class="card-title white-text text-weight center-align multiple-shadows">Nyumbani</span>
                            </div>
                            </div>
                        </div>
                        </a>
                        <a href="#"><div class="col s12 m8 l4">
                            <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/ujenzi (2).jpg" alt="" loading="lazy">
                                <span class="card-title white-text text-weight center-align multiple-shadows">Ujenzi</span>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="center-align padding-top padding-bottom">
                        <button class="waves-effect waves-light btn-small white black-text
                        btn-capitalize">Ona zaidi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container row">
            <h5 class="center-align padding-top padding-bottom">Tunakusaidia Kupatana na Makampuni Mbalimbali</h5>
            <div class="col s12 m6 l6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, impedit 
                    provident autem et doloribus aliquam? Lorem, ipsum dolor sit amet consectetur 
                    adipisicing elit. Inventore dicta asperiores deserunt minus, fugit sapiente 
                    exercitationem labore deleniti eligendi! Distinctio. Lorem ipsum dolor sit amet 
                    consectetur adipisicing elit. Mollitia cum est quibusdam veritatis id maxime 
                    architecto ab nemo debitis eos?</p>
                <div class="center-align padding-bottom">
                    <a href="#" class="waves-effect waves-light btn white red-text btn-capitalize">Ingia</a>
                    <a href="#" class="waves-effect waves-light btn red white-text btn-capitalize">Jiunge</a>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <img src="./assets//imgs/vibarua02.jpg" alt="image" loading="lazy" class="simple-bg">
            </div> 
            <!-- some companies logos -->
            <ul class="collection">
                <li class="collection-item">Kibo Palace Hotel</li>
                <li class="collection-item">B Q Contractors LTD</li>
                <li class="collection-item">Mwanza Quality Wines LTD</li>
                <li class="collection-item">Starpeco LTD</li>
            </ul>   
        </div>
        <div class="container col">
            <h5 class="center-align padding-top padding-bottom">Wasemayo Waajiri na Waajiriwa Kutuhusu</h5>
            <div class="col s12">
                    <div class="row">
                        <div class="col s12 m8 l4">
                            <div class="card horizontal hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/person2.jpg" alt="" loading="lazy">
                            </div>
                            <div class="text-padding">
                                <p><q cite="Juma Hassan" class="on-cite on-hover">
                                Ni rahisi kutumia
                                </q></p>  
                            </div>
                            </div>
                        </div>
                        <div class="col s12 m8 l4">
                            <div class="card horizontal hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/person1.jpg" alt="" loading="lazy">
                            </div>
                            <div class="text-padding">
                                <p><q cite="Amina Hussein" class="on-cite on-hover">
                                Majibu yanatoka kwa haraka
                                </q></p>  
                            </div>
                            </div>
                        </div>
                        <div class="col s12 m8 l4">
                            <div class="card horizontal hoverable">
                            <div class="card-image">
                                <img src="./assets//imgs/person4.jpg" alt="" loading="lazy">
                            </div>
                            <div class="text-padding">
                                <p><q cite="Christina Murillo" class="on-cite on-hover">
                                Ni rahisi kuomba ajira inayokufaa
                                </q></p>  
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </main>
    <?php require_once './includes/footer.php'; ?>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Custom JS -->
    <script src="./js/main.js"></script>
</body>
</html>