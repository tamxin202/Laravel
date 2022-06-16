<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form SignUp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<body>
    <div class="container">
    <form action ='' method="post" style="width: 600px; margin-left :500px;">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Fullname</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="age" placeholder="Tuổi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="date" placeholder="Ngày Tháng năm">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Web</label>
            <input type="url" class="form-control" id="exampleInputPassword1" name="web" placeholder="link">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Địa chỉ">
        </div>
        <div>
            @include('error')
          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <div  class="display-info">
            @if(isset($user))
            <p>Name: {{$user['name']}}</p>
            <p>Age: {{$user['age']}}</p>
            <p>Date: {{$user['date']}}</p>
            <p>Phone: {{$user['phone']}}</p>
            <p>Website: {{$user['web']}}</p>
            <p>Address: {{$user['address']}}</p>
            @endif
        </div>

    </form>
</body>

</html>