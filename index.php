<!doctype html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="pagina">
<form action="./pages/pag1.php" method="post" class="formSetting">
    <b>inserire quante chiavi per la codifica vuoi avere</b>
    <input type="number" class="form-control" placeholder="numero chiavi che vuoi inserire" name="nChiavi" min="1" required>

<br>
<input type="submit" value="Continua" class="btn btn-success">
</form>

</body>
</html>