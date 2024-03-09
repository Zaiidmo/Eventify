<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Billet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&family=Trade+Winds&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Supermercado+One&family=Trade+Winds&display=swap');
        body {
            color: #ffffff
        }

        h1 {
            font-size: 70px;
            font-family: 'Trade Winds';
        }

        table {
            width: 100%;
        }

        .trade-winds-regular {
  font-family: "Trade Winds", system-ui;
  font-weight: 400;
  font-style: normal;
}

.supermercado-one-regular {
  font-family: "Supermercado One", sans-serif;
  font-weight: 400;
  font-style: normal;
}
        .ticket {
            font-family: 'Arial', sans-serif;
            max-width: 100%;
            max-height: 30%;
            /* margin: 20px; */
            display: flex;
            border: 2px dashed #fff;
            padding: 20px;
            background-color: #181818;
        }

        .ticket-header,
        .ticket-footer {
            text-align: center;
            /* margin: px 0; */
        }

        .ticket-content {
            display: flex;
            justify-content: space-between;
            /* margin: px 0; */
        }

        /* .ticket-section {
            /* width: 48%; */
        } */

        .ticket-section.right {
            text-align: right;
        }

        .td-1{
            align-items: center;
            text-align: center;
            width: 35%;
            border-right: dashed 2px #fff;
        }
        .ticket-header1{
            border-right: dashed 2px #fff;
        }
            .ticket-footer {
                font-size: 12px;
            }
            tr{
                text-align: center;
            }
        p{
            font-family: supermercado one;
        }
        h5{
            font-family: supermercado one;
        }
        .date {
            font-family: supermercado one;
            font-size: 30px;
            line-height: 10px
        }
        .host-data,.owner-data {
            font-family: 'supermercado one';
            font-size: 10px;
            /* line-height: 5px */
        }
        .title{
            font-size: 15px;
            color:#CCCCCC;
            /* font-style: semi-bold; */
        }
        .location{
            font-size: 15px;
            color:#CCCCCC;
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
                            <h5 class="supermercado-one-regular">{{ $event->title}}</h5>
                            <h5 class="supermercado-one-regular">{{ $event->date}}</h5>
                            <h5 class="supermercado-one-regular">{{ $event->location}}</h5>
                            <h5 class="supermercado-one-regular">{{ $paymentId}}</h5>
                        </div>
                    </th>
                    <th colspan="3">
                        <div class="ticket-header">
                            <h1>{{ $event->title}}</h1>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="td-1">
                        <div class="ticket-qr">
                            <!-- Ici, vous pouvez ajouter une image du QR code -->
                            <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb"
                                alt="QR Code">
                        </div>
                    </td>
                    <td>
                        <div class="date supermercado-one-regular center">
                            <p class="supermercado-one-regular"> {{ $event->date}} </p>
                            <p class="supermercado-one-regular"> 17:45</p>
                            <p class="supermercado-one-regular" class="location"> {{ $event->location}} </p>
                        </div>
                    </td>

                    <td>
                        <div class="host-data center">
                            <p class="supermercado-one-regular" class="title">Host</p>
                            <p class="supermercado-one-regular">{{ $event->user->name}}</p>
                            <p class="supermercado-one-regular" class="title">Category</p>
                            <p class="supermercado-one-regular">{{ $event->category->name}}</p>
                        </div>
                    </td>

                    <td>
                        <div class="owner-data center">
                            <p class="supermercado-one-regular" class="title">Ticket To:</p>
                            <p class="supermercado-one-regular">{{ $user->name}}</p>
                            <p class="supermercado-one-regular" class="title">Price</p>
                            <p class="supermercado-one-regular">{{ $event->ticket_price}}/p>
                        </div>
                    </td>
                </tr>
                {{-- <div class="ticket-content">
                </div> --}}
                <tr class="ticket-footer">
                    <p class="supermercado-one-regular">© 2024 Eventify. All Rights Reserved.</p>
                </tr>
        </table>


    </div>

</body>

</html>
