<?php

require __DIR__ . '/env.php';

if(isset($_POST['text']) && !empty(trim($_POST['text']))) {
    mail(E_MAIL, 'New Note', $_POST['text']);
    header('location: /?msg=sent');
} else {
    header('location: /?msg=failed');
}
