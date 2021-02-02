<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";
        $message = '<h1>Message sent from the contact page of site.com</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br> 
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('exemple@site.com', 'Site Email https://site.com', $message, $entete);
        if($retour) {
            echo '<p></p>';
        }
    }
?>

