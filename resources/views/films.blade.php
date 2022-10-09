<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
    background-color: salmon;
    }
    img {
    width: 10%;
    display: block;
    margin-left: auto;
    margin-right: auto
    }
    span {
    display: flex;
    font-size: 23px;
    justify-content: center;
    }
</style>
<body>
    <h1>Список всех актеров сериала:</h1>
    @csrf
        <section name="from">
          @foreach ($films as $film)
          <div class="person"></div>
          <h2 value="name">{{$film['name']}}</h2>
          <span value="birthday">{{$film['birthday']}}</span>
          <span value="status">{{$film['status']}}</span> 
          <span value="nickname">{{$film['nickname']}}</span>  
          <span value="portrayed">{{$film['portrayed']}}</span>
          <img src="{{$film['img']}}" alt="Фото актера">                  
          @endforeach
        </section>

</body>
</html>