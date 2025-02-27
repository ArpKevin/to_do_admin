<?php include('head.php') ?>
<title>Jogosultságok</title>

<style>
table{
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding-left: 15px;
  padding-right: 15px;
}
</style>

<?php echo "</head>"; ?>
<body>

<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include('container.php'); ?>
        </div>
        <div class="col-9">
            <h1 style="text-align: center;">Jogosultságok</h1>
            <div class="panel" style="display: flex; flex-direction: column">
                <button style="margin-left: auto;">Új hozzáadása</button>
                <table>
                    <tr>
                        <th>Azonosító</th>
                        <th>Szint</th>
                        <th>Műveletek</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="treeview.js"></script>
</body>
</html>