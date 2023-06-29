<?php 
    include_once('../goid-html/config/connection.php');


    function getAllActive($table){
        global $con;
        $query = "select * from $table where status='active'";
        return $query_run = mysqli_query($con,$query);

    }

    function getSlugActive($table,$slug){

        global $con;
        $query = "select cid from $table where cname='$slug' AND status='active'";
        $result = mysqli_query($con, $query);
        if (!$result) {
             die("Query failed: " . mysqli_error($con));
        }

        return $result;
    }

    function getFoodByCategory($category_id){

        global $con;
        $query = "select * from foods f JOIN categories c ON f.cid=c.cid where c.cid=$category_id AND f.status='active'";
        $result = mysqli_query($con, $query);
        if (!$result) {
             die("Query failed: " . mysqli_error($con));
        }

        return $result;
    }

    

?>