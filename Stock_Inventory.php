<?php
 session_start();
 include("header.php");
	   if(!isset($_SESSION['user_id']))
	  {
			header("Location:index.php?try=f");
			}
 ?>

    <div class="page-content">
        <div class="flex-grid no-responsive-future">
           <div class="row bg-white">
             <h1 class="double_text">Inventory Stock Entry</h1>
            </div>
		</div>	
		<div class="grid margin_left1 margin_right1">	
            <div class="row cells3">
              <div class="cell colspan2 auto-size padding20 bg-grayLighter">
                <div class="cell colspan2 full-size">
			     <form action="php/Stock_Entry.php" method="post">
                 <h5 class="margin_left10">Item to Stock : </h5>
				  <div class="input-control half-size margin_left10" data-role="select" data-placeholder="Select a state">
                            <select class="full-size" name="type_of">
                                <option value="0">Please select Item.</option>
                                <option value="LP">Laptop</option>
                                <option value="DK">Desktop</option>
                                <option value="PR">Printer</option>
                                <option value="SC">Scanner</option>
                                <option value="CM">Camera</option>
                                <option value="SWT">Switch</option>
                                <option value="TP">Telephone</option>
                        `        <option value="UPS">UPS</option>
                                <option value="LAN">LAN Cable</option>
                                <option value="CAB">Cable</option>
                            </select><br><br>
					<input type = "text" name ="tag_num" placeholder="Tag Number"><br><br>
					<input type = "text" name = "model_num" placeholder ="Model Number"></br><br>
					<input type = "text" name = "serial_num" placeholder ="Serial Number"><br><br>
					<input type ="text" name = "maker" placeholder="Maker"><br><br>
					<input type="text" name="Rating" placeholder="Rating"><br><br>
					<input type ="submit" name="submit" value ="Store Stock">
                        </div>
					          </form>
                </div>
              </div>
                <div class="cell auto-size padding20 bg-blue">
                  <div class="no-margin-bottom offset3">
				  <h3>Total Available Stock</h3>
				  <hr class="thin">
				  		<table class="table">
							<tr>
								<td>Laptop :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Desktop :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Printer :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Scanner :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Camera :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Switch :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Telephone :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>UPS :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>LAN Cable :</td>
								<td>12 </td>
							</tr>
							<tr>
								<td>Cable :</td>
								<td>12 </td>
							</tr>
						</table>	             
                     </div>
                 </div> <!-- End of example -->
            </div>
	    </div>
    </div>
<?php
	if($_GET['status']=='t')
	{?>
                <script>
                    $(function(){
                           setTimeout(function(){
                                $.Notify({keepOpen: true, type: 'success', caption: 'Successfully Saved', content: "Item Successfully stocked with Tag Number- <?php echo $_GET['tag_num'] ?>"});
                            }, 1000);
                        });
                </script>
<?php	}
	else if($_GET['status']=='f')
	{?>
                <script>
                    $(function(){
                           setTimeout(function(){
                                $.Notify({keepOpen: true, type: 'alert', caption: 'Warning', content: "Can't be saved Tag Number already exits."});
                            }, 1000);
                        });
                </script>
<?php	}
		?>	
</body>
</html>
