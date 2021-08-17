<?php
if (isset($_POST['newsletter_submit'])) {
    $email = trim($_POST['newsletter_email']);

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "labas@aurimasrimkus.lt";
            $subject = "Nauja zinute";
            mail($to, $subject, $from);
            echo "<script>alert('Dekojame. Jusu zinute gautas. Tuoj susisieksim.');</script>";
        }
    }
    include('db.php');
}
