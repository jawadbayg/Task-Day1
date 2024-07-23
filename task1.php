<!DOCTYPE html>
<html lang="en">
<body>
    
<!-- Associative array -->
    <?php
    //    $cars = ["A"=>"Toyota","B"=>"Ford","C"=>"Honda"];
    //     foreach($cars as $x=>$y){
    //         echo "$x = $y <br>";
    //     }

    ?> 

    <!-- Loops -->
     <?php
    //  for($x=0; $x<=10 ; $x++){
    //     if($x==7) break;
    //     echo $x;
    //  }
     ?>

     <!-- function -->
      <?php
      function loopFunc(){
        for($x=1 ; $x<=10 ; $x++){
            echo "$x <br>";
        }
      }

      function arrayFunc(){
        $users = [1 => "Ahmad" , 2 => "Ali" , 3 => "Hassan"];
        foreach($users as $x => $y){
            echo " id - $x - $y <br>";
        }
      }

      function arrayFunc2(){
        $users = [1 => "Ahmad" , 2 => "Ali" , 3 => "Hassan"];
        echo $users[2]."<br>";
      }

      function arrays(){
        $users = ["a" , "b" , "c"];
        var_dump ($users)."<br>";
      }

      function countarr(){
        $arr = ["A", "B" , "C" , "D"];
        echo count($arr)."<br>";
      }

      function pusharr(){
        $arr = ["This" , "is" , "a" , "Push"];
        array_push($arr , "Function");
        var_dump($arr);
      }

      function poparr(){
        $arr = ["This" , "is" , "a" , "Push"];
        array_push($arr , "Function1");
        array_push($arr , "Function2");
        array_pop($arr);
        var_dump($arr)."<br>";
      }

      function checkarr(){
        $arr = ["This" , "is" , "a" , "Push" , "Function"];
        if (in_array("Push" , $arr)){
            echo "True <br>";
        }
        else {
            echo "False";
        }
      }

      function mergearr(){
        $arr1 = ["This" , "is" , "a" , "Push" , "Function"];
        $arr2 = ["This" , "is" , "a" , "POP" , "Function"];

        $mergedarray = array_merge($arr1 , $arr2);
        print_r ($mergedarray);
      }

      function stringlen(){
        $x = "Hello world!";
        echo strlen($x)."<br>";
      }

      function stringPos(){
        $x = "hellowww Wworld!";
        echo strpos($x ,"world")."<br>";
      }
      
      function stringSub(){
        $x = "abcdefghiijklmnop";
        echo substr($x, 3,5)."<br>";
      }

      function stringReplace(){
        $x = "Hello World";
        echo str_replace("World" , "Jawad" , $x)."<br>";
      }

      function toupper(){
        $x  = "hello!";
        echo strtoupper($x)."<br>";
      }

      function trimString(){
        $x  = "hello!   ";
        echo trim($x);
      }

      loopFunc();
      arrayFunc();
      arrayFunc2();
      arrays();
      countarr();
      pusharr();
      poparr();
      checkarr();
      mergearr();
      stringLen();
      stringPos();
      stringSub();
      stringReplace();
      toupper();
      trimString();

      class User{
        public $name;
        public $age;
        public $contact;

        function set_name($name){
            $this->name = $name;
        }

        function set_age($age){
            $this->age = $age;
        }

        function set_contact($contact){
            $this->contact = $contact;
        }


        function get_name(){
            return $this->name;
        }

        function get_age(){
            return $this->age;
        }

        function get_contact(){
            return $this->contact;
        }
    }
        $usersData = new User();

        $usersData->set_name("Jawad");
        $usersData->set_age("22");
        $usersData->set_contact("1111111111");

        echo "Name:".$usersData->get_name();
        echo "Age:".$usersData->get_age();
        echo "Contact".$usersData->get_contact();
    
      ?>

</body>
</html>

