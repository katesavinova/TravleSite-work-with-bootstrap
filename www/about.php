<?header('Content-Type: text/html; charset= utf-8');?>
<!DOCTYPE html>
<html lang="rus">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>ITravel</title>
</head>
<body>
<?require"blocks/header.php"?>
<div class="container"> <h4>Контактная форма</h4>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="email" class="form-control  mb-4 box-shadow">
            <textarea name="message" class="form-control mb-4 box-shadow"></textarea>
            <button type="submit" name="button" class="btn btn-success mb-4 box-shadow">Отправить</button>
        </form>
</div>
   
<?require"blocks/footer.php"?>
</body>
</html>