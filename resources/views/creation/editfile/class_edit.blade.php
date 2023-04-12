<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Class</title>
    <link rel="stylesheet" href="/css/editcss/editprof.css">
</head>
<body>
    <div class="container">
        <div class="header-content">

            <h1>UPDATING PROF DETAILS</h1>
            <div class="create-stud">
                <form action="/Class/{{ $class->id }}" method="POST">
                    @method('PUT') 
                    @csrf
                    <input class="input-form" type="text" id="class_name" name="class_name" placeholder="" value="{{ $class->class_name }}" required>
                
                    <input class="input-form" type="text" id="class_num" name="class_num" placeholder="" value="{{ $class->class_num }}" required>
                
                    <input class="input-form" type="text" id="class_sec" name="class_sec" placeholder="" value="{{ $class->class_sec }}" required>

                    <select name="class_prof" id="classprof">
                        <option value="{{ $class->class_prof }}" class="line">{{ $class->class_prof }}</option>
                        @foreach ($professor as $prof)
                        <option value="{{ $prof->lname }}">{{ $prof->fname}} {{ $prof->lname }}</option>
                        @endforeach 
                    </select>
                
                    <select name="class_subj" id="class_subj">
                        <option value="{{ $class->class_subj }}" class="line">{{ $class->class_subj }}</option>
                        @foreach ($subject as $subj)
                            <option value="{{ $subj->subj_name }}">{{ $subj->subj_name }}</option>
                        @endforeach
                    </select>

                    <input type="submit" value="Submit">
                </form>
            
        </div>
</body>
</html>