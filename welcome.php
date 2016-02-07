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
            <div class="row">
                  <div class="cell auto-size padding20 bg-white" id="cell-content">
                  <button class="command-button in_out">
                      <span class="icon mif-share"></span>IN<small>Use this option for.</small>
                    </button>
                    <button class="command-button icon-right warning">
                      <span class="icon mif-share"></span>OUT<small>Use this option for exit.</small>
                    </button><br><br>
                    <hr class="thin bg-grayLighter">
                    <div class="add_new"><button class="button cycle-button">+</button></div>
                </div>
            </div>
            <div class="row cells2">
                <div class="cell auto-size padding20 bg-grayLighter">
                  <button class="command-button in_out">
                      <span class="icon mif-share"></span>IN<small>Use this option for.</small>
                    </button>
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
