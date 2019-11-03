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
            <td><input type="text" name="product_title"></td>
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
            <td><input type="text" name="product_keywords"></td>
            </tr>

            <tr align="center">
            <td colspan="7"><input type="submit" name="insert_post" value="Insert Now"></td>
            </tr>

        </table>
    </form>
</body>
</html>