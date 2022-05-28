<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ShoppingLine - Shop</title>
        <link rel="stylesheet" href="static/css/shop.css">
        <script src="static/js/f4a0081dc3.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="static/js/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".navbar").load("static/templates/navbar.html", function() {
                    $(".navbarItem").attr("onmouseover", "changeActive(this)")
                                    .attr("onmouseleave", "removeActive(this)", 
                                    $("#shop").addClass("active selector"));
                });
            });
            
            function changeActive(x) {
                x.classList.add("selector");
            }

            function removeActive(x) {
                var active = document.getElementById("shop");
                active.classList.add("selector");
                if (x.id != "shop") {
                    x.classList.remove("selector");
                }
            }
        </script>
    </head>
    <body>
        <div class="navbar"></div>
        <div id="wrap">
            <div id="columns" class="columns_4">
            <?php
                $conn = new mysqli("localhost", "root", "", "ewd");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM imagedb";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<figure>";
                        echo "<img src='static/images/".$row["image"]."'>";
                        echo "<figcaption>".$row["name"]."</figcaption>";
                        echo "<span class='price'>$".$row["price"]."</span>";
                        echo "<a class='buyButton' href='#'>Buy Now</a>";
                        echo "</figure>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
            </div>
        </div>
        <footer id="footer">
            <p>
                &copy; 2022 Mateian Tudor-Marian
            </p>
        </footer>
    </body>
</html>