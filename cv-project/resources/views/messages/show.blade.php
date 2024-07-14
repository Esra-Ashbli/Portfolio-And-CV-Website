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

</style>
</head>
<body>
    <h1>Messages:</h1>
<br>
    <ul>
        
        <a style="text-decoration:none; display:inline felex;" href="{{route('messages.edit',$message->id)}}">  
            <li>
                <form action="{{route('messages.destroy',$message->id)}}" method='post'>
                    @csrf
                    @method('DELETE')
                    
                    {{$message['name']}} , {{$message['email']}} , {{$message['message']}}
                    <button type='submit'>X</button>
                </form>
            </li>
        </a>
        

    </ul>

</body>
</html>