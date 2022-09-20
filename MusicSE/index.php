<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>The Smart Exchange</title>
</head>
<body>

    <main class="app">
        <section class="welcome">
            <div class="welcome_main_title">
                <div class="welcome_title">
                    <h1 id="welcome_text">Welcome to the Game</h1>
                </div>
                <div class="welcome_icon">
                    <img src="/assets/img/body-organ.png" alt="">  
                </div>
            </div>
            <div class="welcome_main_button">
                <a href="#">Play</a>
                <i class="fa fa-arrow-down-wide-short"></i>
            </div> 
            <div class="welcome_skw_main">
                <span class="welcome_skw-p"></span>
                <span class="welcome_skw-s"></span>
            </div>
        </section>
        
        <nav class="menu-sticky">
            <div class="menu-sticky_bar">
                <a class="menu-sticky_show">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="menu-sticky_logo">
                <span class="logo"><img src="/assets/img/cranio.webp"></span>
            </div>

            <ul class="items">
                <li><i class="fa fa-door-closed"></i><a>Sair</a></li>
                <li><i class="fa fa-power-off"></i><a>Desligar</a></li>
                <span class="logo"><img src="/assets/img/cranio.webp"></span>
                <li><i class="fas fa-person-running"></i><a>Correr</a></li>
                <li><i class="fa fa-person-falling"></i><a>Desmaiar</a></li>
            </ul>
        </nav>

        <section class="prologo">
            <div class="prologo_title">
                <h1>Prólogo</h1>
            </div>
            <div class="prologo_main">
                <div class="prologo_text">
                    <h1>Iniciando o teste</h1>
                    <p>O câmbio inteligente é o futuro para uma nação que 
                        almeja chegar no topo, principalmente com uma bela
                        e devassa população que em tempos normais tentam
                        atacar corporações dirariamente com retóricas nas
                        redes sociais. Para tudo a um remédio e tal pirula 
                        se faz presente no projeto. Pessoas são coletadas 
                        semanalmente para provar de seu próprio ideal. Algo
                        que muitos enxergam como antiquado, antigo, ultrapassado,
                        mas que todos nós sabemos, o bom e velho ensinamento tradicional 
                        faz com que as pessoas aprendam e não criem devaneios a cerca da realidade.
                        Para evoluir, é necessarios sacrifícios, e tais sacrifícios impedem
                        que o ser fique estático em seus pensamentos, o levando a produtividade
                        total em grande escala na sociedade. Prosperidade não vem em conjunto com
                        meros anseios por algo ou óptica em torno dos mesmos. Com tudo isso levaremos
                        a capacidade e novos meios de produção, sendo claro que não é uma mera amenidade e sim
                        uma necessidade para qual a sociedade.
                    </p>
                </div>
                <div class="prologo_img">
                    <img src="/assets/img/Arasaka.svg" alt="">
                </div>
            </div>
        </section>

        <section class="parallax_main"></section>

        <section class="enigma">
            <div class="enigma_main">
                <div class="enigma_content">
                    <h1>Epílogo</h1>
                    <div class="enigma_text">
                        <p>Contudo todas as coisas ao redor do planeta é concentrado e contruído
                            em entorno de uma grandes roda, de grande cumes, sendo que em múltiplas 
                            vezes é notável a presença da parte baixa no topo, mesmo contendo diversos 
                            empecilhos para que tal acontecimento ocorra. As vezes a quantidade supera
                            a qualidade, sendo provido corporações por grande parte do território.
                            É inevitável que não haja semelhança entre as partes, mas a mais benevolente 
                            ganhará tal prestigio merecido.
                        </p>
                    </div>
                    <form action="controll.php" method="POST">
                            <div class="form_title">
                                <h1>لکڻ مشڪل ٿي گذريو</h1>
                            </div>
                            <div class="form_input">
                                <input type="text" name="avaria" autocomplete="off">
                            </div>
                            <div class="form_button">
                                <button>Enviar</button>
                            </div>
                            <audio controls>
                                <source src="./Morse.mp3">
                            </audio>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--Adding Scripts-->

    <script src="./main.js"></script>




</body>
</html>