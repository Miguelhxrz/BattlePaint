<?php require_once('../model/User.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <title>Battle Paint | Register</title>
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
                        <a href="marketplace.php" title="Buy">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Buy
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="marketplace.php" title="Rent">
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
                            <span class="neon4"></span> Points
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
                        <a href="marketplace.php" title="Connect">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Marketplace
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
    </header>

    <main class="main">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="register" id="register">

            <section class="register__title">
                <h2> Create Account </h2>
            </section>

            <section class="register__block one">
                <!-- group username -->
                <div class="register__group" id="register__username">
                    <label for="username" class="register__block--label">Username</label>
                    <div id="group__input">
                        <input type="text" name="username" id="username" placeholder="Username" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">Username must be 4 to 15 characters (only a-z, 0-9, _).</p>
                </div>

                <!-- group birth -->
                <div class="register__group" id="register__birth">
                    <label for="birth" class="register__block--label">Birth</label>
                    <div id="group__input">
                        <input type="date" name="birth" id="birth" class="register__block--input">
                    </div>
                </div>
            </section>

            <section class="register__block two">
                <!-- group gender -->
                <div class="register__group" id="register__gender">
                    <label for="gender" class="register__block--label">Gender</label>
                    <div id="group__input">
                        <select name="gender" id="gender" class="register__block--input">
                            <option disabled>Select a gender</option>
                            <option value="other">Other</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                </div>

                <!-- group email -->
                <div class="register__group" id="register__email">
                    <label for="email" class="register__block--label">Email</label>
                    <div id="group__input">
                        <input type="email" name="email" id="email" placeholder="Email" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">Mail can only contain letters, numbers, dots, hyphens and underscores.</p>
                </div>
            </section>
                    
            <section class="register__block three">
                <!-- group password -->                   
                <div class="register__group" id="register__password">
                    <label for="password" class="register__block--label">Password</label>
                    <div id="group__input">
                        <input type="password" name="password" id="password" placeholder="Password" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">The password must be from 4 to 15 digits.</p>
                </div>

                <!-- group id -->                   
                <div class="register__group" id="register__id">
                    <label for="password" class="register__block--label">assigned id</label>
                    <div id="group__input">
                        <input type="text" name="id" id="id" readonly value='Holi' onmousedown="return false" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">The password must be from 4 to 15 digits.</p>
                </div>

                <section class="php__hidden">
                    <input type="text" name='user_username' class="username__hidden">
                    <input type="password" name='user_pass' class="password__hidden">
                    <input type="text" name='user_email' class="email__hidden">
                    <input type="date" name='user_birth' class="birth__hidden">
                    <input type="text" name='user_gender' class="gender_hidden">
                </section>
                
                <!-- error message -->
                <div class="register__message" id="register__message">
                    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>¡Error!</b> Fill in all registration fields correctly.</p>
                </div>

                <div class="register__block--cta">
                    <!-- Boton submit -->
                    <input type="submit" name="btn_submit" class="register__block--button" value="Create Account">
                    
                    <a href="login_page.php" class="register__block--link">Already have an account?</a>
                    <!-- registration complete -->
                    <p class="register__complete" id="register__complete"><i class="fa-solid fa-check"></i> Registration successfully completed!</p>
                </div>
            </section>

        </form>
            <?php
                    
                if(isset($_POST['btn_submit'])){

                    $user = new User();

                    $user_username = $_POST['user_username'];
                    $user_pass = $_POST['user_pass'];
                    $user_email = $_POST['user_email'];
                    $user_birth = $_POST['user_birth'];
                    $user_gender = $_POST['user_gender'];

                    $user->setUsername($user_username);
                    $user->setPassword($user_pass);
                    $user->setEmail($user_email);
                    $user->setBirth($user_birth);
                    $user->setGender($user_gender);

                    $result = $user->addUser();

                    var_dump($result);
                }        


            ?>


    </main>

    <footer>

    </footer>

    <script src="../js/register_page.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>