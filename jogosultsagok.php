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
                <form action="felvitelform.php" style="margin-left: auto;">
                    <button>Új hozzáadása</button>
                </form>
                <table>
                    <tr>
                        <th>Azonosító</th>
                        <th>Szint</th>
                        <th>Műveletek</th>
                    </tr>
                    <?php
                        $szint = $_POST['jogosultsagi_szint'];
                        if(isset($szint)){

                            echo "<tr>
                                <td>1</td>
                                <td>" . $szint . "</td>
                                <td>asd</td>
                            </tr>";
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>

<script src="treeview.js"></script>
</body>
</html>