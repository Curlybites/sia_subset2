<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professor Creation</title>
    <link rel="stylesheet" href="/css/professor.css">
     {{-- data table links --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    
 <div class="container">
    <div class="header-content">
        <form action="/Professor/Create" method="POST">
            @csrf
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <select id="gender" name="gender" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            <input type="password" name="password" placeholder="Password" required>
            {{-- <input type="password" name="confirmpass" placeholder="Confirm Password" required> --}}
            

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="main-content">
        <div class="col">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professors as $prof)
                    <tr>
                        <td>{{ $prof->id }}</td>
                        <td>{{ $prof->fname }}</td>
                        <td>{{ $prof->lname }}</td>
                        <td>{{ $prof->email }}</td>
                        <td>{{ $prof->gender }}</td>
                        <td><a href="/prof/{{ $prof->id }}">Edit</a></td>
    
                    </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
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