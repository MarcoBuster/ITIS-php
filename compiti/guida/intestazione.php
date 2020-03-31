<div class="jumbotron pb-4 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Guida PHP<span class="text-danger">+</span>Bootstrap</h1>
                <p class="lead">
                    La guida definitiva riguardo al linguaggio di programmazione web più <s>odiato</s> usato al mondo
                    e al miglior framework CSS open source.
                </p>
            </div>
            <div class="col-sm">
                <div class="card">
                    <?php if (!isset($user)) { ?>
                        <div class="card-body">
                            <form method="post" action="index.php">
                                <div class="card-body p-0 pb-2">
                                    <input type="text" class="form-control mb-1" id="inputEmail" name="username" placeholder="Username">
                                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                                    <?php if (isset($error)) { ?>
                                        <div class="mt-2"><span class="text-danger mt-2">Username o password errati</span></div>
                                    <?php } ?>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>
                        </div>
                    <?php } else { ?>
                        <div class="card-body py-4">
                            <div class="d-block">
                                Benvenuto, <b><?= $user ?></b>
                            </div>
                            <form method="post" action="index.php" name="logout" class="d-inline-flex">
                                <input class="d-none" name="logout">
                                <button class="btn btn-danger mt-2">Logout</button>
                            </form>
                            <div class="d-inline-flex">
                                <a href="area_personale.php" class="btn btn-info d-inline-flex">Area personale</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>