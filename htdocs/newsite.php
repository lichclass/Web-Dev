<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link ref="stylesheet" src="mystyles.css">
<style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: rgb(29, 29, 29);
            color: white;
        }
        
        h1 {
            color: #eb4242;
        }

        h3 {
            color: white;
        }

        table {
            color: red;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        [class*="col-"] {
            float: left;
            padding: 15px;
        }

        html {
            font-family: 'Courier New', Courier, monospace ;
        }

        .header {
            color: #ffffff;
            padding: 20px;
            border-bottom: red solid 5px;
            top:0;
        }

        .header div{
            display: inline-block;
            text-align: left;
            margin: 0 10px;
        }

        .header div img{
            max-width: 200px;
        }


        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu li {
            padding: 8px;
            margin-bottom: 7px;
            background-color: #000000;
            color: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .menu li:hover {
            background-color: #da0000;
        }

        .aside {
            background-color: #000000;
            padding: 15px;
            color: #ffffff;
            text-align: center;
            font-size: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .footer {
            background-color: red;
            color: #ffffff;
            text-align: center;
            font-size: 12px;
            padding: 15px;
        }

        .footer img{
            max-width: 50px;
        }

        /* FOR SCHEDULE */
        table {
            margin: auto;
            width: 100%;
        }

        table, tr, th, td{
            border: 1px solid;
            border-collapse: collapse;
            font-size: 12px;
        }

        tr:hover {
            background-color: white;
            color: black;
        }

        #td_day {
            font-weight: bold;
        }

        #CIS1201 {
            background-color: #f08080;
        }

        #CIS1202 {
            background-color: #add8e6;
        }

        #CIS1204 {
            background-color: #faa07a;
        }

        #GEFEL {
            background-color: #90ee90;
        }

        #CIS1205 {
            background-color: #2eb2aa;
        }

        #CIS1203 {
            background-color: #cd853f;
        }

        #EDM2 {
            background-color: #d3d3d3;
        }

        #TPE1202 {
            background-color: #ee82ee;
        }

        #CIS2106N {
            background-color: #d2b48c;
        }

        #NSTP2 {
            background-color: #f96347;
        }

        td {
            padding: 15px;
            font-weight: bold;
        }

        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }

        @media only screen and (min-width: 600px) {
            /* For tablets: */
            .col-s-1 {width: 8.33%;}
            .col-s-2 {width: 16.66%;}
            .col-s-3 {width: 25%;}
            .col-s-4 {width: 33.33%;}
            .col-s-5 {width: 41.66%;}
            .col-s-6 {width: 50%;}
            .col-s-7 {width: 58.33%;}
            .col-s-8 {width: 66.66%;}
            .col-s-9 {width: 75%;}
            .col-s-10 {width: 83.33%;}
            .col-s-11 {width: 91.66%;}
            .col-s-12 {width: 100%;}
        }
        @media only screen and (min-width: 768px) {
            /* For desktop: */
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}
        }
</style>
</head>
<body>

<div class="header">
  <div>
    <img src="nash.jpeg">
  </div>
  <div>
    <h1>
        
        <?php
            if(!isset($_COOKIE['user'])) {
                echo "User!";
            } else {
                echo @$_COOKIE['user'];
            }
        ?>

    </h1>
    <h2>
        <?php 
            
            if(!isset($_SESSION["user_info"])) {
                echo "User-info";
            } else {
                echo @$_SESSION["user_info"];
            }
        ?>
    </h2>
  </div>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <a href="?q=aboutme"><li>About me</li></a>
      <a href="?q=myhobbies"><li>My Hobbies</li></a>
      <a href="?q=schedule"><li>Schedule</li></a>
      <a href="?q=apache"><li>Boeing AH-64</li></a>
    </ul>
  </div>

  <div class="col-6 col-s-9">

    <?php

        if(isset($_GET['q'])){

            if($_GET['q'] == "myhobbies"){
                echo '<h1>My Hobby</h1>
                      <p>Hi my guy</p>';
            }
            else if ($_GET['q'] == "schedule"){
                echo '<h1>School Depressing Schedule</h1>';
                $filename = "schedule.txt";
                $fileContents = file_get_contents($filename);
                echo $fileContents;
            }
            else if ($_GET['q'] == "apache"){
                echo '<h1>Boeing AH-64 Apache Attack Helicopter</h1>
                        <p>Test Helicopter</p>';
            }
            else if ($_GET['q'] == "aboutme"){
                $filename = "aboutme.txt";
                $fileContents = file_get_contents($filename);
                echo $fileContents;
            }

        }
        else {
                $filename = "aboutme.txt";
                $fileContents = file_get_contents($filename);
                echo $fileContents;
        }

    ?>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>What?</h2>
      <p>Childhood of Nash.</p>
      <h2>Where?</h2>
      <p>In the Small Country of The Philippines.</p>
      <h2>Summary</h2>
      <p>Nash lived a very generic life just the same as other people.</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>


