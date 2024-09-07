<?php
session_start();
// $con=mysqli_connect("localhost","root","");
// mysqli_select_db($con,"cureit");
// $email=$_SESSION['email'];
// $result=mysqli_query($con,"select id,name,number from user where email='$email'");
// while($row=mysqli_fetch_array($result)){
//      $_SESSION['id']=$row[0];
//     $_SESSION['name']=$row[1];
//    $_SESSION['number']=$row[2];
$_SESSION['did']=$_REQUEST['id'];   
//}
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>"

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="cal.js"></script>
    <link rel="stylesheet" href="website.css">
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #e12464 !important;
            background-repeat: no-repeat;
            padding: 0px !important
        }

        .container-fluid {
            padding-top: 120px !important;
            padding-bottom: 120px !important
        }

        .card {
            box-shadow: 0px 4px 8px 0px #828080
        }

        input {
            padding: 10px 20px !important;
            border: 1px solid #000 !important;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: #616161 !important;
            color: #fff !important;
            font-size: 16px;
            letter-spacing: 1px;
            width: 180px
        }

        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #512DA8;
            outline-width: 0
        }

        ::placeholder {
            color: #fff;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #fff
        }

        ::-ms-input-placeholder {
            color: #fff
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .datepicker {
            background-color: #000 !important;
            color: #fff !important;
            border: none;
            padding: 10px !important
        }

        .datepicker-dropdown:after {
            border-bottom: 6px solid #000
        }

        thead tr:nth-child(3) th {
            color: #fff !important;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 10px
        }

        .dow,
        .old-day,
        .day,
        .new-day {
            width: 40px !important;
            height: 40px !important;
            color: #fff;
            border-radius: 0px !important
        }

        .old-day:hover,
        .day:hover,
        .new-day:hover,
        .month:hover,
        .year:hover,
        .decade:hover,
        .century:hover {
            border-radius: 6px !important;
            background-color: #eee;
            color: #000
        }

        .active {
            border-radius: 6px !important;
            background-image: linear-gradient(#90CAF9, #64B5F6) !important;
            color: #000 !important
        }

        .disabled {
            color: #616161 !important
        }

        .prev,
        .next,
        .datepicker-switch {
            border-radius: 0 !important;
            padding: 20px 10px !important;
            text-transform: uppercase;
            font-size: 20px;
            color: #fff !important;
            opacity: 0.8
        }

        .prev:hover,
        .next:hover,
        .datepicker-switch:hover {
            background-color: inherit !important;
            opacity: 1
        }

        .cell {
            border: 1px solid #BDBDBD;
            margin-left: 0px;
            cursor: pointer;
            /* width: 200px; */
        }

        .cell:hover {
            border: 1px solid #3D5AFE
        }

        .cell.select {
            background-color: #3D5AFE;
            color: #fff
        }
       .cell .notselect{
            background-color: white;
      
        }

        .fa-calendar {
            color: #fff;
            font-size: 30px;
            padding-top: 8px;
            padding-left: 5px;
            cursor: pointer
        }
        .cursor{
            cursor:not-allowed;
        }
        #maindiv{
            font-weight: bold;
            font-size: 20px;
            color: #223a66;
            margin-right: 100px !important;
        }
        .display
    {
        display:flex;
    }
    </style>
</head>

<body>
    <div class="container-fluid px-0 px-sm-4 mx-auto">
        <div class="row justify-content-center mx-0">
            <div class="col-lg-10">
                <div class="card border-0">
                    <form autocomplete="off " action="extra.php">
                        <div class="card-header bg-dark">
                            <div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1"> <input
                                    type="text" id="dp1" class="datepicker" placeholder="Pick Date" name="date" ><span
                                    class="fa fa-calendar"></span> </div>
                        </div>
                        <div >
                            <div class="offset-5" id="maindiv">Please Select Time</div>
                            <div class="card-body p-3 p-sm-5">
                                <div class=" display text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1 ">9:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">9:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">9:45</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">10:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">10:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">10:45</div>
                                    </div>
                                </div>
                                <div class=" display text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">11:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">11:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">11:45</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">12:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">12:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">12:45</div>
                                    </div>
                                </div>
                                <div class=" display text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">13:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">13:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">13:45</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">14:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">14:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">14:45</div>
                                    </div>
                                </div>
                                <div class=" display text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">15:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">15:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1">16:15</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 disable px-2">
                                        <div class="cell py-1 ">17:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                       <button  class="rounded-pill btn offset-5" id="pid" src>Pay $30</button></a>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    let months=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];
    let obj = document.getElementById("dp1")
    let cells=document.querySelectorAll(".cell")
   
    let date = new Date();
    let date1 = date.getDate();
    let month = date.getMonth()+1 ;
    let year = date.getFullYear();
    let hour = date.getHours();
    let min = date.getMinutes();
    let time = hour + ":" + min;
    let div, div1, result,somthing
    let todate=date1+"-"+months[date.getMonth()]+" "+year

    if (date1 <= 9) {
        date1 = "0" + date1;

    }
    if (month <= 9) {
        month = "0" + month;
    }
    let fulldate = date1 + "-" + month + "-" + year
    obj.value = fulldate;
    let cal, td;
    obj.addEventListener("click", () => {

        cal = document.querySelector(".table-condensed");
        td = cal.getElementsByTagName("td")
        for (let i = 0; i < td.length; i++) {
            td[i].addEventListener("click", check)
        }
    })
    function check(e){
        let disable1 = document.querySelectorAll(".disable")
                for (let i = 0; i < disable1.length; i++) {
                     somthing=e.target.innerText+"-"+document.querySelector(".datepicker-switch").innerText
                    if (todate.localeCompare(somthing)==0) {
                        div1 = disable1[i].getElementsByTagName("div")[0].innerText;
                        if (parseInt(div1) <= parseInt(hour) && hour>=17) {
                            document.getElementById("maindiv").innerText="Sorry Doctor Is Not Available At This Date,Please Select Another Date";                  
                            disable1[i].style.display="none"
                            document.getElementById("pid").disabled=true
                            document.getElementById("pid").classList.add("cursor")

                        }
                        else if(parseInt(div1) <= parseInt(hour))
                        {
                            disable1[i].style.display="none"
                            document.getElementById("pid").classList.remove("cursor")
                            document.getElementById("pid").disabled=false
                         
                       
                    
                        }
                        else{
                            disable1[i].style.display=""                     
                         
                            document.getElementById("pid").classList.remove("cursor")
                            document.getElementById("pid").disabled=false
                         
                        }

                    }
                    else{
                        disable1[i].style.display=""                     
                        document.getElementById("maindiv").innerText="Please Select Time";                  
                        document.getElementById("pid").classList.remove("cursor")
                            document.getElementById("pid").disabled=false
                         
                    }
                }
                 
                
    }
    let disable1
    let maindiv;
    window.onload=init
    function init(){
     disable1 = document.querySelectorAll(".disable")
                for (let i = 0; i < disable1.length; i++) {
                    
                    if (fulldate.localeCompare(obj.value)==0) {
                        div1 = disable1[i].getElementsByTagName("div")[0].innerText;
                        if (parseInt(div1) <= parseInt(hour)&& hour>=17) {
                            disable1[i].style.display="none"
                            document.getElementById("maindiv").innerText="Sorry Doctor Is Not Available At This Date,Please Select Another Date";                  
                            document.getElementById("pid").disabled=true
                            document.getElementById("pid").classList.add("cursor")
                       
                        }
                        else if(parseInt(div1) <= parseInt(hour))
                        {
                            disable1[i].style.display="none"
                            document.getElementById("pid").classList.remove("cursor")
                            document.getElementById("pid").disabled=false
                          
                            
                        }
                        else{
                            disable1[i].style.display=""                     
                            document.getElementById("pid").classList.remove("cursor")
                            document.getElementById("pid").disabled=false
                          
                        }
                       
                    }
                 }
                }

            document.getElementById("pid").addEventListener("click",()=>{
                for(let i=0;i<cells.length;i++)
                {
                    if(cells[i].classList.contains("select"))
                    {
                        document.cookie="Date="+obj.value
                        document.cookie="Time="+document.querySelector(".select").innerText

                    }
                }
                
            })
</script>

</html>
