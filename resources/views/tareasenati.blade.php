<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regiones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400&display=swap');
   
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    color: rgb(8, 8, 8);
    scroll-behavior: smooth;
}

body {
    overflow-x: hidden;
    background-color: dimgray;
}

section {
    padding: 3.9rem 0;
    overflow: hidden;
}

img {
    width: 100%;
    max-width: 100%;
}

a {
    text-decoration: none;
}

p {
    font-size: 1.6rem;
}

.container {
    width: 100%;
    max-width: 122.5rem;
    margin:  0 auto;
    padding: 0 2.4rem;
}

header {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-image: linear-gradient(to bottom, rgba(0,0,0,.5), transparent);
}
.nav {
    height: 7.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-toggle {
    color: rgb(240, 236, 236);
    font-size: 2.2rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 2.5rem;
    cursor: pointer;
    z-index: 1500;
}

.fa-times {
    display: none;
}

.nav-list {
    list-style: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100vh;
    background-color: #252525;
    padding: 4.4rem;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    z-index: 1250;
    transform: translateX(-100%);
   
}

.nav::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .8);
    z-index: 1000;
    opacity: 0;
    transform: scale(0);
    transition: opacity .5s;

}

.open .fa-times {
    display: block;
}

.open .fa-bars {
    display: none;
}

.open .nav-list {
    transform: translateX(0);
}
.open .nav::before{
    opacity: 1;
    transform: scale(1);
}

.logo {
    color: #fff;
    font-size: 2rem;
    font-weight: 600;
}

.nav-item {
    border-bottom: 2px solid rgba(255, 255, 255, .3);
}

.nav-link {
    display: block;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.6rem;
    letter-spacing: 2px;
    margin-right: -2px;
}

.nav-link:hover {
    color: #0af167;
}

.hero {
    width: 100%;
    height: 70vh;
    background: url("https://www.peru.travel/Contenido/General/Imagen/pe/814/1.1/pacaya-samiria-selva-baja.jpg") center no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    text-align: center;
}

.h2-sub {
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    color: #d8fe03;
    font-weight: 600;
    line-height: 3.0;
}

.fil {
    text-transform: uppercase;
    font-size: 3rem;
}

.head {
    color: #fff;
    font-size: 3.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 3.5rem;
}

.circle {
    font-size: 1.5rem;
    color: #3bcc75;
    margin: 0 1.6rem;
}

.he-des h5 {
    color: #fff;
    font-size: 1.4rem;
    font-weight: 100;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
}

.btn {
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: -2px;
}

.cta-btn {
    font-size: 1.1rem;
    background-color: #ffc845;
    padding: 1.5rem 3rem;
    color: #fff;
    border-radius: .4rem;
}
.cta-btn:hover,
.cta-btn:focus {
    color: #fff;
    background-color: #3bcc75;
}


.global {
    text-align: center;
    margin-top: 3.9rem;
}

.dis-sto .global {
    margin-top: 6.9rem;
}

.global .circle {
    color: #3bcc75;
    margin: 2.4rem 0;
}

.hea-dark {
    color: #090909;
    letter-spacing: .7rem;
    margin-right: -.7rem;
}

.global .h2-sub {
    letter-spacing: -1px;
    line-height: .42;
}

.res-info {
    text-align: center;
}

.res-des {
    margin-bottom: 3rem;
}

.res-des p {
    line-height: 1.6;
    margin-bottom: 2.4rem
}

.taste {
    background: url("https://www.peru.travel/Contenido/Uploads/viczacha-yunga_637815066147561253.jpg") center no-repeat;
    background-size: cover;
}

.bt {
    min-height: 65vh;
    display: flex;
    align-items: center;
}

.milton {
 
    color: #fff;
    font-size: 2.3rem;
    font-family: 'Poppins', sans-serif;
   
    font-weight: 900;
    letter-spacing: 0.0rem;
}
     
.image-group {
    width: 100%;
    max-width: 100%;
   
}

.disco .res-des {
    padding-top: 3rem;
    margin-bottom: 0;
}

.pb {
    background: url("https://www.peru.travel/Contenido/Uploads/cactus-la-oroya-suni_637815066802019353.jpg") center no-repeat;
    background-size: cover;
}

.goku {
    background: url("https://www.monografias.com/trabajos82/regiones-naturales-peru-suni-puna-janca/image036.jpg") center no-repeat;
    background-size: cover;
}

.broly {
    background: url("https://t1.ev.ltmcdn.com/es/posts/9/7/7/flora_y_fauna_de_la_selva_peruana_1779_orig.jpg") center no-repeat;
    background-size: cover;
}

footer {
    padding: 7.9rem 0;
    background-color: #121212;
    color: #fff;
    text-align: center;
    position: relative;
}

.footer-content {
    overflow: hidden;
}

