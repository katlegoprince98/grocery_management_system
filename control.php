<?php
    //insert data
    function insertData(){
        include("config.php");

        $item = ucwords($_POST['item']);
        $quantity = ucwords($_POST['quantity']);
        $shop = ucwords($_POST['shop']);
        $itemPrice = ucwords($_POST['itemPrice']);

        if($item != ""  && $item != ""  && $item != ""  && $item != "" ){

            $query = "INSERT INTO groceries(groItem, groQuantity, grocShop, grocPrice) 
                   values ('$item','$quantity','$shop','$itemPrice')";

                   ?> 

                   <script>
                      window.alert("List successfully added");
                      window.location.href = "capture.php";
                   </script>

                   <?php
        }else{
            ?> 

            <script>
               window.alert("Ensure that all values are added");
            </script>

            <?php
        }

       

        return mysqli_query($conn, $query);
        
    }

    if(isset($_POST['submit'])){

        insertData();

       
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    //pull data
    function pullData(){
        include("config.php");

        $pull = "SELECT * FROM groceries";

        return mysqli_query($conn, $pull);

        
    }

?>