<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CAMOUFLAGE and STYLE</title>

    <style type="text/css">

    </style>
</head>
<body>
    <div class="infos-ctn bloc-form" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
        <div class="title">
            <h3><strong>I would like</strong> to hear from you</h3>
            <p>Internship proposal, freelance inquiry or even a coffee</p>
        </div>
        <form action="functions/SendMail.php" autocomplete="off">
            <input type="text" placeholder="Name" name="name" required="">
            <input type="email" placeholder="Email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="">
            <textarea name="message" placeholder="Write something in there..." maxlength="500" required=""></textarea>

            <input type="submit" class="hidden" value="Send message">
            <a href="#" class="submit js-form-submit">
                <span>Send message</span>
            </a>
        </form>
    </div>

</body>
</html>