.footer-content h4 {
    font-size: 1.9rem;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    margin-bottom: 3rem;
}

.footer-content .circle{
    margin: 2.4rem 0;
}

.footer-content-about {
    margin-bottom: 5.4rem;
}

.footer-content-about p {
    line-height: 2;
}

.social-icons {
    list-style: none;
    margin-bottom: 5.4rem;
    display: flex;
    justify-content: center;
}

.social-icons i {
    font-size: 2rem;
    color: #3bcc75;
    padding: .8rem 2rem;
    
}

.social-icons i:hover,
.social-icons i:focus {
    color: #ffc845;
}

.news-form {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;

}

.news-input {
    width: 100%;
    max-width: 25rem;
    padding: 1rem;
    border-radius: .4rem;
}
.news-btn {
    background: transparent;
    border: none;
    color: #252525;
    cursor: pointer;
    font-size: 1.6rem;
    padding: 1px .6rem;
    position: absolute;
    top: 30%;
    margin-left: 20.5rem;
}

@media screen and (min-width: 900px) {

    section {
        padding: 7.9rem;
    }

    .menu-toggle {
        display: none;
    }

    .nav {
        justify-content: space-between;
    }

    .nav-list {
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        padding: 0;
        justify-content: initial;
        flex-direction: row;
        transform: initial;
        transition: initial;
    }

    .nav-item {
        margin: 0 2.4rem;
    }

    .nav-item:last-child {
        margin-right: 0;
    }

    .nav-link {
        font-size: 1.3rem;
    }

    .active {
        position: relative;
    }
    .active::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff;
        left: 0;
        bottom: -3px;
    }

    .h2-sub {
        font-size: 3rem;
    }

    .fil {
        font-size: 3rem;
    }
    .head {
        font-size: 4.7rem;
        letter-spacing: .8rem;
    }

    .res-info {
        display: flex;
        align-items: center;
    }

    .res-info > div {
        flex: 1;
    }

    .pad-rig {
        padding-right: 7rem;
    }

    .footer-content {
        max-width: 77.5rem;
        margin: auto;
    }

    .footer-content-about {
        max-width: 51.3rem;
        margin:  0 auto 5.4rem;
    }

    .footer-div{
        display: flex;
        justify-content: space-between;
    }

    .social-media,
    .news-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 0 1rem;
    }

   .news-btn {
       margin-left: 7.5rem;
   }
    
}

