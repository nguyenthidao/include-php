<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANG KY</title>
</head>
<body>
    <div class="container">
        <article>
            <h2>Registration</h2>
            <span class="error">* required field.</span>
            <form action="process.php" method="post">
                Name: <input type="text" name="name" value="<?php echo $nameErr; ?>">
                <span class="error">*</span>
                <br>
                E-mail: <input type="text" name="email" value="<?php echo $emailErr; ?>">
                <span class="error">*</span>
                <br>
                Phone: <input type="text" name="phone" value="<?php echo $phoneErr; ?>">
                <span class="error">*</span>
                <br>
                <input type="submit" name="submit" value="submit">
            </form>


        </article>
    </div>
</body>
</html>