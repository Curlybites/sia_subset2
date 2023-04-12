<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Creation</title>

    {{-- class css link --}}
    <link rel="stylesheet" href="/css/class.css">

    {{-- data table links --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>

 <div class="container">
    <div class="header-content">
        <form action="/Class/Create" method="POST">
            @csrf
            <input type="text" name="class_name" placeholder="Class Name" required>
            <input type="text" name="class_num" placeholder="Class numeric" required>
            <input type="text" name="class_sec" placeholder="Class Section" required>
            <select name="class_prof" id="class_prof">
                <option value=""selected disabled >Select Professor</option>
                @foreach ($professor as $data)
                <option value="{{ $data->lname}}"> {{ $data->fname }} {{ $data->lname }}</option>
                @endforeach
            </select>
            <select name="class_subj" id="class_subj">
                    <option value="" selected disabled>Select Subject</option>
                    @foreach ($subj as $subject)
                    <option value="{{ $subject->subj_name }}">{{ $subject->subj_name }}</option>
                    @endforeach
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
                        <th>Class Name</th>
                        <th>Class Numeric</th>
                        <th>Class Section</th>
                        <th>Class Professor</th>
                        <th>Class Subject</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $classes as $class )  
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td>{{ $class->class_num }}</td>
                        <td>{{ $class->class_sec }}</td>
                        <td>{{ $class->class_prof }}</td>
                        <td>{{ $class->class_subj }}</td>
                        <td><a href="/Class/{{ $class->id }}">Edit</a>
                        <a href="/filterdata/">Insert</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>Id</td>
                        <th>Class Name</th>
                        <th>Class Numeric</th>
                        <th>Class Section</th>
                        <th>Class Professor</th>
                        <th>Class Subject</th>
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