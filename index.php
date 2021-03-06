<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <script src="./js/redirect.js"></script>
    <title>Battle Paint</title>
</head>

<body>
    <header>
        <section class="logo"> 
            <img src="./source/img/svg/logoBattlePaint1.svg" alt=""> 
        </section>
        <nav class="links">
            <a href="#home" class="links__1">Home</a>
            <a href="#gameplay" class="links__2 ">Gameplay</a>
            <a href="#coins" class="links__3 ">Battle Coins</a>
            <a href="#items" class="links__4 ">NFT's items</a>
            <a href="#developers" class="links__6 ">Developers</a>
            <a href="#partners" class="links__5 ">Partners</a>
        </nav>
        <section class="boton ">
            <article class="boton__container ">
                <a href="view/register_page.php" class="boton__titulo ">Create Account</a>
            </article>
        </section>
    </header>

    <section class="return__container">
        <a href="view/marketplace.php">
            <img src="./source/img/svg/marketplace.svg" alt="" title="marketplace">
        </a>
    </section>

    <main>
        <section class="home" id="home">
            <div class="home__divisor--up">
                <article class="home__logo">
                    <img src="./source/img/svg/logoBattlePaint2.svg " alt="LogoBattlePaint">
                    <div class="hashtag">
                        <h3>#BattlePaint #PaintPoint #PaintBucket #P2E</h3>
                    </div>
                </article>
                <article class="home__description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac enim ac arcu molestie maximus. Proin gravida.</p>
                    <img src="./source/img/svg/figure2.svg" alt="imgBattlePaint">
                </article>
            </div>
            <div class="home__divisor--down ">
                <article class="home__players ">
                    <div class="home_players--container ">
                        <div class="line "></div>
                        <div class="home__players--number ">
                            <h3>REGISTERED PLAYERS</h3>
                            <h3>0</h3>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="gameplay" id="gameplay">
            <div class="main">
                <div class="gameplay__title">
                    <h2> Gameplay </h2>
                </div>

                <div class="gameplay__block one">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, corporis ab quidem fugit dicta libero modi optio soluta tempore minima! </p>
                </div>

                <div class="gameplay__block two">
                    <div class="gameplay__block--video">
                        <img src="./source/img/svg/Polygon 1.svg" alt="playVideo">
                    </div>
                    <h2 class="gameplay__block--text"> Watch Video </h2>
                </div>
            </div>
        </section>

        <section class="coins ">
            <article id="coins" class="coins__title ">
                <h3>Battle Paint Coins</h3>
            </article>
            <div class="container-slider">
                <div class="slider" id="slider">
                    <div class="slider__section">
                        <div class="coins__slider">
                            <div class="coins__name">
                                <h5>Paint Point (PP)</h5>
                            </div>
                            <div class="coin__description--1 ">
                                <div class="block-1">
                                    <div class="card-1">
                                        <img class="play" src="./source/img/svg/14485861891536063363 1.svg" alt="">
                                        <h6 class="titulo">Play to Earn</h6>
                                    </div>
                                    <div class="card-1">
                                        <img src="./source/img/svg/marketplace 3.svg" alt="">
                                        <h6 class="titulo">Get it with PB</h6>
                                    </div>
                                </div>
                                <div class="block-2">
                                    <div class="img">
                                        <img src="./source/img/svg/paint-point.svg" alt="paintPoint">
                                    </div>
                                </div>
                                <div class="block-3">
                                    <div class="card-1">
                                        <img src="./source/img/svg/3723023471637820077 1.svg" alt="">
                                        <h6 class="titulo">Easy to Earn</h6>
                                    </div>
                                    <div class="card-1">
                                        <img src="./source/img/svg/5254420031586787250 1.svg" alt="">
                                        <h6 class="titulo">Change it for PB</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__section">
                        <div class="coins__slider">
                            <div class="coins__name">
                                <h5>Paint Backets (PB)</h5>
                            </div>
                            <div class="coin__description--1 ">
                                <div class="block-1">
                                    <div class="card-1">
                                        <img class="play" src="./source/img/svg/14485861891536063363 1.svg" alt="">
                                        <h6 class="titulo">Change to Earn</h6>
                                    </div>
                                    <div class="card-1">
                                        <img src="./source/img/svg/marketplace 3.svg" alt="">
                                        <h6 class="titulo">Buy it in market</h6>
                                    </div>
                                </div>
                                <div class="block-2">
                                    <div class="img">
                                        <img src="./source/img/paint-backets2.png" alt="paintPoint">
                                    </div>
                                </div>
                                <div class="block-3">
                                    <div class="card-1">
                                        <img src="./source/img/svg/3723023471637820077 1.svg" alt="">
                                        <h6 class="titulo">Buy Skins</h6>
                                    </div>
                                    <div class="card-1">
                                        <img src="./source/img/svg/5254420031586787250 1.svg" alt="">
                                        <h6 class="titulo">Save-Exchange</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
                <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
            </div>
        </section>

        <section class="items">
            <article id="items" class="items__title ">
                <h3>NFT's Items</h3>
            </article>

            <section class="nft__container">

                <article class="nft__card">
                    <figure class="nft__img">
                        <img src="./source/img/characters/test.png" alt="Shanna">
                    </figure>
                    <div class="nft__rank a">
                        <h4>A</h4>
                    </div>
                    <div class="nft__name a">
                        <h3>Shanna</h3>
                        <p>??? Dinasty's Ranger ???</p>
                    </div>
                    <div class="nft__price">
                        <article class="price">
                            <h4>Price PB:</h4>
                            <div class="price__pay">
                                <img src="./source/img/paint-backets2.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                        <article class="price">
                            <h4>Price USD:</h4>
                            <div class="price__pay">
                                <img src="./source/img/usd.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                    </div>
                </article>

                <article class="nft__card">
                    <figure class="nft__img">
                        <img src="./source/img/characters/test2.png" alt="Raidon">
                    </figure>
                    <div class="nft__rank ">
                        <h4>S</h4>
                    </div>
                    <div class="nft__name">
                        <h3>Raidon</h3>
                        <p>??? Galaxy Ranger ???</p>
                    </div>
                    <div class="nft__price">
                        <article class="price">
                            <h4>Price PB:</h4>
                            <div class="price__pay">
                                <img src="./source/img/paint-backets2.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                        <article class="price">
                            <h4>Price USD:</h4>
                            <div class="price__pay">
                                <img src="./source/img/usd.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                    </div>
                </article>

                <article class="nft__card">
                    <figure class="nft__img">
                        <img src="./source/img/characters/test3.png" alt="Veinka">
                    </figure>
                    <div class="nft__rank ">
                        <h4>B</h4>
                    </div>
                    <div class="nft__name">
                        <h3>Veinka</h3>
                        <p>??? The protective gunner ???</p>
                    </div>
                    <div class="nft__price">
                        <article class="price">
                            <h4>Price PB:</h4>
                            <div class="price__pay">
                                <img src="./source/img/paint-backets2.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                        <article class="price">
                            <h4>Price USD:</h4>
                            <div class="price__pay">
                                <img src="./source/img/usd.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                    </div>
                </article>


                <article class="nft__card">
                    <figure class="nft__img">
                        <img src="./source/img/characters/test4.png" alt="Mary">
                    </figure>
                    <div class="nft__rank ">
                        <h4>A</h4>
                    </div>
                    <div class="nft__name">
                        <h3>Mary</h3>
                        <p>??? The Forgotten noble ???</p>
                    </div>
                    <div class="nft__price">
                        <article class="price">
                            <h4>Price PB:</h4>
                            <div class="price__pay">
                                <img src="./source/img/paint-backets2.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                        <article class="price">
                            <h4>Price USD:</h4>
                            <div class="price__pay">
                                <img src="./source/img/usd.png" alt="paint bucket icon">
                                <h4>????</h4>
                            </div>
                        </article>
                    </div>
                </article>
            </section>

            <div class="sliders">
                <img src="./source/img/svg/Ellipse 4.svg" alt="">
                <img src="./source/img/svg/Ellipse 4.svg" alt="">
                <img src="./source/img/svg/Ellipse 4.svg" alt="">
            </div>
            </article>
        </section>

        <section class="developers" id="developers">
            <div class="developers__title ">
                <h3>Developers</h3>
            </div>
            <article class="developers__container ">
                <div class="developers__imagenes">
                    <div class="developers__imagenes--one">
                        <img src="./source/img/svg/mariavalen.svg " alt=" ">
                        <img src="./source/img/svg/fabi.svg " alt=" ">
                    </div>
                    <div class="developers__imagenes--two">
                        <img src="./source/img/svg/vanessa.svg " alt=" ">
                        <img src="./source/img/svg/miguel.svg " alt=" ">
                    </div>
                </div>
            </article>
        </section>

        <section class="partners" id="partners">
            <article class="partners__container ">
                <div class="partners__title ">
                    <h3>Partners - Sponsors</h3>
                </div>
                <div class="partners__imagenes ">
                    <img src="./source/img/svg/Sponsor arca games.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor studio audl.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor maria vp.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor vanesa m.svg " alt=" ">
                </div>
                <div class="partners__imagenes ">
                    <img src="./source/img/svg/Sponsor berw.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor game store.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor fabimar.svg " alt=" ">
                    <img src="./source/img/svg/Sponsor miguelon.svg " alt=" ">
                </div>
            </article>
        </section>
    </main>
    <script src="./js/slider.js"></script>
</body>

</html>