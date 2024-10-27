<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <title>Portfolio</title>
</head>

<body>
    <?php include 'includes/header.php' ?>

    <main class="l-main">
        <!--===== HOME =====-->

        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">
                    Hi,<br />I'am <span class="home__title-color">Shahzaib</span><br />
                    Web Designer
                </h1>
                <a href="https://wa.me/923284671952" class="button" target="_blank">Contact</a>
            </div>

            <div class="home__social"><abbr title=""></abbr>
                <a href="https://twitter.com/SAfzaal66993" class="home__social-icon"><i class="bx bxl-twitter"></i></a>
                <a href="https://github.com/h6o9?tab=projects" class="home__social-icon"><i
                        class="bx bxl-github"></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0" mask-type="alpha">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                        <image class="home__blob-img" x="50" y="60" xlink:href="assets/img/perfil.png" />
                    </g>
                </svg>
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/about.png" alt="" />
                </div>
                <div>
                    <h2 class="about__subtitle">I'am Shahzaib</h2>
                    <p class="about__text">Experienced Frontend Developer with a passion for creating visually stunning
                        and highly functional web applications. Proficient in a wide range of web technologies, I have a
                        proven track record of delivering responsive and user-centric designs.</p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>
            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Shahzaib Afzaal, a skilled web developer with finesse, Crafting dynamic
                        sites, your digital prowess impresses. Proficient in HTML, CSS, and coding's intricate dance, I
                        bring your web visions to life with expertise and advance.</p>

                    <!-- Skills List -->
                    <?php
                    $skills = [
                        ["HTML5", 95],
                        ["CSS3", 85],
                        ["JAVASCRIPT", 85],
                        ["REACT JS", 85],
                        ["PHP", 85],
                        ["SQL DB", 85],
                        ["WORDPRESS", 85]
                    ];
                    foreach ($skills as $skill): ?>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx bxl-html5 skills__icon"></i>
                                <span class="skills__name"><?= $skill[0]; ?></span>
                            </div>
                            <div class="skills__bar skills__<?= strtolower($skill[0]); ?>"></div>
                            <div>
                                <span class="skills__percentage"><?= $skill[1]; ?>%</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div>
                    <img src="assets/img/skills.jpg" alt="" class="skills__img" />
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>
            <div class="work__container bd-grid">
                <?php
                $workImages = [
                    "work1.jpeg",
                    "work2.jpg",
                    "work3.jpg",
                    "work4.jpeg",
                    "work5.jpeg",
                    "work6.jpeg"
                ];
                foreach ($workImages as $image): ?>
                    <a href="" class="work__img">
                        <img src="assets/img/<?= $image; ?>" alt="" />
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>
            <div class="contact__container bd-grid">
                <form action="send_email.php" method="POST" class="contact__form">
                    <input type="text" name="name" placeholder="Name" class="contact__input" required />
                    <input type="email" name="email" placeholder="Email" class="contact__input" required />
                    <textarea name="message" cols="0" rows="10" class="contact__input" placeholder="Your message..."
                        required></textarea>
                    <input type="submit" value="Send" class="contact__button button" />
                </form>
            </div>
        </section>



    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>