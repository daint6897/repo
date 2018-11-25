@extends('layouts.app')

@section('content')
    <div id="data">
        @foreach($messages as $message)
        <p id="{{$message->id}}"><strong>{{$message->user_id}}</strong>: {{$message->message}}</p>
        @endforeach
    </div>
    <div>
        <form action="" method="POST">
        {{csrf_field()}}
        <br>
        <br>
        Content: <input name="message" rows="5" style="width:100%"></input>
        <button type="submit" name="send">Send</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
        <script>
        var socket = io('http://localhost:6001')
        socket.on('chat:message',function(data){
            //console.log(data)
            if($('#'+data.id).length == 0){
                $('#data').append('<p><strong>'+data.author+'</strong>: '+data.content+'</p>')
            }
            else{
                console.log('Đã có tin nhắn')
            }
        })

        </script>
    </div>

@endsection
