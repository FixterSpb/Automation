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
            <header class="header">
                <div class="header__topline">
                    <div class="logo logo_header">
                        <a href="/" class="logo__link">
                            <img src="img/logo.png" alt="icon logo" class="logo__img">
                        </a>
                    </div>
                    <div class="address-book">
                        <a href="contacts.php" class="address-book__link">
                            <img src="img/address_book.png" alt="icon" class="address-book__img">
                        </a>
                    </div>
                </div>
                <div class="header__content">


                    <h1 class="header__title">
                        New Automation<br>
                        Tool for Your
                    </h1>
                    <p class="header__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus tristique vulputate
                        ultrices
                        ut
                        mauris tellus at. Posuere sollicitudin odio tellus elit.
                    </p>

                    <a href="#" class="button">
                        See Our Project
                    </a>

                    <div class="header__img">

                    </div>

                </div>
            </header>

            <section class="content">
                <header class="content__header">
                    <h2 class="content__title">
                        What we do to help our client grow in digital era
                    </h2>
                </header>

                <div class="row center">
                    <article class="col-xl-4 col-lg-12">
                        <div class="content__box">
                            <div class="content__img content__img_1">
                                <div class="content__img content__img_1-1">
                                </div>
                            </div>
                            <h3 class="content__name">Make Your business To Be Better Famous In Internet</h3>
                            <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="#" class="content__link">Learn more <img src="img/arrow.png" alt="icon"></a>
                        </div>
                    </article>

                    <article class="col-xl-4 col-lg-12">
                        <div class="content__box">
                            <div class="content__img content__img_2">
                                <div class="content__img content__img_2-1">
                                </div>
                            </div>
                            <h3 class="content__name">Bring Technology To Your Comfrotable Home</h3>
                            <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="#" class="content__link">Learn more <img src="img/arrow.png" alt="icon"></a>
                        </div>
                    </article>

                    <article class="col-xl-4 col-lg-12">
                        <div class="content__box">
                            <div class="content__img content__img_3">
                                <div class="content__img content__img_3-1">
                                </div>
                            </div>
                            <h3 class="content__name">Build Your Digital Product
                                That Suitable For Your Need</h3>
                            <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="#" class="content__link">Learn more <img src="img/arrow.png" alt="icon"></a>
                        </div>
                    </article>
                </div>
            </section>

            <section class="projects">
                <header class="projects__header">
                    <h2 class="projects__title">
                        Our Finished Project
                    </h2>
                    <p class="projects__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </header>

                <div class="row">
                    <div class="col-12">
                        <div class="projects__box">
                            <img src="img/project_1.png" alt="project" class="projects__img">
                            <h3 class="projects__name projects__name_right">
                                Smart Home Installation
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="projects__box projects__box_2">
                            <img src="img/project_2.png" alt="project" class="projects__img">
                            <h3 class="projects__name">
                                Sparklite App
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="projects__box projects__box_3">
                            <img src="img/project_3.png" alt="project" class="projects__img">
                            <h3 class="projects__name">
                                Car-Rapetition App
                            </h3>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php   
            include "php/footer.php";
        ?>
    </div>
</body>

</html>