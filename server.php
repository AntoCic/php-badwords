<?php
// var_dump($_GET);

$paragrafo = $_GET['paragrafo'];
$censurata = trim($_GET['censurata']);

$lunghezza_paragrafo = strlen($paragrafo);

$paragrafo_censurato = str_replace($censurata, "***", $paragrafo, $count_cens);

$ln_paragrafo_censurato = strlen($paragrafo_censurato);

echo "
<h1>Paragrafo originale</h1>
<p> $paragrafo </p>
<h3>Lunghezza del paragrafo = $lunghezza_paragrafo</h3>
<hr>
<h2>Paragrafo censurato</h2>
<p> $paragrafo_censurato</p>
<h3>Lunghezza del paragrafo = $ln_paragrafo_censurato</h3>
<p> <b>Sostituzioni : </b>$count_cens</p>
<hr>
";
