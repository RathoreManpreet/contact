<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<form action="{{route('contact')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter the Name"><br>
    <label>email</label>
    <input type="email" name="email" placeholder="Enter the Email"><br>
    <label>Message</label>
    <textarea  name="message" placeholder="Enter the Message"></textarea><br>
    <input type="submit" value="submit">

    </form>
</body>
</html>