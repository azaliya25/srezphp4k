<? include('includes/connect.php') ?>
<? include('includes/session.php') ?>
<? include('includes/header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANUAL</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon/favicon.svg" type="image/x-icon">

</head>

<body>

    <div class="banner">
        <div class="banner-content">
            <p class="banner-main-text">Men’s health. The way it should be.</p>
            <p class="banner-secondary-text">No waiting rooms or awkward conversations. Just clinically proven
                treatments direct to your door with support along the way.</p>
            <div class="banner-buttons">
                <button class="banner-button">Get Started</button>
                <button class="banner-button">View Treatments</button>
            </div>
        </div>
    </div>

    <div class="under-banner container">
        <div class="under-banner-content">

            <div class="under-banner-card">
                <img src="images/under-banner/first.png" alt="UK licenced medication">
                <p class="under-banner-text">UK licenced medication</p>
            </div>
            <div class="under-banner-card">
                <img src="images/under-banner/second.png" alt="Free, discreet delivery">
                <p class="under-banner-text">Free, discreet delivery</p>
            </div>
            <div class="under-banner-card">
                <img src="images/under-banner/third.png" alt="Cancel any time">
                <p class="under-banner-text">Cancel any time</p>
            </div>
            <div class="under-banner-card">
                <img src="images/under-banner/fourth.png" alt="Ongoing clinician support">
                <p class="under-banner-text">Ongoing clinician support</p>
            </div>

        </div>
    </div>

    <div class="how-work container">
        <div class="how-col">
            <p class="how-first-text">Healthcare. Made easy.</p>
            <img src="images/how-work/rating.svg" alt="rating">
            <p class="how-secondary-text"><span class="how-span-text">Rated excellent</span>on Trustpilot</p>
            <div class="how-row">

                <div class="how-card">
                    <img src="images/how-work/first.png" alt="">
                    <p class="how-card-name">Treatments online</p>
                    <p class="how-card-description">We’ll ask you a couple of quick medical questions. Tick the boxes
                        and a clinician will review
                        your answers and issue you a prescription.</p>
                </div>

                <div class="how-card">
                    <img src="images/how-work/second.png" alt="">
                    <p class="how-card-name">Free fast delivery</p>
                    <p class="how-card-description">Your selected treatments will be delivered for free in discreet
                        packaging. There’ll be some helpful info included to make sure you get the best out of it.</p>
                </div>

                <div class="how-card">
                    <img src="images/how-work/third.png" alt="">
                    <p class="how-card-name">Clinician support</p>
                    <p class="how-card-description">Chat with a medical expert whenever you need. On the phone or via
                        email. With support throughout your treatment.</p>
                </div>

            </div>
            <img src="images/how-work/arrow-bot.svg" alt="arrow">
        </div>
    </div>

    <div class="catalog container">
        <p class="catalog-title">The most effective treatments. Backed by science.</p>

        <? if (isset($USER)) { ?>
            <div class="add container">
                <a href="add.php">добавить товар</a>
            </div>
        <? } ?>

        <div class="catalog-list">
            <div class="catalog-card">
                <?
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                foreach ($result as $row) {
                    ?>
                    <img src="images/catalog/hair-loss.png" alt="Hair loss">
                    <p class="catalog-card-name"><?= $row['name'] ?></p>
                    <a class="catalog-card-a" href="products.php?id=<?= $row['id'] ?>">View Treatments</a>
                <? } ?>
            </div>
        </div>
    </div>

    <div class="view-more container">
        <div class="view-background-row">
            <div class="view-left-content">
                <p class="view-new">New</p>
                <p class="view-name">Manual Wellbeing</p>
                <p class="view-description">Our new offering is a holistic plan to improve your health with
                    recommendations from medical experts,
                    as well as tracking and ongoing clinician support.</p>
                <button class="banner-button">View more</button>
                <div class="view-pluses">
                    <div class="view-pluses-card">
                        <img src="images/view-more/check-mark.svg" alt="">
                        <p class="view-pluses-text">Online consultation</p>
                    </div>
                    <div class="view-pluses-card">
                        <img src="images/view-more/check-mark.svg" alt="">
                        <p class="view-pluses-text">Personalised health plan</p>
                    </div>
                    <div class="view-pluses-card">
                        <img src="images/view-more/check-mark.svg" alt="">
                        <p class="view-pluses-text">Tracking & Clinician support</p>
                    </div>
                </div>
            </div>
            <div class="view-right-content">
                <div class="view-card-row">
                    <div class="view-right-card">
                        <img src="images/view-more/hair.svg" alt="">
                        <p class="view-right-text">Hair</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/immunity.svg" alt="">
                        <p class="view-right-text">Immunity</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/sleep.svg" alt="">
                        <p class="view-right-text">Sleep</p>
                    </div>
                </div>

                <div class="view-card-row">
                    <div class="view-right-card">
                        <img src="images/view-more/seh-health.svg" alt="">
                        <p class="view-right-text">Sex health</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/brain.svg" alt="">
                        <p class="view-right-text">Brain</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/digestion.svg" alt="">
                        <p class="view-right-text">Digestion</p>
                    </div>
                </div>

                <div class="view-card-row">
                    <div class="view-right-card">
                        <img src="images/view-more/heart.svg" alt="">
                        <p class="view-right-text">Heart</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/muscles.svg" alt="">
                        <p class="view-right-text">Muscles</p>
                    </div>
                    <div class="view-right-card">
                        <img src="images/view-more/skin.svg" alt="">
                        <p class="view-right-text">Skin</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="dr-earim container">
        <p class="dr-title">Our medical team work round the clock to bring you the most effective treatments available
            in the UK</p>
        <p class="dr-name">Dr. Earim Chaudry, Medical Director</p>
        <img src="images/dr-earim/doctor.png" alt="Dr.Earim">
        <div class="dr-raiting">
            <img src="images/dr-earim/trustpilot.svg" alt="">
            <img src="images/dr-earim/raiting.svg" alt="">
        </div>
        <p class="dr-raiting-text">Based on 1169 reviews</p>
    </div>

    <div class="slider">
        <div class="slider-card">
            <div class="slider-content">
                <div class="star-row">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                </div>
                <div class="slider-text">
                    <p class="slider-txt">Quick and discreet and saved me a trip to the GP.</p>
                </div>
                <p class="slider-author">Zander</p>
            </div>
        </div>
        <div class="slider-card">
            <div class="slider-content">
                <div class="star-row">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                    <img src="images/slider/star.svg" alt="">
                </div>
                <div class="slider-text">
                    <p class="slider-txt">Quick and discreet and saved me a trip to the GP.</p>
                </div>
                <p class="slider-author">Zander</p>
            </div>
        </div>
    </div>

    <div class="doctors container">
        <p class="doctors-title">Meet our mdeical team</p>
        <p class="doctors-description">Enabling the mission of revolutionising how men approach health, they are at the
            core of the men’s wellness platform. <span class="doctors-span">Meet our team.</span></p>
        <div class="doctors-list">
            <div class="doctors-card">
                <img src="images/doctors/earim.png" alt="">
                <p class="doctor-name">Earim Chaudry, MD</p>
                <p class="doctor-proff">Medical Director</p>
            </div>
            <div class="doctors-card">
                <img src="images/doctors/ryan.png" alt="">
                <p class="doctor-name">Ryan Benbow</p>
                <p class="doctor-proff">Pharmacist, Ind. Prescriber</p>
            </div>
            <div class="doctors-card">
                <img src="images/doctors/soneb.png" alt="">
                <p class="doctor-name">Soheb Ganchi</p>
                <p class="doctor-proff">Pharmacist, Ind. Prescriber</p>
            </div>
        </div>
        <hr>
        <div class="doctors-footer">
            <img src="images/doctors/telephone.png" alt="">
            <div class="doctors-footer-text">
                <p class="doc-foot-title">Get a free consultation</p>
                <p class="doct-foot-desc">Speak with one of our clinicians and get personalised advice. Monday to Friday
                    9am-4:30pm</p>
            </div>
            <button class="banner-button">book consultation</button>
        </div>
    </div>

    <div class="banner-second">
        <div class="banner-second-text">
            <p class="banner-second-main">“It’s put a spark back into my relationship and given me a huge amount of
                confidence in the bedroom.”</p>
            <p class="banner-second-aut">Anthony, Trustpilot</p>
        </div>
    </div>

    <div class="buttons-block container">
        <div class="buttons-block-list">
            <button class="banner-button">treat ed</button>
            <button class="banner-button">treat hair loss</button>
        </div>
    </div>

    <div class="guided container">
        <p class="guided-title">guided</p>
        <p class="guided-description">Your own personal wellbeing guide. Experts, information and hot topics right at
            your fingertips.</p>
        <div class="guided-list">

            <div class="guided-card">
                <img src="images/guided/one.png" alt="">
                <p class="guided-card-name">Why do men fail at well-being?</p>
                <a class="catalog-card-a" href="#">read more</a>
            </div>

            <div class="guided-card">
                <img src="images/guided/two.png" alt="">
                <p class="guided-card-name">8 steps to prevent hair loss</p>
                <a class="catalog-card-a" href="#">read more</a>
            </div>

            <div class="guided-card">
                <img src="images/guided/three.png" alt="">
                <p class="guided-card-name">Erectile Dysfunction 101</p>
                <a class="catalog-card-a" href="#">read more</a>
            </div>

            <div class="guided-card">
                <img src="images/guided/four.png" alt="">
                <p class="guided-card-name">Let’s talk hair – treatments and advice</p>
                <a class="catalog-card-a" href="#">read more</a>
            </div>

        </div>
    </div>

    <? include('includes/footer.php') ?>

</body>

</html>