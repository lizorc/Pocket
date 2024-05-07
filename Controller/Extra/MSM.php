<?php
    session_start();

    if(empty($_SESSION['MSM'])){
        return;
    }

    $messages = $_SESSION['MSM'];
    unset($_SESSION['MSM']);
?>

<p>
    <?php foreach($messages as $message): ?>
    <p> <?php echo $message; ?> </p>
    <?php endforeach; ?>
</p>