</style>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo">perú</a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contacto</a>
                    </li>
                    <!--para el login-->
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link ">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link ">register</a>
                    </li>
                     <!--fin del login-->
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenidos
            </h2>
            <h1 class="head">las 8 regiones del perú</h1>
            <div class="he-des">
                <h5>tarea senati</h5>
                <a href="#" class="btn cta-btn">Explora</a>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div>
                    <img src="https://www.peru.travel/Contenido/Uploads/desierto-de-sechura_637815065702977836.jpg" alt="">
                </div>
            
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">región Chala</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Se encuentra desde la costa hasta los 500 metros sobre el nivel del mar. Entre sus principales bondades están sus extensos desiertos como el de Sechura, con secciones montañosas y dunas que van desde la frontera con Chile en el sur hasta Tumbes.
                        Allí, diversas especies sobresalen y brillan como los lobos marinos y pintorescas aves guaneras, entre las que destacan el piquero, el guanay y el pelícano. ¿Cómo es el clima?  Predomina una atmósfera tropical seca en la costa norte y subtropical árida en la parte central y sureña.
                    </p>
                    <a href="#" class="btn cta-btn">Nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section class="taste bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">D</span>escubre
                </h2>
                <h1 class="head hea-dark">región Yunga</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="milton">Su elevación entre los 500 hasta los 2300 m s. n. m. abarca los Andes peruanos y una zona de la Amazonía. Aquí, el terreno es principalmente montañoso acompañado de maravillosos valles en donde se hallan plantas como la pitahaya, retama y sábila, además de frutos de chirimoya, lúcuma y palta.
                     Asimismo, es casa de especies como zorros, vizcachas, culebras, coloridas lagartijas, pumas, el famoso oso de anteojos, tigrillos y peculiares picaflores; estos últimos claves para la preservación de la flora local.</h1>
                </div>
              
            </div>
        </div>
    </section>


    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">región Quechua</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Ofrece un clima diverso, desde un ambiente templado hasta frío en diferentes etapas del año, incluso llegando a fuertes lluvias. ¿Cuáles son las principales bondades que presentan sus suelos y qué animales y plantas convergen en sus tierras?
                        Su piso altitudinal, que oscila entre los 2300 a 3500 m s. n. m., destaca por sus montañas con alisos, al igual que cuenta con aves como águilas, observadores halcones, ovinos y representativos camélidos (vicuñas y alpacas).
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX5JIdTDNIgnVK8LZo2ZtDboGSqPlP6A4lIw&usqp=CAU" alt="">
                </div>

            </div>
        </div>
    </section>

    
    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">D</span>escubre
                </h2>
                <h1 class="head hea-dark">región Suni</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="milton">Es una de las regiones con mayor variación en su suelo, lo cual la hace única. Y es que presenta una gran cantidad de lagunas, mesetas, montes y lagunas en sus 4000 a 4800 m s. n. m. a lo largo del Altiplano. Resalta con su imponente Meseta del Collao, que se extiende por Puno.
                    Presenta un clima frío con presencia de sol. Alberga animales como el cóndor, ave insignia de todo el Perú, chinchillas, serpientes y camélidos, al igual que en su tierra florecen líquenes, musgos y la puya raimondi.</h1>
                </div>            
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="https://www.peru.travel/Contenido/Uploads/laguna-conococha-puna_637815067432376703.jpg" alt="">

                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Región Puna</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Es una de las regiones con mayor variación en su suelo, lo cual la hace única. Y es que presenta una gran cantidad de lagunas, mesetas, montes y lagunas en sus 4000 a 4800 m s. n. m. a lo largo del Altiplano. Resalta con su imponente Meseta del Collao, que se extiende por Puno.
                        Presenta un clima frío con presencia de sol. Alberga animales como el cóndor, ave insignia de todo el Perú, chinchillas, serpientes y camélidos, al igual que en su tierra florecen líquenes, musgos y la puya raimondi.
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section class="goku">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">D</span>escubre
                </h2>
                <h1 class="head hea-dark">Región Janca</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="milton">Con un piso altitudinal que va desde los 4800 hasta los 6768 m s. n. m., es la más alta. Allí, los amplios nevados -como la Cordillera Blanca- y montañas escabrosas son características principales de su relieve.
                    ¿Qué podemos encontrar además de un clima frío con constantes nevadas? Entre su fauna brillan ejemplos como musgos, barbascos, canela y el tradicional árbol de la quina, flora que se luce en el Escudo Nacional del Perú. Asimismo, tiene especies como vicuñas, vizcachas y cóndores.</h1>
                </div>
              
            </div>
        </div>
    </section>

    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">región Selva Alta</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        También se le conoce como Rupa Rupa y va desde los 400 hasta los 1500 m s. n. m. en un terreno montañoso con presencia de cavernas, cuevas, valles y majestuosas quebradas. Se le considera una de las zonas con mayor biodiversidad con un clima tropical.
                        En su ecosistema viven especies entre las que sobresalen el otorongo, armadillos, el oso perezoso, reptiles, el halcón palomero y el tapir. Por su parte, la palma del aceite, aguaje y el árbol del pan son parte de su flora.
                   
                    </p>
                    <a href="#" class="btn cta-btn">nosotros</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://www.peru.travel/Contenido/Uploads/serpiente-tingo-maria-rupa-rupa_637815068530948942.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

<section class="broly">
    <div class="container">
        <div class="global">
            <h2 class="h2-sub">
                <span class="fil">D</span>escubre
            </h2>
            <h1 class="head hea-dark">Región Selva Baja</h1>
            <div class="circle">
                <i class="fas fa-circle"></i>
            </div>
            <div>
                <h1 class="milton">Se ubica entre 80 a 400 metros m s. n. m. en plena Amazonía peruana y tiene como particularidad un clima que, si bien es cálido, presenta lluvias. También renombrada como Omagua, cuenta con gran presencia de ríos, llanuras, lagunas y colinas, ambiente ideal para la preservación de bosques.
                Allí encontramos cerca de 2500 clases de árboles entre cedros, robles criollos, palmeras, caobas y helechos. Asimismo, en fauna sobresalen especies el paiche, la sachavaca, el otorongo, guacamayos, charapas, caimanes y ronsocos.</h1>
            </div>
          
        </div>
    </div>
</section>

<footer>
        <div class="container">
            <div class="footer-content">

                <div class="footer-content-about">
                    <h4>Nosotros</h4>
                    <div class="circle">
                        <i class="fas fa-circle"></i>
                    </div>
                    <p>somos alumnos de senati aprendiendo cada dia mas mi nombre es
                        boris milton mendoza velez de villa y esto es las 8 regiones del perú
                        visitanos en nuestras redes sociales y sigue aprendiendo mas xd
                    </p>
                </div>
                <div class="footer-div">
                    <div class="social-media">
                        <h4>encuentranos en</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://m.facebook.com"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://www.reddit.com"><i class="fab fa-reddit"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/usermilton/tarea_senati.git"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="Escribe tu email"
                            >
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script>

const selectElement = function(element) {
    return document.querySelector(element);
}


let menuToggle = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggle.addEventListener('click', function(){
    body.classList.toggle('open');
})

</script>


</body>
</html>