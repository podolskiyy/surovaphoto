<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="media/css/reset.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <title>Contact</title>
    </head>
    <header class="header">
        <div class="header__content">
            <a class="logo" href="#">
                <img class="logo__img" src="" alt="LOGO">
            </a>

            <nav class="nav">
                <input id="menu__toggle" type="checkbox"/>
                <label class="toggle-button" for="menu__toggle">
                    <span class="bar"></span>
                </label>
                <ul class="nav__links">
                    <a class="nav__link" href="#">MYSELF</a>
                    <a class="nav__link" href="#">MY WORK</a>
                    <a class="nav__link" href="#">MY CONTACT</a>
                </ul>
            </nav>
        </div>
    </header>
<body class="page">

    <main class="contact">

        <div class="contact__text">
            <h4 class="contact__title">Contact</h4>
            <p class="contact__email">yuliasurova</p>
        </div>

        <span class="divide"></span>

        <div class="form">
            <form action="send.php" method="post" class="form__content">
                <label class="label" for="">Name*</label>
                <input class="input" type="text" name="name" placeholder="Enter Your Full Name" required>

                <label class="label" for="">Email*</label>
                <input class="input" type="email" name="email" placeholder="Enter Your Email" required>

                <label class="label" for="">Message*</label>
                <textarea class="input form__comment" rows="15" cols="50" name="message" required>
                </textarea>
                <input class="form__btn" type="submit" value="Send" name="send">
            </form>
        </div>

    </main>

    <footer class="contact-me">
        <div class="contact-me__copyright copyright">
            <div class="copyright__content">
                <h5 class="copyright__text">Copyright <i class="bi bi-c-circle"></i> Yulia Surova. All right reserved.</h5>
            </div>
        </div>
    </footer>
</body>
</html> 