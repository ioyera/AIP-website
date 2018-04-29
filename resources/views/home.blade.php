@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">


  <form action="store" method="post" role="form" id="newUserForm" name="newUserForm">
  
  {{ csrf_field() }}
    <div class="box box-info">
        
            <div class="box-body">
              <div class="col-sm-12">
                <div  align="center"> <img alt="User Pic" style="cursor: pointer; width: 100px; height: 100px; border:2px solid #03b1ce;" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file" style="position: absolute;
    left: -9999px;">


<!-- <div style="color:#999;" >click here to change profile image</div> -->
                <!--Upload Image Js And Css--> 
                     
                </div>
                <br>
              <!-- /input-group -->
              </div>


              <div class="col-md-12">
              <span>
              <h4 name="name" id="name" type="text" style="color:#00b1b1;">{{ Auth::user()->name }} </h4></span>
                <span><p name="role">{{ Auth::user()->role }}</p></span>            
              </div>
              <div class="clearfix"></div>
                <hr style="margin:5px 0 5px 0;">
              <div class="col-md-10"></div>
              
              <form id="bootstrapSelectForm" method="post" class="form-horizontal">
              <div class="form-group" style="margin-left: 15px">
                <h5 for="project" style="color:#768c8a; font-family: sans-serif; font-size: 15px">Select Project:</h5>
                <select class="form-control top-buffer-sm" name="project" id="project" style="width: 97%"  required autofocus>
                    <option></option>
                    @foreach($project_name as $projects)
                    <option value="{{$projects->project_id}}">{{$projects->project_num}} : {{$projects->project_name}}</option>
                    @endforeach
                </select>
              </div>
              </form>
              
              <div class="clearfix"></div>
              <div class="bot-border" style=" border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0"></div>
                  <div class="bootstrap-iso">
                   <div class="container-fluid" style="margin-left: 15px; margin-right: 15px">
                    <div class="row">
                     <div class="col-md-12">

                      <!-- Form code begins -->
                        <div class="form-group row"> 
                        	<!-- Date input -->
                          <h5 for="date" style="color:#768c8a; font-family: sans-serif; font-size: 15px">Feedback:</h5>
                            <textarea class="form-control" id="comment"></textarea>
                          
                          <!-- <input data-date-format="YYYY/MM/DD" type="date" required="required" name="date" id="date"> -->
                            <!-- <input type="text" id="datepicker"> -->
                          <!-- <input class="form-control top-buffer-sm" id="datepicker" name="date" placeholder="mm/dd/YYY" type="date" required="required"/> -->
                          
                        </div>
                       <!-- Form code ends --> 

                      </div>
                    </div>    
                   </div>
                  </div>



          

              <div class="clearfix"></div>
              <div class="bot-border" style=" border-bottom:1px #f8f8f8 solid;  margin:5px 0  15px 0"></div>

                <!-- <div class="col-xs-12"> -->
                  <!-- <div class="form-group"> --> <!-- Submit button -->
                  <!-- <form action="store" method="post"> -->
                    <div class="centered" style="text-align: center;">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" id="createUserSubmit" class="btn btn-default" name="submit" value="submit">Submit</button>
                      
                    </div>

                  </form>

              <!-- <div class="clearfix"></div>
              <div class="bot-border" style=" border-bottom:1px #f8f8f8 solid;  margin:5px 0  15px 0"></div> -->

<!--               <p id="demo"></p>

              <button onclick="myFunction()">Date</button> -->
                  <!-- </div> -->
                <!-- </div> -->

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        
        <!-- </form> -->
          <?php
            // if(isset($_POST['submit'])){
                if(!empty($_POST['date'])){

                  $date = $_POST['date'];
                  $date = strtotime($date);
                  $date = date("Y-m-d", $date);
              }


              
            // }
          ?>




            
    </div> 
    </div>
       
</div>  
    


        

       
       
       
       
       
       
       
       
       
   </div>
</div>
@endsection

@section('scripts')


<script>

          // function myFunction() {
          //     var x = document.getElementById("date").value;
          //     document.getElementById("demo").innerHTML = x;
          // }
        </script>
<script type="text/javascript">
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
@endsection
