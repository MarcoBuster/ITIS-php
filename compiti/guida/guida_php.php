<?php
    session_start();
    include "php_init.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Compito 1 - Guida PHP</title>
    <?php include "head.php" ?>
</head>
<body>
    <?php include "intestazione.php"; ?>
    <?php include "menu.php"; ?>

    <div class="container pt-2 mt-3 content">
        <h2>Guida PHP <a class="btn btn-sm btn-outline-primary" href="https://php.net">Documentazione ufficiale</a></h2>
        <?php if (isset($user)) { ?>
            <h4>Un po' di definizioni</h4>
            <blockquote class="blockquote mb-1">
                <p>
                    <b>PHP</b> <i>(acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti;
                    originariamente acronimo di "Personal Home Page")</i>
                    è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.
                </p>
                <footer class="blockquote-footer"><cite>Wikipedia</cite></footer>
            </blockquote>
            <p>
                Dalla definizione possiamo notare che:
            </p>
            <ul>
                <li>PHP è un linguaggio <b>intepretato</b> e non compilato;</li>
                <li>
                    PHP è un linguaggio di <b>scripting</b> completo, può quindi essere usato indipendentemente
                    dalla programmazione di pagine web.
                </li>
            </ul>
            <h4>Costrutti di base</h4>
            <p class="header">
                Ecco il famoso <i>hello world</i>:
            </p>
                                                                        <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;?php</span>
    <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #0086d2">&quot;Hello world!&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">?&gt;</span><span style="color: #ffffff"></span>
</pre></td></tr></table></div>
            <p class="note">
                A differenza di altri linguaggi come C, C++, Java, Python, ecc..., la funzione
                <span style="color: #fb660a; font-weight: bold">echo</span>
                non scrive nella console bensì direttamente nella pagina HTML.
            </p>
            <p class="header">
                Ecco un esempio di dichiarazione di variabili e condizioni:
            </p>
                <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7
8</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;?php</span>
    <span style="color: #fb660a">$a</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">;</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// dichiaro a e gli assegno 5</span>
    <span style="color: #fb660a">$b</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">;</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// dichiaro b e gli assegno 3</span>
    <span style="color: #fb660a; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fb660a">$a</span> <span style="color: #ffffff">&gt;</span> <span style="color: #fb660a">$b</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// se $a è maggiore di $b esegui...</span>
        <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #0086d2">&quot;$a è maggiore di $b&quot;</span><span style="color: #ffffff">;</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// stampa &quot;5 è maggiore di 3&quot;</span>
        <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #0086d2">&#39;$a è maggiore di $b&#39;</span><span style="color: #ffffff">;</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// stampa &quot;$a è maggiore di $b&quot;</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">?&gt;</span><span style="color: #ffffff"></span>
</pre></td></tr></table></div>
            <p class="note">
                Non è obbligatorio specificare il <i>tipo</i> delle variabili, ma dobbiamo sempre mettere il
                <span style="color: #fb660a">$</span> prima di dichiararle e richiamarle. <br />
                Utilizzando le doppie virgolette <span style="color: #0086d2">&quot;</span> nelle stringhe evaluta le
                variabili all'interno, mentre con le singole virgolette <span style="color: #0086d2">&#39;</span>
                questa funzione è disabilitata.
            </p>

            <p class="header">
                Per dichiarare ed utilizzare gli <b>array</b> <i>(liste ordinate di elementi)</i> usiamo:
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;?php</span>
    <span style="color: #fb660a">$lista_spesa</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[</span><span style="color: #0086d2">&quot;Mele&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Banane&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Insalata&quot;</span><span style="color: #ffffff">];</span>   <span style="color: #008800; font-style: italic; background-color: #0f140f">// dichiaro array</span>
    <span style="color: #ffffff">var_dump(</span><span style="color: #fb660a">$lista_spesa</span><span style="color: #ffffff">);</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// stampo array</span>
    <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #fb660a">$lista_spesa</span><span style="color: #ffffff">[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">];</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// stampo primo elemento dell&#39;array</span>
    <span style="color: #fb660a; font-weight: bold">foreach</span> <span style="color: #ffffff">(</span><span style="color: #fb660a">$lista_spesa</span> <span style="color: #fb660a; font-weight: bold">as</span> <span style="color: #fb660a">$el</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// per ogni elemento $el nell&#39;array...</span>
        <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #fb660a">$el</span><span style="color: #ffffff">;</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// stampa elemento</span>
    <span style="color: #ffffff">}</span>

    <span style="color: #008800; font-style: italic; background-color: #0f140f">// Possiamo pure dichiarare array con chiavi personalizzate, non numeri</span>
    <span style="color: #fb660a">$voti</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[</span>
        <span style="color: #0086d2">&quot;Matematica&quot;</span> <span style="color: #ffffff">=&gt;</span> <span style="color: #0086f7; font-weight: bold">8</span><span style="color: #ffffff">,</span>
        <span style="color: #0086d2">&quot;Inglese&quot;</span> <span style="color: #ffffff">=&gt;</span> <span style="color: #0086f7; font-weight: bold">6</span><span style="color: #ffffff">,</span>
        <span style="color: #0086d2">&quot;Italiano&quot;</span> <span style="color: #ffffff">=&gt;</span> <span style="color: #0086f7; font-weight: bold">7</span><span style="color: #ffffff">,</span>
        <span style="color: #0086d2">&quot;Informatica&quot;</span> <span style="color: #ffffff">=&gt;</span> <span style="color: #0086f7; font-weight: bold">7</span><span style="color: #ffffff">,</span>
     <span style="color: #ffffff">];</span>
     <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #0086d2">&quot;Ho preso &quot;</span> <span style="color: #ffffff">.</span> <span style="color: #fb660a">$voti</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&quot;Matematica&quot;</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">.</span> <span style="color: #0086d2">&quot; in matematica&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">?&gt;</span><span style="color: #ffffff"></span>
</pre></td></tr></table></div>
            <p class="note">
                Possiamo eseguire tutte le operazioni che vogliamo sui singoli elementi dell'array (condizioni, somma, modifica, ecc...).
                Possiamo inoltre usufruire di funzioni tipo count(...) per contare gli elementi in un array.
            </p>

            <h4><span style="color: #fb660a">$_GET</span> e <span style="color: #fb660a">$_POST</span></h4>
            <p>
                Prima o poi, se stiamo costruendo una web app interattiva, dovremo processare l'input di qualche <b>form</b>. <br/>
                Qui ci vengono ad aiutare le <b>variabili globali</b> <span style="color: #fb660a">$_GET</span> e <span style="color: #fb660a">$_POST</span>,
                compilate automaticamente dall'interprete PHP a ogni caricamento di pagina.
                Viene compilata una o l'altra variabile in base al metodo specificato nel tag <code>&lt;form&gt</code>;
            </p>
            <p class="header">
                Ecco qua un esempio con una casella di ricerca:
            </p>
            <!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;color:white !important;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7
8
9</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #fb660a; font-weight: bold">&lt;form</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;search&quot;</span> <span style="color: #ff0086; font-weight: bold">method=</span><span style="color: #0086d2">&quot;post&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;label</span> <span style="color: #ff0086; font-weight: bold">for=</span><span style="color: #0086d2">&quot;inputQuery&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>Termine di ricerca:<span style="color: #fb660a; font-weight: bold">&lt;/label&gt;</span>
    <span style="color: #fb660a; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;query&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;inputQuery&quot;</span><span style="color: #fb660a; font-weight: bold">&gt;</span>
<span style="color: #fb660a; font-weight: bold">&lt;/form&gt;</span>

<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;?php</span>
<span style="color: #fb660a; font-weight: bold">if</span> <span style="color: #ffffff">(array_key_exists(</span><span style="color: #fb660a">$_POST</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&#39;query&#39;</span><span style="color: #ffffff">))</span>
    <span style="color: #fb660a; font-weight: bold">echo</span> <span style="color: #0086d2">&quot;Hai cercato&quot;</span> <span style="color: #ffffff">.</span> <span style="color: #fb660a">$_POST</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&#39;query&#39;</span><span style="color: #ffffff">];</span>
<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">?&gt;</span>
</pre></td></tr></table></div>
            <p class="note">
                Utilizziamo la funzione <code>array_key_exists(...)</code> per <b>controllare</b> che l'array
                <span style="color: #fb660a">$_POST</span> abbia la query da cercare.
                Alla prima apertura della pagina, per esempio, l'array <span style="color: #fb660a">$_POST</span> sarà <b>vuoto</b>.
            </p>

            <h4><span style="color: #fb660a">$_SESSION</span></h4>
            <p>
                Le <b>sessioni</b> in PHP sono un modo per preservare certi dati nel tempo in più pagine. <br/>
                Per esempio, quando un utente esegue il <b>login</b> viene inizializzata la sessione; quando cambia pagina
                viene controllato il suo stato nella sessione e solo se è loggato gli viene consentito di continuare. <br/>
            </p>
            <p class="header">
                Per fare ciò in PHP basta utilizzare le funzioni <code>session_start()</code>, <code>session_destroy()</code>
                e l'array globale <b>$_SESSION</b>:
            </p>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- ... form di login dell&#39;utente ... --&gt;</span>

<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;?php</span>
<span style="color: #ffffff">session_start();</span>  <span style="color: #008800; font-style: italic; background-color: #0f140f">// da mettere obbligatoriamente prima di usare $_SESSION</span>

<span style="color: #fb660a">$auth_user</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;admin&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fb660a">$auth_password</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;admin&quot;</span><span style="color: #ffffff">;</span>

<span style="color: #fb660a; font-weight: bold">if</span><span style="color: #ffffff">(array_key_exists(</span><span style="color: #0086d2">&#39;username&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fb660a">$_POST</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">&amp;&amp;</span> <span style="color: #ffffff">array_key_exists(</span><span style="color: #0086d2">&#39;password&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fb660a">$_POST</span><span style="color: #ffffff">))</span> <span style="color: #ffffff">{</span>
    <span style="color: #008800; font-style: italic; background-color: #0f140f">// se l&#39;array $_POST ha i campi username e password (sto facendo un login)...</span>
    <span style="color: #fb660a; font-weight: bold">if</span><span style="color: #ffffff">(</span><span style="color: #fb660a">$_POST</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&#39;username&#39;</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">==</span> <span style="color: #fb660a">$auth_user</span> <span style="color: #ffffff">&amp;&amp;</span> <span style="color: #fb660a">$_POST</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&#39;password&#39;</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">==</span> <span style="color: #fb660a">$auth_password</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #008800; font-style: italic; background-color: #0f140f">// se la password è corretta salva nella sessione l&#39;utente loggato e l&#39;orario di login</span>
        <span style="color: #fb660a">$_SESSION</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&#39;logged_user&#39;</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">=</span> <span style="color: #fb660a">$auth_user</span><span style="color: #ffffff">;</span>
        <span style="color: #fb660a">$_SESSION</span><span style="color: #ffffff">[</span><span style="color: #0086d2">&#39;logged_date&#39;</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">time();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fb660a; font-weight: bold">else</span>
        <span style="color: #fb660a">$error</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&#39;Nome e password errate&#39;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
<span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">?&gt;</span>
</pre></td></tr></table></div>


        <?php } else { ?>
            <p class="text-danger">Esegui il login per sbloccare tutti i contenuti.</p>
        <?php } ?>
    </div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/pooper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</body>
