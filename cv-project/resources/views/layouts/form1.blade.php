
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.formbody {
    margin-top:20%;
    display:flex;
    flex-direction: column;
    align-items: center;        
    justify-content: center;
    
    }
* {box-sizing: border-box;}

input[type=text],input[type=email], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}




label{
    color:orange;
    font-size: 20px;
}

.container {
  border-radius: 5px;
  padding: 20px;
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
    <div class='formbody'>
    <h1 style="color:white; text-align:center;"><span style="background-color:orange;">S</span>end me a message.</h1>


<div class="container">

  <form action="/thanks" method="get">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="Name" placeholder="Your name.." >

    <label for="email">Email</label>
    <input type="email" id="email" name="Email" placeholder="example@example.com" >

    <label for="subject">Message</label>
    <textarea id="subject" name="Message" placeholder="Write your message here.." style="height:200px"></textarea>

    <input type="submit" value="Send">
  </form>
</div>
</div>
</body>
</html>
