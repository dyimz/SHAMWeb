<!doctype html>
<html>
  <head>
    <title>Student at Risk Report</title>
    <style>
    @page { margin:90px; }
    html { margin-left: 20px;
            margin-right: 20px;}
        body {
        margin: 50px;
        }
    header {
        position: fixed;
        top: -35px;
        left: 0px;
        right: 0px;
        height: 50px;
    }
    .page-break {
        page-break-after: always;
    }

    .header {
        width: 100%;
    }
    .header h5.center {
    font-weight: normal; /* make the first h5 not bold */
    margin: 0;
    }

    .header h4.center, h3.center {
        font-weight: bold; /* make h4 and h3 bold */
        margin: 0;
    }
    .header label{
    }
    .center {
    text-align: center;
    }
    .right {
    text-align: right;
    }
    .left {
    text-align: left;
    }
    h3, h4, h5, div {
    margin: 0;
    padding: 0;
    }
    .main{
        padding-top: 80px;
    }

    .mtable{
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        margin-top: 20px;
        border: 2px solid black;
    }
    .mtable th, .mtable td {
    border: 1px solid black;
    margin-top: 0;
    margin-bottom: 0;
   
    }
    
    .mtable th{
        padding:3px;
        background-color: #D3d3d3;
        border: 2px solid black;
    }
    .mtable tr,td{
        padding:3px;

    }


</style>
  </head>
  <body>
  <header>
        <div style="float:left; margin-left:250px; margin-top:30px;">
            <img src="<?php echo $pic1 ?>" style="width:70px;">
        </div>
        <div style="float:right; margin-right:250px; margin-top:30px;">
            <img src="<?php echo $pic2 ?>" style="width:70px;">
        </div>
        <h5 class="center">Republic of the Philippines<br>
                            Department of Education<br>
                            National Capital Region </h5>
        <h4 class="center">Division of Taguig City and Pateros<br>
                            SIGNAL VILLAGE NATIONAL HIGH SCHOOL </h4>
        <h3 class="center">SENIOR HIGH SCHOOL</h3>
        <h5 class="center">Ballecer St., Central Signal Village, Taguig City  </h5>
        <div style="text-align: center;">
            <label for="sy" style="font-family: 'Serif', Times New Roman; font-size: 15px; text-align: center; padding-top: 10px; display: inline-block;">School Year:</label>
            <label for="sy" style="font-family: 'Serif', Times New Roman; font-size: 15px; text-align: center; padding-top: 10px; display: inline-block; text-decoration: underline;">{{$year->year}}</label><br>
        </div>
</header>
<div class="main">
    <h3 class="center">STUDENT AT RISK RATE</h3>
    <table class="mtable center">
        <thead class="center">
            <tr>
            <th style="background-color:#FFB347;">Strand</th>
                
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($risk as $index => $value)
            <tr>
                <td>{{ $strand[$index] }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

  </body>
</html>
