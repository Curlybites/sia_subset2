<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit prof</title>
    <link rel="stylesheet" href="/css/editcss/editprof.css">
</head>
<body>
    <div class="container">
        <div class="header-content">

            <h1>UPDATING PROF DETAILS</h1>
            <form action="/Professor/{{ $prof->id }}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" name="fname" placeholder="First Name" value="{{ $prof->fname }}" required>
                <input type="text" name="lname" placeholder="Last Name" value="{{ $prof->lname }}"  required>
                <input type="email" name="email" placeholder="Email" value="{{ $prof->email }}" required>
                <select id="gender" name="gender" required>
                    <option value="" selected disabled>Select Gender</option>
                    <option value="Male" {{ $prof->gender }} >Male</option>
                    <option value="Female"{{ $prof->gender }}>Female</option>
                  </select>
                <input type="password" name="password" placeholder="Password" value="{{ $prof->password }}" required>
                {{-- <input type="password" name="confirmpass" placeholder="Confirm Password" required> --}}
                
    
                <input type="submit" value="Submit">
            </form>
            
        </div>
</body>
</html>