<!DOCTYPE html>
<html lang="en">
<head>

<style>
body{
    height: 100vh;
    background-color: #000;
    background-image: url('img/840843081452.jpg');
    background-size: cover;
    background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
    }
    h1,li{
        color:orange;
    }
    input[type=submit] {
    background-color: #04abba;
    color: orange;
    font-size: 20px;
    font-weight: bold;
    margin-top: 40px;
    padding: 5px 30px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    
  }
  
  input[type=submit]:hover {
    background-color: orange;
    color: #fff;
    box-shadow: 0 0 5px #03e9f4,
                  0 0 25px #03e9f4,
                  0 0 50px #03e9f4,
                  0 0 100px #03e9f4;
  }

</style>
</head>
<body>
    <h1>Messages:</h1>
<br>
@if(count($message)>0)
    <ul>
        @foreach($message as $m)
        <a style="text-decoration:none;" href="messages/{{$m['id']}}">  
            <li>{{$m['id']}} , {{$m['name']}} , {{$m['email']}} , {{$m['message']}}</li>
        </a>
        @endforeach

    </ul>
@else
<p>no data to show</p>
@endif
<a href="messages/create"><input type="submit" value="add a message"></a>

</body>
</html>