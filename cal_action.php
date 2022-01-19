<DOCTYPE html>
<html>
    <head>
        
    </head>
    <body class="bodydesign">
<?php
    
  $month=  ($_GET["Month"]);
  $currentmonth = date("F");
  $nickname=  ($_GET["nickname"]);
  $color= ($_GET["coloroftext"]);
 
  $firstday = $_GET["firstDay"];
  $dt = date("Y-m-01");
  $timestamp = strtotime($dt);

  $day = date('D', $timestamp);
  $firstdaycurrentmonth =$day."day";
 

   if($month == "-Month-"){
     $month = $currentmonth;
   }
   if($firstday == "--Day--"){
    $firstday=$firstdaycurrentmonth;
   }
   


echo $nickname;
?>
<div>
<table border=1 class="coloring">
<?php
 echo "Month Selected : ". $month ."<br>"; 
  echo "First Day Of Month Selected : ".$firstday."<br><br>";
echo "<tr><th>Mon</th><th>Tues</th><th>Wed</th><th> Thurs </th><th> Fri </th><th> Sat </th><th> Sun </th></tr>";

switch ($month){
    case "January":
    case "March":
    case "May":
    case "July":
    case "August":
    case "October":
    case "December":
    
    switch ($firstday){
       case "Monday":
            echo "<tr><td>1</td><td>2</td><td>3</td><td>4</td><td> 5 </td>
            <td>6</td><td>7</td></tr>
            <tr><td>8</td><td>9</td><td>10</td><td>11</td><td>12 </td><td> 13 </td><td>14 </td></tr><br>
            <tr><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td></tr><br>
            <tr><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td></tr><br>
            <tr><td>29</td><td>30</td><td>31</td><td> </td><td>  </td><td>  </td><td> </td></tr><br>";
            break;
            
            case "Tuesday":
            echo "<tr><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td></tr>
            <tr><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td></tr><br>
            <tr><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td></tr><br>
            <tr><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td></tr><br>
            <tr><td>28 </td><td>29</td><td>30</td><td>31</td><td> </td><td>  </td><td>  </td></tr><br>";
            break;
            case "Wednesday":
            echo "<tr><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td></tr>
            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td></tr><br>
            <tr><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td></tr><br>
            <tr><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td></tr><br>
            <tr><td> 27 </td><td>28 </td><td>29</td><td>30</td><td>31</td><td> </td><td>  </td></tr><br>";
            break;
            
            case "Thursday":
            echo "<tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td></tr>
            <tr><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td></tr><br>
            <tr><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td></tr><br>
            <tr><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td></tr><br>
            <tr><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td><td>31</td><td> </td></tr><br>";
            break;
             case "Friday":
            echo "<tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr>
            <tr><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><br>
            <tr><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td></tr><br>
            <tr><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td></tr><br>
            <tr><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td><td>31</td></tr><br>";
            break;
            
             case "Saturday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
            <tr><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td></tr><br>
            <tr><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td></tr><br>
            <tr><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td></tr><br>
            <tr><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td></tr><br>
             <tr><td>31</td><td> </td><td>  </td><td> </td><td> </td><td></td><td></td></tr><br>";
            break;
            
             case "Sunday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td></tr>
            <tr><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td></tr><br>
            <tr><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td></tr><br>
            <tr><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td></tr><br>
            <tr><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td></tr><br>
             <tr><td>30</td><td>31</td><td> </td><td>  </td><td> </td><td> </td><td></td></tr><br>";
            break;
           
            
    }
          break;
    
        case "February":
            
        switch ($firstday){
        case "Monday":
            echo "<tr><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td>
            <td>6</td><td>7</td></tr>
            <tr><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td></tr><br>
            <tr><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td></tr><br>
            <tr><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td></tr><br>
            ";
            break;
            
            case "Tuesday":
            echo "<tr><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td></tr>
            <tr><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td></tr><br>
            <tr><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td></tr><br>
            <tr><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td></tr><br>
            <tr><td>28 </td><td></td><td></td><td></td><td> </td><td>  </td><td>  </td></tr><br>";
            break;
            case "Wednesday":
            echo "<tr><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td></tr>
            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td></tr><br>
            <tr><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td></tr><br>
            <tr><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td></tr><br>
            <tr><td> 27 </td><td>28 </td><td></td><td></td><td></td><td> </td><td>  </td></tr><br>";
            break;
              case "Thursday":
            echo "<tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td></tr>
            <tr><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td></tr><br>
            <tr><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td></tr><br>
            <tr><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td></tr><br>
            <tr><td> 26 </td><td> 27 </td><td>28 </td><td></td><td></td><td></td><td> </td></tr><br>";
            break;
             case "Friday":
            echo "<tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr>
            <tr><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><br>
            <tr><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td></tr><br>
            <tr><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td></tr><br>
            <tr><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td></td><td></td><td></td></tr><br>";
            break;
            
             case "Saturday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
            <tr><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td></tr><br>
            <tr><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td></tr><br>
            <tr><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td></tr><br>
            <tr><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td></td><td></td></tr><br>
            ";
            break;
            
             case "Sunday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td></tr>
            <tr><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td></tr><br>
            <tr><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td></tr><br>
            <tr><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td></tr><br>
            <tr><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td></td></tr><br>
             ";
            break;
        
        }   
break;
     
       case "April":
       case "June":
       case "September":
       case "November":
       
    
    switch ($firstday){
        case "Monday" :
            echo "<tr><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td>
            <td>6</td><td>7</td></tr>
            <tr><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td></tr><br>
            <tr><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td></tr><br>
            <tr><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td></tr><br>
            <tr><td>29</td><td>30</td><td></td><td> </td><td>  </td><td>  </td><td> </td></tr><br>";
            break;
            
            case "Tuesday":
            echo "<tr><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td></tr>
            <tr><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td></tr><br>
            <tr><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td></tr><br>
            <tr><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td></tr><br>
            <tr><td>28 </td><td>29</td><td>30</td><td></td><td> </td><td>  </td><td>  </td></tr><br>";
            break;
            case "Wednesday":
            echo "<tr><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td><td> 5 </td></tr>
            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td><td>12 </td></tr><br>
            <tr><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td><td> 19 </td></tr><br>
            <tr><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td><td> 26 </td></tr><br>
            <tr><td> 27 </td><td>28 </td><td>29</td><td>30</td><td></td><td> </td><td>  </td></tr><br>";
            break;
             case "Thursday":
            echo "<tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4 </td></tr>
            <tr><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11 </td></tr><br>
            <tr><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td><td>18 </td></tr><br>
            <tr><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td><td>25 </td></tr><br>
            <tr><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td><td></td><td> </td></tr><br>";
            break;
            
             case "Friday":
            echo "<tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr>
            <tr><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><br>
            <tr><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td><td>17</td></tr><br>
            <tr><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td><td>24</td></tr><br>
            <tr><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td><td></td></tr><br>";
            break;
            
             case "Saturday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
            <tr><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td><td>9</td></tr><br>
            <tr><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td><td>16</td></tr><br>
            <tr><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td><td>23</td></tr><br>
            <tr><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td><td>30</td></tr><br>
             <tr><td></td><td> </td><td>  </td><td> </td><td> </td><td></td><td></td></tr><br>";
            break;
            
             case "Sunday":
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td></tr>
            <tr><td>2</td><td>3</td><td>4 </td><td> 5 </td><td>6</td><td>7</td><td>8</td></tr><br>
            <tr><td>9</td><td>10</td><td>11 </td><td>12 </td><td> 13 </td><td>14 </td><td>15</td></tr><br>
            <tr><td>16</td><td>17</td><td>18 </td><td> 19 </td><td> 20 </td><td>21 </td><td>22</td></tr><br>
            <tr><td>23</td><td>24</td><td>25 </td><td> 26 </td><td> 27 </td><td>28 </td><td>29</td></tr><br>
             <tr><td>30</td><td></td><td> </td><td>  </td><td> </td><td> </td><td></td></tr><br>";
            break;
    }
        break;
       
      
     



}

?>
</table>
</div>
  
  
  <style>
        .bodydesign,body{
            color:<?php echo $_GET["coloroftext"]?>;
        }
         body{
               padding-left:450px;
               padding-right:450px;
               padding-top:80px;
               background-color:yellow;
           }
          div{
               padding-left:100px;
               border-style:solid;
               padding-top:50px;
               padding-bottom:50px;
               padding-right:100px;
           }
           table{
               width:400px;
               height:300px;
               border-collapse:collapse;
               text-align:center;
           }
            
        </style>
        </body>
        </html>