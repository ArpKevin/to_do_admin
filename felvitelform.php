<?php include('head.php') ?>
<title>Főoldal</title>
<?php echo "</head>"; ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php include('container.php'); ?>
            </div>
            <div class="col-9">
                <h1 style="text-align: center;">Adatok felvitele</h1>

                <form action="./jogosultsagok.php" method="POST" class="was-validated">
                    <div class="mb-3 mt-3">
                        <label for="jogosultsagi_szint" class="form-label">Szint:</label>
                        <!-- <input type="text" class="form-control" id="jogosultsagi_szint" placeholder="" name="jogosultsagi_szint"
                            required> -->
                        <select class="form-select" id="jogosultsagi_szint" name="jogosultsagi_szint" required>
                            <option selected disabled value="">Kattints ide a kiválasztáshoz...</option>
                            <option value="user">Felhasználó</option>
                            <option value="admin">Admin</option>
                        </select>
                        <div class="valid-feedback">Rendben.</div>
                        <div class="invalid-feedback">Válassz egy jogosultsági szintet.</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="treeview.js"></script>
</body>

</html>