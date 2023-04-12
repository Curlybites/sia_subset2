<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Creation</title>

    <link rel="stylesheet" href="/css/student.css">
    {{-- data table links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>

    
 <div class="container">
    <div class="header-content">
        <form action="/Student/Create" method="POST">
            @csrf
            <input type="text" name="stud_num" id="stud_num" placeholder="Student Number" required>
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <label for="age"><p>Birth Date</p>
                <input type="date" name="age" id="age" placeholder="Date Of Birth" required>
            </label>
           
            <select id="gender" name="gender" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
        
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="main-content">
        <div class="col">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->stud_num }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->gender }}</td>
                        <td><a href="/Student/{{ $student->id }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
    </div>
 </div>

    
    {{-- Datatables links --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="/js/datatables.js"></script>
    
</body>
</html>