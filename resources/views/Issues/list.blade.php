<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            
               @foreach ($users as $user)<div class="col-12">
                    <div class="alert alert-success">username:{{$user->name}}</div>
                        {{-- {{App\Issue::where('user_id',$user->id)->get()[0]->msg}} --}}
                        {{-- {{$user->issue[0]->msg}}  --}} 
                        
                        <hr>
                        <ul>
                            @foreach ($user->issues as $issue)
                            <li>
                                {{--{{$issue->msg}}--}}
                                {{App\Issue::where('user_id',$user->id)->get()[0]->msg}}
                            </li>
                            @endforeach
                        </ul>
                    
                    </div>
                @endforeach  
              
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>