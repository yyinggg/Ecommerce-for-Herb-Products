                        <?php

                          $name = $_SESSION['username'];
                          
                          $sql = "SELECT cart.order_status,cart.cart_pprice,cart.cart_prate,cart.date,cart.id,cart.cart_pname,cart.cart_pqty,cart.cart_pimage,cart.payment_method,product.username
                                    FROM product
                                    INNER JOIN cart
                                    ON cart.cart_pid=product.product_id WHERE product.username= '$name' ";
                                 
                     		
                         $result=mysqli_query($link,$sql);
                      
                        
                         ?>