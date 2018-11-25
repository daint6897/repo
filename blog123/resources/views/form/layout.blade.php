<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>input</title>
</head>
<body>
    <form action="{{ route('send') }}" method="POST" role="form">
        {{ csrf_field() }}
        
    
        <div class="form-group">
            <label for="">name</label>
            <input type="text" class="form-control" name="ahihi" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
