# Pagination PHP

The following code will help you to insert a pagination in your page.


![DEMO IMG](https://raw.githubusercontent.com/rohanparab/Pagination-PHP-Bootstrap/master/demoimg/demo.png)

## Basic usage 

Credentials.php : Holds database credentials

To change number of records per page
* Open Pagination.php
* Change value of $recordsPerPage

To Display the pagination add this code where you need to display pagination
```php
<?php
        if(isset($_GET['currentpage'])){
            $currentpage = $_GET['currentpage'];
        }else{
            $currentpage = 1;
        }

    generatePagination($currentpage, "index.php?currentpage=")
    ?>
```

generatePagination() function accepts 2 parameters (currentPageNumber and currentPageName)
eg : generatePagination($currentpage, "index.php?currentpage=")

The current page value should be passed by PHP GET request eg: www.example.com/index.php?currentpage=2
