<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container{
            width: 70%;
            margin: 0 auto; 
        }
        .form-control{
            margin-bottom: 1em;
            padding: 12px;
            border-radius: 5px;
            border: solid 2px #ccc;
            width: 100%;
        }
        .btn{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="{{route('contact')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required class="form-control" />
                <input type="email" name="email" placeholder="Email Address" required class="form-control" />
                <textarea name="message" placeholder="Enter message" required class="form-control"></textarea>
                <button type="submit" class="form-control btn">Submit</button>
        </form>
    </div>
</body>
</html>