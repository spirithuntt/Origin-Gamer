<?php
//INCLUDE DATABASE FILE
include('../../database.php');

//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
//ROUTING
if (isset($_POST['save']))
    save();
if (isset($_GET['delete']))
     deletep();
if (isset($_POST['update']))
    update();

// insert the products into database
    function save()
{
    //CODE HERE
    $name = $_POST["name"];
    $category = $_POST["category"];
    $brand = $_POST["brand"];
    $Stock = $_POST["stock"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $pprice = $_POST["pprice"];
    $connect=connection();

    $imgname = $_FILES['image']['name'];

    if(!empty($imgname)){
        $ext = pathinfo($imgname, PATHINFO_EXTENSION);
        $new_imgname = time().'.'.$ext;
        move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/'.$new_imgname);
    }
    else{
        $new_imgname = '';
    }

    //SQL INSERT //sql query
    $sql = "INSERT INTO dashboard values (null,'$new_imgname','$name','$category','$brand','$Stock','$price','$description','$pprice')";
    
    $result = mysqli_query($connect, $sql);#to excute the query
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "did not inserted";
        die(mysqli_error($connect));
    }
    $_SESSION['message'] = "Task has been added successfully !";
    header('location: dashboard.php');
}
// display the products
function get()
{
    //CODE HERE
    $connect=connection();

    //SQL SELECT
        #select all the data
        $sql = "SELECT dashboard.id, dashboard.image, dashboard.name, dashboard.category, categories.`category-name` as categoriiess , dashboard.brand, dashboard.stock, dashboard.price, dashboard.description FROM dashboard INNER JOIN categories ON categories.id = dashboard.category";
        $result = mysqli_query($connect, $sql);
        #for emotes & counts
        #to excute the query
            
        if(mysqli_num_rows($result) > 0)
        {
            while($fetch = mysqli_fetch_assoc($result))
            {
                {
                    echo          '
                <tr>
                  <th scope="row"><img src="../assets/img/'.$fetch['image'].'" alt="" style="width:50px;height:50px"></th>
                  <td> #'.$fetch['id'].'</td>
                  <td>'.$fetch['name'].'</td>
                  <td>'.$fetch['categoriiess'].'</td>
                  <td>'.$fetch['brand'].'</td>
                  <td>'.$fetch['stock'].'</td>
                  <td>'.$fetch['price'].' DH</td>
                  <td>'.$fetch['description'].'</td>
                  <td><a href="update.php?id='.$fetch['id'].'"><button type="button" class="btn btn-primary btn-sm modal-tas1">Edit</button></a>
                  <a href="scripts.php?delete='.$fetch['id'].'"><button type="button" class="btn btn-danger btn-sm modal-tas1">Delete</button></a></td>
                </tr>
              </tbody>
                        </div>';
                   
                }
            }
        }
     else{
        echo 'no records';
        }
}
//update the product
function update()
{
    $connect = connection();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "UPDATE dashboard SET name = '$name', brand = '$brand', category = '$category', stock = '$stock', price = '$price', description = '$description' WHERE id = '$id'";
    $result=mysqli_query($connect,$sql);
    if($result){
        $_SESSION['message'] = "Product has been updated successfully !";
        header('location: dashboard.php');
    }
}
// delete the product
function deletep()
    {
        // CODE HERE
        $connect=connection();
        $id=$_GET['delete'];
        //SQL DELETE
        $sql="DELETE FROM dashboard WHERE id=$id";
        $result=mysqli_query($connect,$sql);
        if($result){
            $_SESSION['message'] = "Product has been deleted successfully !";
            header('location: dashboard.php');
        }
    }
// get the totql of products
function total()
{
    $connect=connection();
    $sql = "SELECT * FROM dashboard";
    $result = mysqli_query($connect, $sql);
    $total = mysqli_num_rows($result);
    return $total;
}

//  get the purchase Price 
function pprices()
{
    $connect=connection();
    $sql = "SELECT SUM(pprice) FROM dashboard";;
    $result = mysqli_query($connect, $sql);
    $fetch = mysqli_fetch_assoc($result);
    return $fetch['SUM(pprice)'];
}

//  get the selling Price 
function Sprices()
{
    $connect=connection();
    $sql = "SELECT SUM(price) FROM dashboard";;
    $result = mysqli_query($connect, $sql);
    $fetch = mysqli_fetch_assoc($result);
    return $fetch['SUM(price)'];
}

// calculate the profit
function profit()
{
   $profit = Sprices() - pprices() ;
   return $profit;
}

?>