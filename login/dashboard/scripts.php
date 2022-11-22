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


    function save()
{
    //CODE HERE
    $name = $_POST["name"];
    $category = $_POST["category"];
    $brand = $_POST["brand"];
    $Stock = $_POST["stock"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $connect=connection();
    //SQL INSERT //sql query
    $sql = "INSERT INTO dashboard values (null,'$name','$category','$brand','$Stock','$price','$description')";
    
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
function get()
{
    //CODE HERE
    $connect=connection();

    //SQL SELECT
        #select all the data
        $sql = "SELECT dashboard.id, dashboard.name, dashboard.category, categories.`category-name` as categoriiess , dashboard.brand, dashboard.stock, dashboard.price, dashboard.description FROM dashboard INNER JOIN categories ON categories.id = dashboard.category";
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
                <td>img.jpg</td>
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
        echo "yy";
    }


?>