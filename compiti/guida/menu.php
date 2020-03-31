<?php if (isset($user)) { ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Argomenti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="guida_php.php">PHP</a>
                        <a class="dropdown-item" href="guida_bootstrap.php">Bootstrap</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php } ?>
