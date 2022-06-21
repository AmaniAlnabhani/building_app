<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   @if (Auth::check())
   your name is {{ Auth:: user()->name}}
   <br>
   your email is {{ Auth:: user()->email}} 
   
       
   @else
      You are not looged in 
    
   @endif
    

</body>
</html>