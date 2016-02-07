<?php
 session_start();
 include("header.php");
	   if(!isset($_SESSION['user_id']))
	  {
			header("Location:index.php?try=f");
			}
 include("php/Entry_logic.php");
 ?> 
<div class="page-content">
   <div class="flex-grid no-responsive-future">
         <div class="row bg-white">
             <h1 class="double_text">Inventory Out Entry</h1>
         </div>
    </div>	
		<div class="grid margin_left1 margin_right1">	
            <div class="row cells2">
              <div class="cell auto-size padding20 bg-grayLighter">
                <div class="cell colspan2 full-size">
			      <form action="php/issue_entry.php" method="post">
                   <h3>Item to Issue :</h3>
					 <hr class="thin">
				       <div class="input-control half-size margin_left10" data-role="select" data-placeholder="Select a state">
                            <select class="full-size" name="type_of" id="type_of" onchange="showUser(this.value)">
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
								
							<select class="full-size" name="Tag_Num" id="location" onchange="showDetails(this.value)">
                                <option value="0">Please Select Item First.</option>
                            </select>
								<br>
								<br>
							   <div id="model_num">
							</div>
					   </div>
				 </div>
              </div>
               <div class="cell auto-size padding20 bg-blue">
                  <div class="no-margin-bottom offset3">
				   <h3>To Whom :</h3>
				      <hr class="thin">
				  		 <div class="input-control half-size margin_left10" data-role="select" data-placeholder="Select a state">
                           		<input type = "text" name ="emp_Id" id="emp_Id" placeholder="Employee Id" onkeydown="EmpDetails(this.value)"><br><br>
								<div id="emp_Details">
						      </div>						
					         <input type ="submit" name="submit" value ="Issue Item & Store Employee">
                        </div>	  
					</form>
               </div>
           </div> <!-- End of example -->
      </div>
	     <div class="row">
			<div class="cell bg-cyan">
					<h4 class="margin_left45">Available Stock </h4>
					<table class="table">
							<tr class="Sign">
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
								<td>12</td>
							</tr>
							<tr>
								<td>Laptop</td>
								<td>Desktop</td>
								<td>Printer</td>
								<td>Scanner</td>
								<td>Camera</td>
								<td>Switch</td>
								<td>Telephone</td>
								<td>UPS</td>
								<td>LAN Cable</td>
								<td>Cable</td>
							</tr>							
			        </table>
			</div>
		 </div>
    </div>
 </div>
</body>
</html>
