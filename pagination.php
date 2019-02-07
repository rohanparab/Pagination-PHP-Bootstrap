<?php
include_once "credentials.php";


#Config Start
$totalRecords = getTotalRecords();
$recordsPerPage = 1;
$numberOfPages = ceil($totalRecords / $recordsPerPage);
#Config End


#function to get total records from database
function getTotalRecords(){
    global $conn;
    $sql = "SELECT * FROM property";
    $res = mysqli_query($conn, $sql);
    return mysqli_num_rows($res);
}

#function to generate pagination
function generatePagination($currentpage, $url){
    global $numberOfPages;
    if($currentpage > 0 AND $currentpage <= $numberOfPages){
        $previous = $currentpage - 1;
        $next = $currentpage + 1;
        $previousurl = '';
        $nexturl = '';
        if($previous > 0){
            $previousurl = $url."".$previous;
        }

        if($next <= $numberOfPages){
            $nexturl = $url."".$next;
        }
        echo "<ul class='pagination'>";
        echo "<li class='page-item'><a class='page-link' href='$previousurl'>Previous</a></li>";
        for($i = 1; $i <= $numberOfPages; $i++){
            if($i == $currentpage){
                echo "<li class='page-item active'><a class='page-link' href='$url$i'>$i</a></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href='$url$i'>$i</a></li>";
            }
        }
        echo "<li class='page-item'><a class='page-link' href='$nexturl'>Next</a></li>";
        echo "</ul>";
    }
}

?>