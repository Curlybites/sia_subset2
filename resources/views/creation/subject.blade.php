<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Creation</title>

    <link rel="stylesheet" href="/css/student.css">
    {{-- data table links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="container">
        <div class="header-content">
            <form action="/Subject/Create" method="POST">
                @csrf
                <input type="text" name="subj_name" id="subj_name" placeholder="Subject Name" required>
                <input type="text" name="subj_code" id="subj_code" placeholder="Subject Code" required>
                <input type="text" name="subj_unit" id="subj_unit" placeholder="Subject Unit" required>
   
                <input type="submit" value="Submit">
            </form>
        </div>
    
        <div class="main-content">
            <div class="col">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Subject Name</th>
                            <th>Subject Code</th>
                            <th>Subjeect Unit</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $subject as $row)
                        <tr>
                            <td>{{ $row ->id }}</td>
                            <td>{{ $row ->subj_name}}</td>
                            <td>{{ $row ->subj_code }}</td>
                            <td>{{ $row ->subj_unit}}</td>
                            <td><a href="Subject/{{ $row->id }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Subject Name</th>
                            <th>Subject Code</th>
                            <th>Subjeect Unit</th>
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