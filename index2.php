<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>subrat - homepage</title>
    <link rel="stylesheet" href="./css/main.css">
    <style>
    .social-icons img {
        width: 30px;
        height: 30px;
        transition: transform 0.2s ease;
    }

    .social-icons img:hover {
        transform: scale(1.15);
    }
    </style>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <link rel="stylesheet" href="./css/particle.css">
</head>

<body>
    <div id="hide-in-mobile">
        <div id="particles-js"></div>
        <div class="container">
            <div class="left">
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <img src="./imges/side.png" alt="subrat">
                </div>
            </div>
            <div class="center" style="display: flex; flex-direction: column; align-items: left; padding-left: 1vw;">
                <div class="intro">
                    <span><span id="name">subrat</span> <span id="here">here</span></span>
                </div>
                <div class="description">
                    <p>“I am <span id="iname">Subrat</span>, a final-year BS-MS student at IISER Berhampur, passionate
                        about socio-ecological
                        systems, environmental sustainability, and spatial data science.”</p>
                    <div id="button-div">
                        <a href="sop.php" class="custom-btn">SOP</a>
                        <a href="#" class="custom-btn">Catalogue</a>
                        <a href="#" class="custom-btn">Projects</a>
                        <a href="#" class="custom-btn">Experience</a>
                        <a href="#" class="custom-btn">Academia</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="menu-container">
                    <div class="menu-button">
                        <div class="social-icons">

                            <img src="./icons/bars.png" alt="Menu">
                        </div>
                    </div>
                    <div class="menu-options" id="menu-options">
                        <a href="#">About</a>
                        <a href="#">Contact</a>
                        <a href="#">Blog</a>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/subrat-m/" target="_blank">
                        <img src="./icons/linkedin.png" alt="LinkedIn">
                    </a>
                    <a href="https://www.researchgate.net/profile/Subrat-Mallick-2" target="_blank">
                        <img src="./icons/researchgate.png" alt="ResearchGate">
                    </a>
                    <a href="https://github.com/s5rt" target="_blank">
                        <img src="./icons/github.png" alt="GitHub">
                    </a>
                    <a href="https://gitlab.com/s5rt" target="_blank">
                        <img src="./icons/gitlab.png" alt="GitLab">
                    </a>
                    <a href="https://www.quora.com/profile/Subrat-132" target="_blank">
                        <img src="./icons/quora.png" alt="Quora">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="show-in-mobile">
        <p>
            this website is not available for mobile devices. please visit it on a desktop or laptop.
        </p>
    </div>
    <script>
    const menuContainer = document.querySelector('.menu-container');
    const rightSection = document.querySelector('.right');
    const centerSection = document.querySelector('.center');
    const menuOptions = document.getElementById('menu-options');
    let closeTimer = null;
    menuContainer.addEventListener('mouseenter', () => {
        if (closeTimer) {
            clearTimeout(closeTimer);
        }
        rightSection.style.width = '150px';
        menuOptions.style.display = 'flex';
    });
    menuContainer.addEventListener('mouseleave', () => {
        closeTimer = setTimeout(() => {
            rightSection.style.width = '80px';
            centerSection.style.flex = '2';
            menuOptions.style.display = 'none';
        }, 100);
    });
    </script>
    <script src="./js/particle.js"></script>
</body>

</html>