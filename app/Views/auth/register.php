<html>
    <head>
        <title>Tutorial Login Dan Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <div class="mx-auto p-2" style="width: 200px;">
    <div class="container mt-5">
        <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <?php if($error){ ?>
            <p style="color:red">Terjadi Kesalahan:
                <ul>
                    <?php foreach($error as $e){ ?>
                    <li><?php echo $e ?></li>
                    <?php } ?>
                </ul>
            </p>
        <?php } ?>
        <div class="">
        <h5>Register</h5>
                    </div>
        <form method="post" action="/auth/valid_register">
            Username: <br>
            <input type="text" name="username" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            Konfirmasi Password: <br>
            <input type="password" name="confirm" required><br>
            <button type="submit" name="login">Register</button>
        </form>
        <p>
            <a href="/auth/login">Sudah punya akun?</a>
        </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
     </div>
    </body>
</html>