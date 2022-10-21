<?php

$lulu = "coucou";
const TEST = "coucou";

global $pioupiou;  // mauvaise pratique car accessible par n'importe qui n'importe où, et si qq essaie d'utiliser pioupiou pour une autre variable, cela va générer des erreurs.

