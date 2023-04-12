<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVL EDIT GRADES</title>
    <!-- Bootstrap 5 W3School -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Materialize CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font Awesome  -->
    <script src="https://kit.fontawesome.com/99c966d584.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <button class="btn pink"  onclick="history.back()">back</button>
    {{-- <a href="/Class/Dashboard"><input type="button" value="Back" class="btn pink lighten-1 px-4"></a> --}}
     
        <h2 class="container text-center">Grading System</h2>
         <div class="container">
            <div class="row mt-5">
                    <div class="col-md-4">
                        <label class="h3 text-center">Student Number: <label class="h3">{{ $sec->student_no }}</label></label>
                    </div>
                    <div class="col-md-4">
                        <label class="h3 text-center">Last Name: <label class="h3">{{ $sec->last_name }}</label></label>
                    </div>
                    <div class="col-md-4">
                        <label class="h3 text-center">First Name: <label class="h3">{{ $sec->first_name }}</label></label>
                    </div>
            </div>
            <div class="row container">
                        <div class="col-md-6 h3 text-center">Section: <label class="h3">{{ $sec->class_sec }}</label></div>
                        <div class="col-md-6 h3 text-center">Subject: <label class="h3">{{ $sec->class_subj }}</label></div>
                </div>
         </div>
    </div>

        <div class="container">
              
        </div>
        <div class="container">
        <form action="/editTvl/{{ $sec->id }}" method="POST">
            @method('PUT')
            @csrf
        <div class="row mt-5 mb-4 text-center">
            <div class="col-md-5">
                <p class="h3 text-center">Written Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:35px"; min="1" max="1000" value="" name="WH1" id="WH1" class="writtenHpg text-center" placeholder="W1" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH2" id="WH2" class="writtenHpg text-center" placeholder="W2" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH3" id="WH3" class="writtenHpg text-center" placeholder="W3" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH4" id="WH4" class="writtenHpg text-center" placeholder="W4" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH5" id="WH5" class="writtenHpg text-center" placeholder="W5" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH6" id="WH6" class="writtenHpg text-center" placeholder="W6" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WH7" id="WH7" class="writtenHpg text-center" placeholder="W7" onkeypress='validate(event)'>
                    <!-- <input type="text" style="width:26px"; min="1" max="1000" name="WH8" id="WH8" class="writtenHpg text-center" placeholder="W8" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="WH9" id="WH9" class="writtenHpg text-center" placeholder="W9" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="WH10" id="WH10" class="writtenHpg text-center" placeholder="W10" onkeypress='validate(event)'> -->
                    <input type="text" style="width:35px"; min="1" max="1000" name="WHTOTAL" id="WHTOTAL" class="text-center WHTOTAL" placeholder="Total" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" value="100" name="WHPGPS" id="WHPGPS" class="text-center" placeholder="PS" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" value="30%" name="WHPGWS" id="WHPGWS" class="text-center" placeholder="WS" readonly>
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS1" id="WS1" class="writtenScores text-center" placeholder="W1" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS2" id="WS2" class="writtenScores text-center" placeholder="W2" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS3" id="WS3" class="writtenScores text-center" placeholder="W3" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS4" id="WS4" class="writtenScores text-center" placeholder="W4" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS5" id="WS5" class="writtenScores text-center" placeholder="W5" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS6" id="WS6" class="writtenScores text-center" placeholder="W6" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WS7" id="WS7" class="writtenScores text-center" placeholder="W7" onkeypress='validate(event)'>
                    <!-- <input type="text" style="width:26px"; min="1" max="1000" name="WS8" id="WS8" class="writtenScores text-center" placeholder="W8" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="WS9" id="WS9" class="writtenScores text-center" placeholder="W9" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="WS10" id="WS10" class="writtenScores text-center" placeholder="W10" onkeypress='validate(event)'> -->
                    <input type="text" style="width:35px"; min="1" max="1000" name="WSTOTAL" id="WSTOTAL" class="text-center WSTOTAL" placeholder="Total" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" name="WSCPS" id="WSCPS" class="text-center WSPS" placeholder="PS">
                    <input type="text" style="width:35px"; min="1" max="1000" name="WSCWS" id="WSCWS" class="text-center" placeholder="WS" readonly>
                </tr>
                    
            </div>
            <div class="col-md-4 text-center text-center">
                <p class="h3">Performance Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH1" id="PH1" class="performanceHpg text-center" placeholder="P1" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH2" id="PH2" class="performanceHpg text-center" placeholder="P2" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH3" id="PH3" class="performanceHpg text-center" placeholder="P3" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH4" id="PH4" class="performanceHpg text-center" placeholder="P4" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH5" id="PH5" class="performanceHpg text-center" placeholder="P5" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PH6" id="PH6" class="performanceHpg text-center" placeholder="P6" onkeypress='validate(event)'>
                    <!-- <input type="text" style="width:26px"; min="1" max="1000" name="PH7" id="PH7" class="performanceHpg text-center" placeholder="P7" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PH8" id="PH8" class="performanceHpg text-center" placeholder="P8" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PH9" id="PH9" class="performanceHpg text-center" placeholder="P9" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PH10" id="PH10" class="performanceHpg text-center" placeholder="P10" onkeypress='validate(event)'> -->
                    <input type="text" style="width:35px"; min="1" max="1000" name="PHTOTAL" id="PHTOTAL" class="text-center" placeholder="Total" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" value="100" name="PHPGPS" id="PHPGPS" class="text-center" placeholder="PS" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" value="50%" name="PHPGWS" id="PPHGWS" class="text-center" placeholder="WS" readonly>
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS1" id="PS1" class="performanceScores text-center" placeholder="P1" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS2" id="PS2" class="performanceScores text-center" placeholder="P2" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS3" id="PS3" class="performanceScores text-center" placeholder="P3" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS4" id="PS4" class="performanceScores text-center" placeholder="P4" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS5" id="PS5" class="performanceScores text-center" placeholder="P5" onkeypress='validate(event)'>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PS6" id="PS6" class="performanceScores text-center" placeholder="P6" onkeypress='validate(event)'>
                    <!-- <input type="text" style="width:26px"; min="1" max="1000" name="PS7" id="PS7" class="performanceScores text-center" placeholder="P7" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PS8" id="PS8" class="performanceScores text-center" placeholder="P8" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PS9" id="PS9" class="performanceScores text-center" placeholder="P9" onkeypress='validate(event)'>
                    <input type="text" style="width:26px"; min="1" max="1000" name="PS10" id="PS10" class="performanceScores text-center" placeholder="P10" onkeypress='validate(event)'> -->
                    <input type="text" style="width:35px"; min="1" max="1000" name="PSTOTAL" id="PSTOTAL" class="text-center" placeholder="Total" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PPSCPS" id="PPSCPS" class="text-center" placeholder="PS" readonly>
                    <input type="text" style="width:35px"; min="1" max="1000" name="PPSCWS" id="PPSCWS" class="text-center" placeholder="WS" readonly>
                </tr>
            </div>
            <div class="col-md-2 text-center">
               <p class="h3">Exam</p>
                <tr>
                <div class="text-center h3"><label>HPG</label></div>
                <input type="text" style="width:50px"; min="1" max="1000" id="hpgexam" name="hpgexam" class="text-center" placeholder="HPG" onkeypress='validate(event)'> 
                <input type="text" style="width:50px"; min="1" max="1000" id="hpgps" value="100" name="hpgps" class="text-center" placeholder="Exam" onkeypress='validate(event)'>  
                <input type="text" style="width:50px"; min="1" max="1000" id="hpgws" value="20%" name="hpgws" class="text-center" placeholder="Exam" onkeypress='validate(event)'>     
                </tr>
                
                <tr>
                <div class="text-center h3"><label>Scores</label></div>
                <input type="text" style="width:50px"; min="1" max="1000" id="sexam" name="sexam" class="text-center" placeholder="Exam" onkeypress='validate(event)'>    
                <input type="text" style="width:50px"; min="1" max="1000" id="sps" name="sps" class="text-center" placeholder="PS" onkeypress='validate(event)' readonly>   
                <input type="text" style="width:50px"; min="1" max="1000" id="sws" name="sws" class="text-center" placeholder="WS" onkeypress='validate(event)' readqonly>  
                </tr>   
                <br><br>
                </div>
                <div class="col-md-1 text-center">
                <p class="h3">Grade</p>
                <tr>
                    <br><br>
                <div class="text-center h3"><label>Final Grade</label></div>
                <input type="text" style="width:50px"; min="1" max="1000" id="grade" name="grade" class="text-center" placeholder="?" readonly>
                </tr>
                </div>
                <input type="submit" value="Submit" class="btn btn-success mt-2">
        </div>
        </form>
        </div>

   <!-- Compiled and minified JavaScript -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <!-- Bottom sheet Modal Script Modal Assignment -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal1');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal1').modal();
        });
    </script>
    <!-- End of Modal Assignment  -->

     <!-- Bottom sheet Modal Script Modal Quizzes -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal2');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal2').modal();
        });
    </script>
    <!-- End of Modal Quizzes  -->

     <!-- Bottom sheet Modal Script Modal Exam -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal3');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal3').modal();
        });
    </script>
    <!-- End of Modal Exam  -->

    <!-- Bottom sheet Modal Script Modal Activities -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal4');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal4').modal();
        });
    </script>
    <!-- End of Modal Activities  -->

    <!-- Start Auto Compute -->
    <Script>
        // Written HPG Computation
        $('.writtenHpg').keyup(function() {
            var writtenHpgScores = 0;
         $('.writtenHpg').each(function() {
            writtenHpgScores += Number($(this).val());
            
         });
         $('#WHTOTAL').val(writtenHpgScores);  
        

        // Written Scores Computation 
        $('.writtenScores').keyup(function() {
            var writtenScores = 0;
         $('.writtenScores').each(function() {
         writtenScores += Number($(this).val());
         wps = writtenScores / writtenHpgScores * 100 ; 
         percentage = 30;
         wws = (percentage / 100) * wps;
         });
         $('#WSTOTAL').val(writtenScores);
         $('#WSCPS').val(wps); 
         $('#WSCWS').val(wws);     
      //
        // Performance HPG Auto Compute 
        $('.performanceHpg').keyup(function() {
            var performanceHpg = 0;
         $('.performanceHpg').each(function() {
            performanceHpg += Number($(this).val());
         });
         $('#PHTOTAL').val(performanceHpg);  
        
        // Performance Scores Auto Compute 
        $('.performanceScores').keyup(function() {
            var performanceScores = 0;
         $('.performanceScores').each(function() {
            performanceScores += Number($(this).val());
            pps = performanceScores / performanceHpg * 100 ;
            percentage = 50 ;
            pws = (percentage / 100 ) * pps ;

         });
         $('#PSTOTAL').val(performanceScores);  
         $('#PPSCPS').val(pps);  
         $('#PPSCWS').val(pws);  
     //
      $('#hpgexam').keyup(function() {
        var hpgexam = $(this).val();
            
       $('#sexam').keyup(function() {
         var sexam = $(this).val();
              ps = sexam / hpgexam * 100 ;
              percentage = 20;
              ws = (percentage / 100) * ps ;
              $('#sps').val(ps);
              $('#sws').val(ws);
            total = wws + pws + ws 
              $('#grade').val(total);
                        }); 
                    });
                 });
            });
        });
    });

    </Script>   
    <!-- End Auto Compute -->
 
    <!-- Validate numbers only  -->
    <script>
     function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
            }
    </script>
    <!-- End of Validate Numbers -->
</body>
</html>