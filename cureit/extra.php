<?php
session_start();
    date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");
    $time= date("H:i");
  if(isset($_COOKIE['Date']))
    {
        if(isset($_COOKIE['Time']))
        {

            if(strcmp($date,$_COOKIE['Date'])==0)
            {
                if((int)$_COOKIE['Time']<(int)$time)
                {
                    header("Refresh:0, url=calander.php");

                }
                else{
                   header("Refresh:0, url=success/index.php");
                }
            }
            else{
               header("Refresh:0, url=success/index.php");
            }
         }
        else{
            header("Refresh:0, url=calander.php");
        }
    }
    else{
        header("Refresh:0, url=calander.php");
    }
?>