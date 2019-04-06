<?php 

									$sqloos="select * from product where p_available='Out Of Stock'";
									$sqlresult=mysqli_query($link,$sqloos);

									while($oosrow=mysqli_fetch_array($sqlresult)){
										$oos=$oosrow['p_available'];

										if($oos='Out Of Stock'){
											echo"<div class='col-sm-7'>
										<button class='btn btn-primary'><i class='fa fa-shopping-cart inner-right-vs'></i> OUT OF STOCK</a>
									</div>";
										}
								else{
								echo "<div class='col-sm-7'>
										<button class='btn btn-primary'><i class='fa fa-shopping-cart inner-right-vs'></i>ADD TO CART</a>
									</div>";
										}
									} 

									?>