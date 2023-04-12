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
            <form action="/Subject/{{ $subject->id }}" method="POST">
                @method('PUT')
                @csrf
                
                        <input type="text" name="subj_name" id="subj_name" placeholder="Subject Name" value="{{ $subject->subj_name }}" required>
                        <input type="text" name="subj_code" id="subj_code" placeholder="Subject Code" value="{{ $subject->subj_code }}" required>
                        <input type="text" name="subj_unit" id="subj_unit" placeholder="Subject Unit" value="{{ $subject->subj_unit }}" required>
           
                        <input type="submit" value="Submit">

            </form>
            
        </div>
</body>
</html>