<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message from site</title>
</head>
<body>
<h4>Отправитель: {{$request->lname . " ". $request->fname . " ". $request->mname}}</h4>
<p>Телефон: {{$request->tel}}</p>
<p>Email: {{$request->email}}</p>
<h3>Сообщение</h3>
<p>{{$request->message}}</p>
</body>
</html>
