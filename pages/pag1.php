<!doctype html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="pagina">
<form action="./pag2.php" method="post" class="formSetting">
    <b>inserire nome e chiave per la codifica e la decodifica</b>
    <table class="tableSetting">
    <?php
        for($i=0;$i<$_POST['nChiavi'];$i+=1){
            echo '<tr><td><div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="nome chiave" name="nomeChiave'.$i.'" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="chiave di codifica" name="ChiaveCod'.$i.'" min="1" max="62" required>
                </div>
            </div></td></tr>';
        }
    ?>
    </table>
    <?php
    echo '<input type="hidden" id="nChiavi" name="nChiavi" value="'.$_POST["nChiavi"].'">';
    ?>
    <br>
    <input type="submit" value="Continua" class="btn btn-success">
</form>

</body>
</html>