<?php

    // Get request data submitted with contact form
    $name    = isset($_POST['name']) ? $_POST['name'] : ''; 
    $phone   = $_POST['phone']; 
    $email   = $_POST['email'];
    $uni  = $_POST['uni'];

    // Validate the users input (No fields left empty)
    if (empty($name) || empty($phone) || empty($email) || empty($uni)) {
        header('Location: /index.php?contactErr=1');
    } else {
        // Got here? Then user submitted data for each required field
        // Compose the email to send
        $subject = 'Mobile Mehina lead';
        $body    = sprintf('שם: %s נייד: %s דוא"ל:  %s פרטים: %s', $name, $phone, $email, $uni);
        $from    = 'From:' . $email;

        // Send the email
       mail('info@concept-academy.co.il', $subject, $body, $from);
       mail('ifat@concept-academy.co.il', $subject, $body, $from);
       mail('leadsbackup@conce.pt',       $subject, $body, $from);
       mail('web@concept-academy.co.il',  $subject, $body, $from);

        $contactMailSent = true;
        include 'success.php';
    }