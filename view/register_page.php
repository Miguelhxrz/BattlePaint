<?php 
session_start();
require_once('../model/User.php');
?>

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


    <main class="main">
        <form action="" method="" class="register" id="register">

            <section class="register__title">
                <h2> Create Account </h2>
            </section>

            <section class="register__block one">
                <!-- group username -->
                <div class="register__group" id="register__username">
                    <label for="username" name="username" class="register__block--label">Username</label>
                    <div id="group__input">
                        <input type="text" name="username" id="username" placeholder="Username" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">Username must be 6 to 16 characters (only a-z, 0-9, _).</p>
                </div>

                <!-- group birth -->
                <div class="register__group" id="register__birth">
                    <label for="birth" class="register__block--label">Birth</label>
                    <div id="group__input">
                        <input type="date" name="birth" id="birth" class="register__block--input">
                    </div>
                    <p class="register__input--error" id="register__input--error">Must be over 18 years of age.</p>
                </div>

                <!-- group gender -->
                <div class="register__group" id="register__gender">
                    <label for="gender" class="register__block--label">Gender</label>
                    <div id="group__input">
                        <select name="gender" id="gender" class="register__block--input">
                            <optgroup label="Select an option">
                                <option value="other">Other</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </section>

            <section class="register__block two">
                <!-- group email -->
                <div class="register__group" id="register__email">
                    <label for="email" class="register__block--label">Email</label>
                    <div id="group__input">
                        <input type="email" name="email" id="email" placeholder="Email" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">Mail can only contain letters, numbers, dots, hyphens and underscores.</p>
                </div>

                <!-- group password -->                   
                <div class="register__group" id="register__password">
                    <label for="password" class="register__block--label">Password</label>
                    <div id="group__input">
                        <input type="password" name="password" id="password" placeholder="Password" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error" id="register__input--error">The password must be from 8 to 20 digits.</p>
                </div>

                <!-- group id -->                   
                <div class="register__group" id="register__id">
                    <label for="id" class="register__block--label">Assigned ID</label>
                    <div id="group__input">
                        <input type="text" name="id" id="id" readonly value='' onmousedown="return false" class="register__block--input">
                    </div>
                </div>
            </section>
                    
            <section class="register__block three">                
                <!-- error message -->
                <div class="register__message" id="register__message">
                    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>??Error!</b> Fill in all registration fields correctly.</p>
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
        <form name='form_hidden' method="POST" class="form__hidden">
            <input type="text" name="user_id" id="user_id">
            <input type="text" name="user_username" id="user_username">
            <input type="text" name="user_password" id="user_password">
            <input type="text" name="user_email" id="user_email">
            <input type="text" name="user_birth" id="user_birth">
            <input type="text" name="user_gender" id="user_gender">
        </form>   
        
        <?php 

            if( isset($_POST['user_id']) && isset($_POST['user_username']) && isset($_POST['user_password']) && isset($_POST['user_email']) && isset($_POST['user_birth']) && isset($_POST['user_gender']) ) {
                
                $user_id = $_POST['user_id'];
                $user_username = $_POST['user_username'];
                $user_password = $_POST['user_password'];
                $user_email = $_POST['user_email'];
                $user_birth = $_POST['user_birth'];
                $user_gender = $_POST['user_gender'];

                $_SESSION['username'] = $_POST['user_username'];
                $_SESSION['password'] = $user_password;
                $_SESSION['email'] = $user_email;
                $_SESSION['birth'] = $user_birth;
                $_SESSION['gender'] = $user_gender;
                $_SESSION['id'] = $_POST['user_id'];
                $_SESSION['balance'] = '0';

                $user = new User();

                $user->setID($user_id);
                $user->setUsername($user_username);
                $user->setPassword($user_password);
                $user->setEmail($user_email);
                $user->setBirth($user_birth);
                $user->setGender($user_gender);

                $user->addUser();

                var_dump($_SESSION['balance']);
                var_dump($_SESSION['id']);
                var_dump($_SESSION['username']);

                echo "<script>window.location.href = '../view/login_page.php';</script>";

            }
                
        ?>


    </main>

    <footer>

    </footer>

    <script src="../js/register_page.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>