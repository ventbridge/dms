<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $phoneNumber = $_POST['number'];
    $message = $_POST['message'];

    $mailTo = "info@dizainamebelustudija.lv";
    $headers = "From: ".$mailFrom;
    $txt = "Jūs saņēmāt e-pastu no ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
} else {
    echo "Šeit ir kāda kļūda...";
}

?>
