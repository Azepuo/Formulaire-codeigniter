<!DOCTYPE html>
<html>
<head>
    <title>Contactez-Nous</title>
   
      <style>
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 350px;
            padding: 20px;
            
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
   
      </style> 
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
