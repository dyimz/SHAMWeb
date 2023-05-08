<!doctype html>
<html>
  <head>
    <title>Enrolled Students Report</title>
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
        
</header>
<div class="main">
    <h3 class="center">NUMBER OF ENROLLED STUDENTS PER SCHOOL YEAR</h3>
    <table class="mtable center">
        <thead class="center">
            <tr>
                <th style="background-color:#FFB347;">Strand</th>
                @foreach($years as $year)
                <th>{{$year->year}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $course => $values)
            <tr>
                <td style="background-color:#F7BE6D; border: 2px solid black;">{{ $course }}</td>
                @foreach ($values as $value)
                <td class="center">{{ $value }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

  </body>
</html>
