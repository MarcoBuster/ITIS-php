<?php
session_start();
include "php_init.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Compito 1 - Guida Bootstrap</title>
    <?php include "head.php" ?>
</head>
<body>
    <?php include "intestazione.php"; ?>
    <?php include "menu.php"; ?>

    <div class="container pt-2 mt-3 content">
        <h2>Guida Bootstrap <a class="btn btn-sm btn-outline-primary" href="https://getbootstrap.com">Documentazione ufficiale</a> </h2>
        <?php if (isset($user)) { ?>
            <p>
                <b>Bootstrap</b> è un <b>framework CSS</b> open source creato da Twitter pensato per
                "semplificare la vita" agli sviluppatori web senza particolari conoscenze di CSS. <br />
                Bootstrap è pensato per essere <b><i>responsive</i></b>, ovvero per rendere leggibile il contenuto
                su tutti i dispositivi, dagli smartphone ai computer, dai tablet alle smart TV.
            </p>

            <h4>I concetti base, righe e colonne</h4>
            <p>
                Per rendere il tutto più facile, Bootstrap divide verticalmente lo spazio in <b>12 colonne</b>.
                Le colonne in una riga possono avere una qualsiasi lunghezza, basta che la somma faccia 12. <br />
                E' possibile fare espandere una o più colonne fino a riempire tutto il contenuto della riga in caso
                di schermi più piccoli, per facilitare la leggibilità da schermi più piccoli.
            </p>

            <h4>Starter template</h4>
            <p class="header">
                Ecco il codice boilerplate da aggiungere per iniziare ad utilizzare Bootstrap:
            </p>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;!doctype html&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;html</span> <span style="color: #ff0086; font-weight: bold">lang=</span><span style="color: #0086d2">&quot;en&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;head&gt;</span>
    <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- Meta tags richiesti --&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;meta</span> <span style="color: #ff0086; font-weight: bold">charset=</span><span style="color: #0086d2">&quot;utf-8&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;meta</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;viewport&quot;</span> <span style="color: #ff0086; font-weight: bold">content=</span><span style="color: #0086d2">&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>

    <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- Bootstrap CSS --&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;link</span> <span style="color: #ff0086; font-weight: bold">rel=</span><span style="color: #0086d2">&quot;stylesheet&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css&quot;</span> <span style="color: #ff0086; font-weight: bold">integrity=</span><span style="color: #0086d2">&quot;sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm&quot;</span> <span style="color: #ff0086; font-weight: bold">crossorigin=</span><span style="color: #0086d2">&quot;anonymous&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>

    <span style="color: #fb660a; font-weight: bold">&lt;title&gt;</span>Hello, world!<span style="color: #fb660a; font-weight: bold">&lt;/title&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/head&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;body&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;h1&gt;</span>Hello, world!<span style="color: #fb660a; font-weight: bold">&lt;/h1&gt;</span>

    <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- JavaScript opzionale --&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;script </span><span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;https://code.jquery.com/jquery-3.2.1.slim.min.js&quot;</span> <span style="color: #ff0086; font-weight: bold">integrity=</span><span style="color: #0086d2">&quot;sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN&quot;</span> <span style="color: #ff0086; font-weight: bold">crossorigin=</span><span style="color: #0086d2">&quot;anonymous&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;&lt;/script&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;script </span><span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js&quot;</span> <span style="color: #ff0086; font-weight: bold">integrity=</span><span style="color: #0086d2">&quot;sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q&quot;</span> <span style="color: #ff0086; font-weight: bold">crossorigin=</span><span style="color: #0086d2">&quot;anonymous&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;&lt;/script&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;script </span><span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js&quot;</span> <span style="color: #ff0086; font-weight: bold">integrity=</span><span style="color: #0086d2">&quot;sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl&quot;</span> <span style="color: #ff0086; font-weight: bold">crossorigin=</span><span style="color: #0086d2">&quot;anonymous&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;&lt;/script&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;/html&gt;</span>
</pre></td></tr></table></div>
            <p class="note">
                Nei prossimi esempi sarà dato per scontato e assodato che il template
                sopra sia stato applicato prima di aprire la pagina.
            </p>

            <h4>Learn by example</h4>
            <p class="header">
                Per creare una riga e delle colonne facciamo:
            </p>
            <div class="row">
                <div class="col-4">
                    Colonna larga 4
                </div>
                <div class="col-3">
                    Colonna larga 3
                </div>
                <div class="col-5">
                    Colonna larga 5
                </div>
            </div>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;row&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;col-4&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        Colonna larga 4; sarà sempre larga 4 indipendentemente dalla grandezza dello schermo
    <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;col-md-3&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        Colonna larga 3; con uno schermo uguale o inferiore a md, occuperà l&#39;intera riga, mentre con uno schermo superiore occuperà 3 spazi
    <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;col-sm-5&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        Colonna larga 5; con uno schermo uguale o inferiore a sm, occuperà l&#39;intera riga, mentre con uno schermo superiore occuperà 5 spazi
    <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
</pre></td></tr></table></div>
            <p class="note">
                Bootstrap ha 5 <b>breakpoints</b>: <i>xs</i>, <i>sm</i>, <i>md</i>, <i>lg</i> e <i>xl</i>.
            </p>

            <p class="header">
                Bootstrap ha diversi colori utilizzabili, applicabili un po' ovunque:
            </p>
            <p class="text-primary">.text-primary</p>
            <p class="text-secondary">.text-secondary</p>
            <p class="text-success">.text-success</p>
            <p class="text-danger">.text-danger</p>
            <p class="text-warning">.text-warning</p>
            <p class="text-info">.text-info</p>
            <p class="text-light bg-dark">.text-light</p>
            <p class="text-dark">.text-dark</p>
            <p class="text-muted">.text-muted</p>
            <p class="text-white bg-dark">.text-white</p>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;color:white !important;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-primary&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-primary<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-secondary&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-secondary<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-success&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-success<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-danger&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-danger<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-warning&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-warning<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-info&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-info<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-light bg-dark&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-light<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-dark&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-dark<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-muted&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-muted<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;text-white bg-dark&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>.text-white<span style="color: #fb660a; font-weight: bold">&lt;/p&gt;</span>
</pre></td></tr></table></div>

            <p class="header">
                Ecco una navbar completa di tutte le funzionalità di Bootstrap:
            </p>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;color:white !important;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #fb660a; font-weight: bold">&lt;nav</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;navbar navbar-expand-lg navbar-light bg-light&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;navbar-brand&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Navbar<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;button</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;navbar-toggler&quot;</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;button&quot;</span> <span style="color: #ff0086; font-weight: bold">data-toggle=</span><span style="color: #0086d2">&quot;collapse&quot;</span> <span style="color: #ff0086; font-weight: bold">data-target=</span><span style="color: #0086d2">&quot;#navbarSupportedContent&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-controls=</span><span style="color: #0086d2">&quot;navbarSupportedContent&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-expanded=</span><span style="color: #0086d2">&quot;false&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-label=</span><span style="color: #0086d2">&quot;Toggle navigation&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;span</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;navbar-toggler-icon&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;&lt;/span&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/button&gt;</span>

  <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;collapse navbar-collapse&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;navbarSupportedContent&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;ul</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;navbar-nav mr-auto&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;li</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-item active&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-link&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Home <span style="color: #fb660a; font-weight: bold">&lt;span</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;sr-only&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>(current)<span style="color: #fb660a; font-weight: bold">&lt;/span&gt;&lt;/a&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;/li&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;li</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-item&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-link&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Link<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;/li&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;li</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-item dropdown&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-link dropdown-toggle&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;navbarDropdown&quot;</span> <span style="color: #ff0086; font-weight: bold">role=</span><span style="color: #0086d2">&quot;button&quot;</span> <span style="color: #ff0086; font-weight: bold">data-toggle=</span><span style="color: #0086d2">&quot;dropdown&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-haspopup=</span><span style="color: #0086d2">&quot;true&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-expanded=</span><span style="color: #0086d2">&quot;false&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
          Dropdown
        <span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;dropdown-menu&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-labelledby=</span><span style="color: #0086d2">&quot;navbarDropdown&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
          <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;dropdown-item&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Action<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
          <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;dropdown-item&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Another action<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
          <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;dropdown-divider&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;&lt;/div&gt;</span>
          <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;dropdown-item&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Something else here<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;/li&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;li</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-item&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
        <span style="color: #fb660a; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;nav-link disabled&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;#&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Disabled<span style="color: #fb660a; font-weight: bold">&lt;/a&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;/li&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;/ul&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;form</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-inline my-2 my-lg-0&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-control mr-sm-2&quot;</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;search&quot;</span> <span style="color: #ff0086; font-weight: bold">placeholder=</span><span style="color: #0086d2">&quot;Search&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-label=</span><span style="color: #0086d2">&quot;Search&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
      <span style="color: #fb660a; font-weight: bold">&lt;button</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;btn btn-outline-success my-2 my-sm-0&quot;</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;submit&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Search<span style="color: #fb660a; font-weight: bold">&lt;/button&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;/form&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;/nav&gt;</span>
</pre></td></tr></table></div>
            <p class="header">
                Un esempio di un form di login:
            </p>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;color:white !important;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #fb660a; font-weight: bold">&lt;form&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-group&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;label</span> <span style="color: #ff0086; font-weight: bold">for=</span><span style="color: #0086d2">&quot;exampleInputEmail1&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Email address<span style="color: #fb660a; font-weight: bold">&lt;/label&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;email&quot;</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-control&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;exampleInputEmail1&quot;</span> <span style="color: #ff0086; font-weight: bold">aria-describedby=</span><span style="color: #0086d2">&quot;emailHelp&quot;</span> <span style="color: #ff0086; font-weight: bold">placeholder=</span><span style="color: #0086d2">&quot;Enter email&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;small</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;emailHelp&quot;</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-text text-muted&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>We&#39;ll never share your email with anyone else.<span style="color: #fb660a; font-weight: bold">&lt;/small&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-group&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;label</span> <span style="color: #ff0086; font-weight: bold">for=</span><span style="color: #0086d2">&quot;exampleInputPassword1&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Password<span style="color: #fb660a; font-weight: bold">&lt;/label&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;password&quot;</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-control&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;exampleInputPassword1&quot;</span> <span style="color: #ff0086; font-weight: bold">placeholder=</span><span style="color: #0086d2">&quot;Password&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-check&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;checkbox&quot;</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-check-input&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;exampleCheck1&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;label</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;form-check-label&quot;</span> <span style="color: #ff0086; font-weight: bold">for=</span><span style="color: #0086d2">&quot;exampleCheck1&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Check me out<span style="color: #fb660a; font-weight: bold">&lt;/label&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;/div&gt;</span>
  <span style="color: #fb660a; font-weight: bold">&lt;button</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;submit&quot;</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;btn btn-primary&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Submit<span style="color: #fb660a; font-weight: bold">&lt;/button&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;/form&gt;</span>
</pre></td></tr></table></div>


        <?php } else { ?>
            <p class="text-danger">Esegui il login per sbloccare tutti i contenuti.</p>
        <?php } ?>
    </div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/pooper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</body>
<body>