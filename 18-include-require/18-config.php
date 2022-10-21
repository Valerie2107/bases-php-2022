<?php

$lulu = "coucou";
const TEST = "coucou";

global $lala;  // mauvaise pratique car accessible par n'importe qui n'importe où, et si qq essaie d'utiliser lala pour une autre variable, cela va générer des erreurs.

