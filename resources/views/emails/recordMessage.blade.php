<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Message from site</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid rgba(196, 196, 196, 0.4);
            padding: 10px;
        }

        .container {
            max-width: 700px;
            width: 100%;
            margin: 0 auto;
        }

        .centered {
            text-align: center;
        }

        .price {
            padding: 15px 20px;
            background-color: #dadada;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>ПЕРВЫЙ Медицинский центр ООО «ЛадаМед»</h2>
    <p>Уважаемый клиент, Вы успешно записались на прием</p>
    <table>
        <thead>
        <tr>
            <th>Дата/Время</th>
            <th>ФИО специалиста</th>
            <th>Услуга</th>
            <th>Филиал</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="centered">{{$record->date}}</td>
            <td>{{$record->doctor}}</td>
            <td>
                {{$record->service}}
            </td>
            <td>{{$record->address}}</td>
        </tr>
        </tbody>
    </table>
    <div class="price">
        Стоимость выбранной вами услуги составляет: {{$record->price}} руб.
    </div>
    <p>invitro2020@yandex.ru</p>
    <p>8 (8212) 39-13-26</p>
</div>
</body>
</html>
