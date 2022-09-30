<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('zip')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <label for=""> Add Photos</label>
    <input type="file" name="image[]" id="image" multiple>

    <button type="submit" name="download">Submit</button>

    </form>
<br><br>
 <a href="{{url('getdownload')}}"> <button type="submit" name="download">Download Zip</button></a>  
    
</body>
</html>