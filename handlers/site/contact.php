<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = get_param('email');
    $text = get_param('text');

    if ($email && $text) {
        $query = db()->prepare("INSERT INTO messages (email, text) VALUES (:email, :text)");
        $query->bindValue(':email', $email);
        $query->bindValue(':text', $text);
        $query->execute();
    }
    redirect('site/index');
}

return render_view('site/contact');