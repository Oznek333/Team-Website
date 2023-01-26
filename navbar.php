<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<nav class="navbar navbar-expand-lg navbar-light shadow-0">
    <div class="container">
        <a class="navbar-brand mt-2 mt-lg-0 hvr-pulse-grow" href="./">
            <img class="logo" src="assets/images/logo-text.png" height="40" alt="MDB Logo" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars menu"></i>
        </button>
        

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item text-center">
                    <a class="nav-link hvr-grow <?= ($activePage == 'index') ? 'active':''; ?>" href="./">Home</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link hvr-grow <?= ($activePage == 'team') ? 'active':''; ?>" href="team">Team</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link hvr-grow <?= ($activePage == 'projects') ? 'active':''; ?><?= ($activePage == 'blogpost') ? 'projects':''; ?>" href="projects">Projects</a>
                </li>

            </ul>
            <span class="navbar-text">
                <div class="d-none d-sm-block">
                    <form name="frmSearch" method="post" action="projects">
                        <div class="search__container w-100">
                            <input id="search" class="search__input" type="text" name="search[keyword]" placeholder="Zoek...">
                        </div>
                    </form>
                </div>
            </span>
            <div class="d-none d-sm-block">&nbsp;&nbsp;&nbsp;</div><span class="navbar-text">
            <div class="theme-switch-wrapper text-center">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox" class="hvr-grow fa"></label>
                </label>
            </div>
            </span>
        </div>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nanobar/0.4.2/nanobar.js"></script>
<script>
    var options = {
        classname: 'my-class',
        id: 'my-id',
        target: document.getElementById('myDivId')
    };
    var nanobar = new Nanobar( options );
    window.addEventListener("load", (event) => {
        nanobar.go(100);
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

    function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); //add this
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

</script>

