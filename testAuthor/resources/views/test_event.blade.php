@extends('layouts.app')

{{-- @section('content')
    <form action="{{route('testEventPost')}}" method="POST" role="form">
        {{ csrf_field() }}
        <legend>Form title</legend>
        <div class="form-group">
            <label for="">label</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name='mess'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection --}}
@section('content')
<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('7639550b0c0e8c3925f4', {
      cluster: 'ap1',
      encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>
@endsection