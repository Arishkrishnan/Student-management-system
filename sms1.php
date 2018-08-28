<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

 <script>
    function qw()
    {
var roll = document.getElementById("rollnum").value;
var sem = document.getElementById("sem").value;
var myURL = 'http://results.kongu.edu/allresout.php?regno=' + roll + '-'+sem;
document.getElementById('myUniqueLinkId').href = myURL;
}
  $(document).ready(function(){
    $("submit").click(function(){
        $.ajax({url: "sms1.php", success: function(result){
            $("#div1").html(result);
        }});
    });
});
   </script>
<script type="text/javascript">
        function GetDays(a){
                var dropdt = new Date(document.getElementById("drop_date"+a).value);
                var pickdt = new Date(document.getElementById("pick_date"+a).value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(a){
        if(document.getElementById("drop_date"+a)){
            document.getElementById("numdays"+a).value=GetDays(a);
        }  
    }

    </script>
 

<style>
    .content { display:none }


        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }

        button{
          width:200px;
        }
        .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 40px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav a:hover{
    color: #f1f1f1;
}

/* Main content */

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}


</style></head>

<body>



 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">LeaderBoard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="#">Academics</a>
                </li>
                <li class="nav-item dropdown active bg-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
                    <div class="dropdown-menu" aria -labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Placements</a>
                        <a class="dropdown-item" href="#">Co-curricular</a>
                        <a class="dropdown-item" href="#">Extra Curicular</a>
                        <a class="dropdown-item" href="#">Settings</a>
                    </div>
                </li>


            </ul>
                <?php
                 echo '<br><p style="color:white;">'.$_SESSION["name"] .'</p><p>  </p>';
                 ?>

     <!-- $_SESSION['name']=$_POST['username'];
     
    
      ?> -->
                <a href="#"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">LogOut</button></a>
           
        </div>
    </nav>



    <center> 
     <div class="sidenav">
  

         <div class="navigation">
         <p></p>
         
         <button class="but" type="button" id="implant">INPLANT</button>
         <button class="but" type="button" id="indusvi">INDUSTRIAL VISIT</button>
         <button class="but" type="button" id="onecred">ONE CREDIT</button> 
         <button class="but" type="button" id="aa">ACADEMIC ACHIEVEMENTS</button>
    	 <button class="but" type="button" id="semester">SEMESTER</button>
         </div>
     </div>


      <div id="semesterdiv" class="content">
      <center>
         <br><h2>SEMESTER RESULTS</h2>
         <br><br><br>
        <tr>
           <td>SEMESTER:</td>
           <td ><select id="sem">
            <option value="ODD_2015-DECEMBER_2015">ODD_2015-DECEMBER_2015</option>
            <option value="EVEN_2015-MAY_2016">EVEN_2015-MAY_2016</option>
            <option value="ODD_2016-NOVEMBER_2016">ODD_2016-NOVEMBER_2016</option>
            <option value="EVEN_2016-MAY_2017">EVEN_2016-MAY_2017</option>
            <option value="ODD_2017-NOVEMBER_2017">ODD_2017-NOVEMBER_2017</option>

              </select>
           </td>
        </tr>    <br><br><br>

        <tr>
          <td>ROLLNO: </td>
          <td><input type="text" id="rollnum"></td>
        </tr>   <br><br><br>

       <a onclick=qw()  href="#" id="myUniqueLinkId" target="_blank" >Get Result</a>
     </center>
    </div>   



<div id="implantdiv" class="content">
    <center><h2>INPLANT TRAINING</h2>
    
    
    <form action="implantt.php" method="POST" enctype="multipart/form-data" id="foo" >
         <input type="hidden" name="rollnum" value=$_SESSION['name'] />
         <p>Company Name  <input type="text" class="textbox" id="imcname"> 
        <p>Place: <input type="text" name="place" /></p>
       <div id="reserve_form">

     <div id="pickup_date"><p><label class="form">Start Date:</label><input type="date" class="textbox" id="pick_date1" name="pickup" onchange="cal(1)"/></p></div>

    <div id="dropoff_date"><p><label class="form">End Date:</label><input type="date" class="textbox" id="drop_date1" name="dropoff" onchange="cal(1)"/></p></div>

    <div id="numdays"><label class="form">Number of days:</label><input type="text" class="textbox" id="numdays1" name="numdays"/></div>
    </div>
       <p> Certificate:<input type="file" name="fileToUpload" id="fileToUpload"></p>
        <input type="submit" value="Submit" />
    </form>
</center>
</div>
  
  <div id="indusvidiv" class="content" >
    <center><h2>INDUSTRIAL VISIT</h2>
    
    <br>
    <form action="indus.php" method="POST" enctype="multipart/form-data"/>
        <p>Company Name: <input type="text" name="compname" /></p>
        <p>Place: <input type="text" name="place" /></p>

        <div id="reserve_form">
      <div id="pickup_date"><p><label class="form">Start Date:</label><input type="date" class="textbox" id="pick_date2" name="pickup" onchange="cal(2)"/></p></div>

    <div id="dropoff_date"><p><label class="form">End Date:</label><input type="date" class="textbox" id="drop_date2" name="dropoff" onchange="cal(2)"/></p></div>

    <div id="numdays"><label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays"/></div>
    
    </div>
        <p>Total  Students:<input type="text" name="totstud" /></p>
        <p>Accompanying Staff:<input type="text" name="staff" /></p>
        <p>Certificate: <input type="file"  value ="upload certificate" name="fileToUpload" id="fileToUpload" accept="image/*" data-buttonText="certificate"></p>
        <input type="submit" value="Submit" />
    </form>
</center>
</div>

<div id="onecreddiv" class="content">
      <center>
         <br><h2>ONECREDIT COURSE DETAILS</h2>
         <br><br><br>
          <form action="onecredd.php" method="POST"/>
        <p>Course code: <input type="text" name="cid" /></p>
        <p>Course Name: <input type="text" name="cname" /></p>
        <p>Grade: <input type="text" name="grade" /></p>
      
        <input type="submit" value="Submit" />
    </form>

</center>
    </div>   



  <div id="aadiv" class="content">
    <center><h2>ACADEMIC ACHIEVEMENT</h2>
        <form action="acadache.php" method="POST" enctype="multipart/form-data"/>
        <p>Name: <input type="text" name="rollnum" /></p>
        <p>Award: <input type="text" name="award" /></p>
       <p> <input type="file" name="fileToUpload" id="fileToUpload"></p>
        <input type="submit" value="Submit" />
    </form>

    
</center>
</div>





<script>


    $(function() {
  $(".but").on("click",function(e) {
    e.preventDefault();
    $(".content").hide();
    $("#"+this.id+"div").show();
  });
});


</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
   <script type="text/javascript">
    	var request;

// Bind to the submit event of our form
$("#foo").submit(function(event){
console.log(2);
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();
    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData =new FormData( $form);

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "implantt.php",
        type: "post",
        enctype: 'multipart/form-data',
         processData: false,
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        confirm("one record added");
        console.log(response)
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        confirm(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});


    </script>

