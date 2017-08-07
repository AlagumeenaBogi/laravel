<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "test";
    private $username = "";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
           // echo "connection_success"."<BR>";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
          }
    }

    // get database connection
    $database = new Database();
    $db = $database->getConnection(); 
    //echo $db."<BR>";


    class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "products";
 
    // object properties
    public $id;
    public $name;
    public $price;
    public $description;
    public $category_id;
    public $timestamp;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, price=:price, description=:description, category_id=:category_id, created=:created";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->category_id=htmlspecialchars(strip_tags($this->category_id));
 
        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');
 
        // bind values 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":created", $this->timestamp);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }

    function readAll($from_record_num, $records_per_page){

$query = "SELECT
        id, name, description, price, category_id
    FROM
        " . $this->table_name . "
    ORDER BY
        name ASC
    LIMIT
        {$from_record_num}, {$records_per_page}";
//echo "---query-->".$query."<BR>";
$stmt = $this->conn->prepare( $query );
$stmt->execute();

return $stmt;
}
// used for paging products
public function countAll(){
 
    $query = "SELECT id FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
}
}
$product = new Product($db);
// page given in URL parameter, default page is one
$page =1;// isset($_GET['page']) ? $_GET['page'] : 1; 
// set number of records per page
$records_per_page = 3; 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();



class Category{
 
    // database connection and table name
    private $conn;
    private $table_name = "categories";
 
    // object properties
    public $id;
    public $name;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // used by select drop-down list
    function read(){
        //select all data
        $query = "SELECT
                    id, name
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name";  
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }

    // used to read category name by its ID
function readName(){
     
    $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";
 //echo $query."<BR>";
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    $this->name = $row['name'];
}

}

$category = new Category($db);


    


//$category = new Category($db);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- some custom CSS -->
    <style>
    .left-margin{
        margin:0 .5em 0 0;
    }
 
    .right-button-margin{
        margin: 0 0 1em 0;
        overflow: hidden;
    }
 
    /* some changes in bootstrap modal */
    .modal-body {
        padding: 20px 20px 0px 20px !important;
        text-align: center !important;
    }
 
    .modal-footer{
        text-align: center !important;
    }
    </style>
 
    <!-- Bootstrap CSS
    https://www.codeofaninja.com/2014/06/php-object-oriented-crud-example-oop.html -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <?php
        $page_title = "Read Products";
        // show page header
        echo "<div class='page-header'>";
            echo "<h1>{$page_title}</h1>";
        echo "</div>";
        echo "<div class='right-button-margin'>";
    echo "<a href='create_product.php' class='btn btn-default pull-right'>Create Product</a>";
echo "</div>";

if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Category</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
                echo "<td>";
                   $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                //echo $category_id;
                echo "</td>";
 
                echo "<td>";
                   // read product button
                    echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>";
                        echo "<span class='glyphicon glyphicon-list'></span> Read";
                    echo "</a>";
                     
                    // edit product button
                    echo "<a href='update_product.php?id={$id}' class='btn btn-info left-margin'>";
                        echo "<span class='glyphicon glyphicon-edit'></span> Edit";
                    echo "</a>";
                     
                    // delete product button
                    echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Delete";
                    echo "</a>";
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    // paging buttons will be here
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}

$page_url = "index.php?";
 
// count all products in the database to calculate total pages
$total_rows = $product->countAll();

echo "<ul class='pagination'>";
 
// button for first page
if($page>1){
    echo "<li><a href='{$page_url}' title='Go to the first page.'>";
        echo "<<";
    echo "</a></li>";
}
 
// calculate total pages
$total_pages = ceil($total_rows / $records_per_page);
 
// range of links to show
$range = 2;
 
// display links to 'range of pages' around 'current page'
$initial_num = $page - $range;
$condition_limit_num = ($page + $range)  + 1;
 
for ($x=$initial_num; $x<$condition_limit_num; $x++) {
 
    // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
    if (($x > 0) && ($x <= $total_pages)) {
 
        // current page
        if ($x == $page) {
            echo "<li class='active'><a href=\"#\">$x <span class=\"sr-only\">(current)</span></a></li>";
        } 
 
        // not current page
        else {
            echo "<li><a href='{$page_url}page=$x'>$x</a></li>";
        }
    }
}
 
// button for last page
if($page<$total_pages){
    echo "<li><a href='" .$page_url. "page={$total_pages}' title='Last page is {$total_pages}.'>";
        echo ">>";
    echo "</a></li>";
}
 
echo "</ul>";
        ?>
        

    </div>
    <!-- /container -->
 
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</body>
</html>
