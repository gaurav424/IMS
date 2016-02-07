<?php
 session_start();
 include("header.php");
	   if(!isset($_SESSION['user_id']))
	  {
			header("Location:index.php?try=f");
			}
 ?>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
           <div class="row bg-white">
             <h1 class="double_text">Inventory Return Entry</h1>
                <!--  <div class="cell auto-size padding20 bg-white" id="cell-content">
                  <button class="command-button in_out">
                      <span class="icon mif-share"></span>IN<small>Use this option for.</small>
                    </button>
                    <button class="command-button icon-right warning">
                      <span class="icon mif-share"></span>OUT<small>Use this option for exit.</small>
                    </button><br><br>
                    <hr class="thin bg-grayLighter">
                    <div class="add_new"><button class="button cycle-button">+</button></div>
                </div> -->
            </div>
            <div class="row cells2">
                <div class="cell auto-size padding20 bg-grayLighter">
                  <div class="cell">
                        <h5>Item to Issue : </h5>
                        <div class="input-control full-size" data-role="select" data-multiple="true" data-placeholder="Select a state">
                            <select class="full-size">
                                <option value="1">Laptop</option>
                                <option value="2">Desktop</option>
                                <option value="3">Printer</option>
                                <option value="4">Scanner</option>
                                <option value="5">Camera</option>
                                <option value="6">Switch</option>
                                <option value="7">Telephone</option>
                                <option value="8">UPS</option>
                                <option value="9">LAN Cable</option>
                                <option value="10">Cable</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="cell auto-size padding20 bg-blue">
                  <button class="command-button in_out">
                      <span class="icon mif-share"></span>IN<small>Use this option for.</small>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
