<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include "php/head.php";
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="top">
            <header class="contacts">
                <div class="contacts__topline">
                    <div class="logo logo_header">
                        <a href="/" class="logo__link">
                            <img src="img/logo.png" alt="icon logo" class="logo__img">
                        </a>
                    </div>
                    <div class="menu-box">
                        <a href="#" class="menu-box__link">
                            <img src="img/menu.svg" alt="icon" class="menu-box__img">
                        </a>
                    </div>
                </div>
                <div class="contacts__hero">
                    <h1 class="contacts__title">
                        Contact Us
                    </h1>
                    <p class="contacts__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </header>

            <div class="container-contacts">

                <div class="content-contacts">
                    <div class="content-contacts__img">
                    </div>
                    <div class="content-contacts__box">
                        <h2 class="content-contacts__title">ADDRESS</h2>
                        <p class="content-contacts__text">Id convallis placerat sit sed duis id amet volutpat quam a,
                            pharetra.</p>
                    </div>
                    <div class="content-contacts__box">
                        <h2 class="content-contacts__title">PHONE</h2>
                        <p class="content-contacts__text"><i class="fa fa-phone content-contacts__icon"
                                aria-hidden="true"></i>+62-812-7313-4321</p>
                        <p class="content-contacts__text"><i class="fa fa-phone content-contacts__icon"
                                aria-hidden="true"></i>+62-817-000-1234</p>
                    </div>
                    <div class="content-contacts__box">
                        <h2 class="content-contacts__title">ONLINE SERVICE</h2>
                        <p class="content-contacts__text">
                            <i class="fa fa-globe content-contacts__icon" aria-hidden="true"></i>

                            www.afrianska.com</p>
                        <p class="content-contacts__text"><i class="fa fa-envelope content-contacts__icon"
                                aria-hidden="true"></i>hello.afrian@gmail.com</p>
                    </div>
                </div>

                <form action="#" class="form-contacts">
                    <h2 class="form-contacts__title">SEND US MESSAGE</h2>
                    <label for="full_name" class="form-contacts__label">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-contacts__input"
                        placeholder="Your Name">
                    <label for="email" class="form-contacts__label">Email</label>
                    <input type="text" name="email" id="email" class="form-contacts__input" placeholder="Your Email">
                    <label for="message" class="form-contacts__label">Message</label>
                    <textarea name="message" id="message" cols="30" rows="3" class="form-contacts__input"
                        placeholder="Your Message"></textarea>
                    <a href="#" class="form-contacts__button">SUBMIT</a>

                </form>

            </div>



            <div class="map-img">
            </div>
        </div>
        <?php   
            include "php/footer.php";
        ?>
    </div>
</body>

</html>