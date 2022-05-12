<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/marketplace.css">
    <script src="./js/redirect.js"></script>
    <title>Battle Paint | Marketplace</title>
</head>

<body>
    <header class="header">

        <a class="header__name" href="../index.php">
            <h1 class="header__name">Battle Paint</h1>
        </a>


        <nav class="menu__container">

            <ul class="menu">

                <div class="menu__select">

                    <li class="menu__item">
                        <a href="#" title="Buy">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Buy
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="#" title="Rent">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Rent
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="points.php" title="Points">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Paints
                        </a>
                    </li>
                </div>

                <div class="menu__user">

                    <li class="menu__item">
                        <a href="#" title="Support">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Support
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="login_page.php" title="Connect">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Login
                        </a>
                    </li>

                </div>
            </ul>
        </nav>

    </header>
    <main class="container">

        <section class="notice__container">
            <article class="notice__article">
                <div class="controls__container">
                    <div class="control"></div>
                    <div class="control"></div>
                    <div class="control"></div>
                </div>
            </article>

        </section>

        <section class="filter__container">

            <form action="" class="filter__form">

                <section class="filter__search filter">

                    <input type="text" class="search" placeholder="Search..." name="es_search">

                </section>

                <section class="filter__rank filter">

                    <h3 class="form__title">Rank:</h3>

                    <input type="checkbox" name="rank-s" id="rank-s">
                    <label for="rank-s">
              <div class="rank__check"></div>
              <p class="rank s">S</p>
            </label>

                    <input type="checkbox" name="rank-a" id="rank-a">
                    <label for="rank-a">
              <div class="rank__check"></div>
              <p class="rank a">A</p>
            </label>

                    <input type="checkbox" name="rank-b" id="rank-b">
                    <label for="rank-b">
              <div class="rank__check"></div>
              <p class="rank b">B</p>
            </label>

                </section>

                <section class="filter__level">

                    <h3 class="form__title">Level:</h3>
                    <input type="number" name="level" id="level" placeholder="30">
                </section>

                <section class="filter__level">

                    <h3 class="form__title">Battles:</h3>
                    <input type="number" name="level" id="level" placeholder="30">
                </section>

                <section class="filter__price">

                    <h3 class="form__title">Price:</h3>
                    <label for="from__price">From
            <input type="number" name="from__price" 
            id="level" placeholder="30">
          </label>
                    <label for="from__price">To
            <input type="number" name="to__price"   id="level" placeholder="30">
          </label>
                </section>

                <input type="submit" value="Search" class="filter__search-btn">

            </form>

        </section>

        <section class="nft__container">

            <article class="nft__card">
                <figure class="nft__img">
                    <img src="../source/img/Characters/test.png" alt="Shanna">
                </figure>
                <div class="nft__rank a">
                    <h4>A</h4>
                </div>
                <div class="nft__name a">
                    <h3>Shanna</h3>
                    <p>• Dinasty's Ranger •</p>
                </div>
                <div class="nft__price">
                    <article class="price">
                        <h4>Price PB:</h4>
                        <div class="price__pay">
                            <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                    <article class="price">
                        <h4>Price USD:</h4>
                        <div class="price__pay">
                            <img src="../source/img/usd.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                </div>
            </article>

            <article class="nft__card">
                <figure class="nft__img">
                    <img src="../source/img/Characters/test2.png" alt="Raidon">
                </figure>
                <div class="nft__rank ">
                    <h4>S</h4>
                </div>
                <div class="nft__name">
                    <h3>Raidon</h3>
                    <p>• Galaxy Ranger •</p>
                </div>
                <div class="nft__price">
                    <article class="price">
                        <h4>Price PB:</h4>
                        <div class="price__pay">
                            <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                    <article class="price">
                        <h4>Price USD:</h4>
                        <div class="price__pay">
                            <img src="../source/img/usd.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                </div>
            </article>

            <article class="nft__card">
                <figure class="nft__img">
                    <img src="../source/img/Characters/test3.png" alt="Veinka">
                </figure>
                <div class="nft__rank ">
                    <h4>B</h4>
                </div>
                <div class="nft__name">
                    <h3>Veinka</h3>
                    <p>• The protective gunner •</p>
                </div>
                <div class="nft__price">
                    <article class="price">
                        <h4>Price PB:</h4>
                        <div class="price__pay">
                            <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                    <article class="price">
                        <h4>Price USD:</h4>
                        <div class="price__pay">
                            <img src="../source/img/usd.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                </div>
            </article>


            <article class="nft__card">
                <figure class="nft__img">
                    <img src="../source/img/Characters/test4.png" alt="Mary">
                </figure>
                <div class="nft__rank ">
                    <h4>A</h4>
                </div>
                <div class="nft__name">
                    <h3>Mary</h3>
                    <p>• The Forgotten noble •</p>
                </div>
                <div class="nft__price">
                    <article class="price">
                        <h4>Price PB:</h4>
                        <div class="price__pay">
                            <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                    <article class="price">
                        <h4>Price USD:</h4>
                        <div class="price__pay">
                            <img src="../source/img/usd.png" alt="paint bucket icon">
                            <h4>????</h4>
                        </div>
                    </article>
                </div>
            </article>
        </section>
        <section class="return__container">
            <a href="../index.php">
                <img src="../source/img/svg/home.svg" alt="" title="return home">
            </a>
        </section>
    </main>
</body>

</html>