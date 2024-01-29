<?
function Capicua($numero) {
    $numeroInvertido = strrev($numero);
    if ($numero == $numeroInvertido) {
        return true;
    } else {
        return false;
    }
}
function Primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
?>