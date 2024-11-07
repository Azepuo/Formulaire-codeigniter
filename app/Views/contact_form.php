<!DOCTYPE html>
<html>
<head>
    <title>Contactez-Nous</title>
   
       
</head>
<body>
    <div class="container">
        <h2>Formulaire de Contact</h2>
        <form action="<?= site_url('contact/submit') ?>" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
           

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <?php if (isset($validation) && $validation->hasError('email')) : ?>
            <div class="error"><?= $validation->getError('email'); ?></div>
            <?php endif; ?>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <?php if (isset($validation) && $validation->hasError('message')) : ?>
            <div class="error"><?= $validation->getError('message'); ?></div>
            <?php endif; ?>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
