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
            <form action="/Student/{{ $student->id }}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" name="stud_num" id="stud_num" placeholder="Student Number" value="{{ $student->stud_num }}" required>
                <input type="text" name="first_name" placeholder="First Name" value="{{ $student->first_name }}"  required>
                <input type="text" name="last_name" placeholder="Last Name"  value="{{ $student->last_name }}"  required>
                <input type="email" name="email" placeholder="Email" value="{{ $student->email }}" required>
                <label for="age"><p>Birth Date</p>
                    <input type="text" disabled value="{{ $student->age }}">
                    <input type="date" name="age" id="age" placeholder="Date Of Birth" value="{{ $student->age }}" >
                </label>
               
                <select id="gender" name="gender" required>
                    <option value="" selected disabled>Select Gender</option>
                    <option value="Male" {{ $student->gender }}>Male</option>
                    <option value="Female" {{ $student->gender }}>Female</option>
                  </select>
                
    
                <input type="submit" value="Submit">
            </form>
            
        </div>
</body>
</html>