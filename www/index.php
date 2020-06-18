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
    <div class="d-flex flex-wrap">
<? for($i=0; $i<6; $i++): ?>
    <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Предложение <?echo ($i+1);?></h4>
          </div>
          <div class="card-body">
          <img src="img/<?echo ($i +1 );?>.jpg" alt="">
            <h1 class="card-title pricing-card-title"><?echo rand(150,500)."$";?> <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li> <?echo rand(1,20);?> пользователей включены</li>
              <li>Доступ к справочному центру</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее...</button>
          </div>
        </div>
<? endfor; ?>
</div>
<?require"blocks/footer.php"?>
</body>
</html>