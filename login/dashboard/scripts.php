<?php
//INCLUDE DATABASE FILE
include('../../database.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
//ROUTING
if (isset($_POST['save']))
    save();
    if (isset($_POST['delete']))
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
        $sql = "SELECT dashboard.id, dashboard.name, dashboard.category, categories.`category-name` as categoriiess FROM dashboard INNER JOIN categories ON categories.id = dashboard.category";
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
                  <td>'.$fetch['id'].'</td>
                  <td>"'.$fetch['name'].'"</td>
                  <td>'.$fetch['categoriiess'].'</td>
                  <td>Intel</td>
                  <td>3</td>
                  <td>3090 DH</td>
                  <td>Some quick example text to build on the description title</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Edit</button><button type="button" class="ms-2 btn btn-danger btn-sm">Delete</button></td>
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

?>