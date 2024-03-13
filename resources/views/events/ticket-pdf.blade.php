<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Billet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&family=Trade+Winds&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Supermercado+One&family=Trade+Winds&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap');

        body {
            color: #ffffff
        }

        h1 {
            font-size: 30px;
            font-family: 'Supermercado one', sans-serif;
        }

        table {
            width: 100%;
        }

        .ticket {
            font-family: 'Trade Winds', sans-serif;
            max-width: 100%;
            max-height: 100%%;
            display: flex;
            border: 2px dashed #fff;
            padding: 20px;
            background-color: #181818;
        }

        .ticket-header,
        .ticket-footer {
            text-align: center;
            width: 100%;
        }

        .ticket-content {
            display: flex;
            justify-content: space-between;
        }

        .ticket-section.right {
            text-align: right;
        }

        .td-1 {
            align-items: center;
            text-align: center;
            width: 35%;
            border-right: dashed 2px #fff;
        }

        .ticket-header1 {
            border-right: dashed 2px #fff;
        }

        .ticket-footer {
            font-size: 12px;
        }

        tr {
            text-align: center;
        }

        p,
        h5 {
            font-family: 'Supermercado One', sans-serif;
        }
        
        .date {
            font-size: 30px;
            line-height: 10px;
        }

        .host-data,
        .owner-data {
            font-size: 10px;
        }

        .title {
            font-size: 15px;
            color: #CCCCCC;
        }

        .location {
            font-size: 15px;
            color: #CCCCCC;
        }

        img {
            width: 120px;
            height: 120px;
        }
    </style>
</head>

<body>

    <div class="ticket">
        <table>
            <thead>
                <tr>
                    <th colspan="1">
                        <div class="ticket-header1">
                            <h5>{{ $event->title }}</h5>
                            <h5>{{ $event->date }}</h5>
                            <h5>{{ $event->location }}</h5>
                            <h5>{{ $paymentId }}</h5>
                        </div>
                    </th>
                    <th colspan="3">
                        <div class="ticket-header">
                            <h1 class="event">{{ $event->title }}</h1>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="td-1">
                        {{-- <img src="{{$qrcode}} alt="Eventify"> --}}
                        <img src="data:image/png;base64,{{ $qrcode }}">
                    </td>
                    <td>
                        <div class="date">
                            <p> {{ $event->date }} </p>
                            <p> 17:45</p>
                            <p class="location"> {{ $event->location }} </p>
                        </div>
                    </td>

                    <td>
                        <div class="host-data">
                            <p class="title">Host</p>
                            <p>{{ $event->user->name }}</p>
                            <p class="title">Category</p>
                            <p>{{ $event->category->name }}</p>
                        </div>
                    </td>

                    <td>
                        <div class="owner-data">
                            <p class="title">Ticket To:</p>
                            <p>{{ $user->name }}</p>
                            <p class="title">Price</p>
                            <p>{{ $event->ticket_price }}</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="ticket-footer">
            <p>© 2024 Eventify. All Rights Reserved.</p>
        </div>

    </div>

</body>

</html>
