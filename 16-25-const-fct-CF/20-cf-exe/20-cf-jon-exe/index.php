<?php

require_once 'configuration.php';

if (isset($_GET['u'])) {
    switch ($_GET['u']) {
        case 'formateurs':
            include './pages/formaweb.php';
            break;
        case 'stagiaires':
            include './pages/stagweb.php';
            break;
        case 'classes':
            include './pages/classcf.php';
            break;
        default:
            include './pages/homepage.php';
    }
} else {
    include './pages/homepage.php';
}
