<!DOCTYPE html>
<?php 
    //include('./includes/db.php');
    $con = mysqli_connect("localhost", "root", "", "ecommerce");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Product</title>
</head> 
<body bgcolor="skyblue">
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align = "center" width = "600" border="2" bgcolor="gray">
            <tr align="center">
                <td colspan="7"><h2>Insert New Post Here</h2></td>
            </tr>

            <tr>
            <td align = "right">Product Title</td>
            <td><input type="text" name="product_title" size="60"></td>
            </tr>

            <tr>
            <td align = "right">Product Category</td>
            <td>
                <select name="product_cat">
                    <option>Select a Category</option>
                    <?php 
                        $get_cats = "select * from categories";
                        $run_cats = mysqli_query($con, $get_cats);
                
                        while($row_cats = mysqli_fetch_array($run_cats)){
                            $cat_id = $row_cats['cat_id'];
                            $cat_title = $row_cats['cat_title'];
                
                            echo "<option><a href='#'>$cat_title</a></option>";
                        }
                    ?>
                </select>
            </td>
            </tr>

            <tr>
            <td align = "right">Product Brand</td>
            <td>
                    <select name="product_band">
                        <option>Select a Brand</option>
                        <?php 
                            $get_brands = "select * from brands";
                            $run_brands = mysqli_query($con, $get_brands);
                    
                            while($row_cats = mysqli_fetch_array($run_brands)){
                                $brand_id = $row_cats['brand_id'];
                                $brand_title = $row_cats['brand_title'];
                    
                                echo "<option><a href='#'>$brand_title</a></option>";
                            }
                        ?>
                    </select>
            </td>
            </tr>

            <tr>
            <td align = "right">Product Image</td>
            <td><input type="file" name="product_image"></td>
            </tr>

            <tr>
            <td align = "right">Product Price</td>
            <td><input type="text" name="product_price"></td>
            </tr>

            <tr>
            <td align = "right">Product Description</td>
            <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
            </tr>

            <tr>
            <td align = "right">Product Keyword</td>
            <td><input type="text" name="product_keywords" size="50"></td>
            </tr>

            <tr align="center">
            <td colspan="7"><input type="submit" name="insert_post" value="Insert Now"></td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php 

        if(isset($_POST['insert_post'])){

            //getting the text data from
            $product_title = $_POST['product_title'];
            $product_cat = $_POST['product_cat'];
            $product_brand = $_POST['product_brand'];
            $product_price = $_POST['product_price'];
            $product_desc = $_POST['product_desc'];
            $product_keywords = $_POST['product_keywords'];

            //getting the images from the field
            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp =$_FILES['product_image']['tmp_name'];
            move_uploaded_file($product_image_tmp, "product_images/$product_image");

            $insert_product = "insert into products(product_cat, product_brand, product_title, product_price,product_desc, product_image, product_keywords) 
            values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

            $insert_pro = mysqli_query($con, $insert_product);

            if($insert_pro){
                echo "<script>alert('Product Has Been inserted')</script>";
                echo "<script>window.open('insert_product.php','_self')</script>";
            }

        }

?>