<!doctype html>
<html lang="zh_tw">
<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>廚房端</title>
</head>
<body style="background-color:#3B3B3B">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<div class="container">
    <div class="row col-md-12" style="color:white;text-align: center;font-size:40px" >
        <table width="700" border="1">
            <tbody>
            <tr>
                <td>單號</td>
                <td>主餐</td>
                <td>小菜</td>
                <td>飲料</td>
            </tr>
                @foreach($sql as $sqls)
                    <form action="/out/{{{$sqls->number}}}" method="POST">
                        {{csrf_field()}}
                        <tr>
                            <td> {{$sqls->number}}</td>
                            <td> {{$sqls->main}}</td>
                            <td> {{$sqls->dish}}</td>
                            <td> {{$sqls->drink}}</td>
                            <td><button type="submit" class="btn btn-secondary" style="color: white" name="{{$sqls->number}}">出餐</button></td>
                        </tr>
                    </form>
                @endforeach
            </tbody>
        </table>
        <div>
        <form action="/">
            <button type="submit" class="btn btn-secondary" style="width:100px;height:100px;margin-left:50px;margin-top:200px;font-size: 30px">返回</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>
