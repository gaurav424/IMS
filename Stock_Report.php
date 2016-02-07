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
   <div class="grid">
         <div class="row bg-white">
           <h1 class="double_text">Stock Report</h1>
			 <div class="grid margin_left15">
			    <div class="row">
                    <div class="cell">
                        <label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Laptop</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Desktop</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Printer</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Scanner</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Camera</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Switch</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Telephone</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">UPS</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">LAN Cable</span>
                        </label> 
						<label class="input-control radio">
                            <input type="radio" name="n1">
                            <span class="check"></span>
                            <span class="caption">Cable</span>
                        </label> 
					</div>
				 </div>	
             </div>
         </div>				
     </div>
 </div>
</body>
</html>
