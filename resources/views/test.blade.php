<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<script> function test() {     
    axios.get('/api/categories').then((res) => {
        
        let categories = res.data
        console.log(categories.data)
    })
}</script>
<body>
    <button  onclick="test()">aaaaaa</button>
    {{-- <form action="" onsubmit="test()">
       
    </form> --}}
</body>
</html>