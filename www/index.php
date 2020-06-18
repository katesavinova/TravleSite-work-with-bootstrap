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
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">ITravel</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Анонс</a>
        <a class="p-2 text-dark" href="#">Спорт/Развлечения</a>
        <a class="p-2 text-dark" href="#">Клиентам</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Регистрация</a>
    </div>
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
<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
          
            <small class="d-block mb-3 text-muted">©2020</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
</body>
</html>