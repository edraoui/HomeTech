<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>

    <p>Your order number {{$mailData['order_id']}}
        placed at {{$mailData['order_date']}}
        cost ${{$mailData['order_total']}}
        has been {{$mailData['order_status']}}.
    </p>

    <p>If you have any problem, Please contact us </p>

    <p>Thank you</p>
</body>
</html>
