<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holla</title>
    
</head>

<body style="background-color: green; color:white">
    <p id="greeting">hsosossllsfjkls</p>
    
    <script>
    console.log('holla')
    function updatePost(){
        const socket = new WebSocket(`ws://${window.location.hostname}:6001/connect`)
        socket.onopen = function(){
            console.log('on open')
        }
    }
    updatePost();
    </script>
</body>


</html>
