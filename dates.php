<?php include 'header2.php';?>
<?php include 'inc/dbcon.php';?>
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('INPUT'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="process-book-3.php" method="post">
                                <div class="signup-header">
                                    <h2>Specify Time & Date To Book</h2>
                                    
                                </div>
								
								<label>From:</label>
									<input type="date"   name="from" value="02.11.2014 11:05AM" class="form-control margin-bottom-20"  required />
									<label>To:</label>
                               
								<input type="date"  name="to" value="02.11.2014 12:05AM" class="form-control margin-bottom-20"  required />
								<label>Amount to be charged: Kes. 60/-</label>
                                <hr>
                                <div class="row">
                                   
                                    <div class="col-lg-8 text-right">
                                        <input type="submit" class="btn btn-primary pull-right"   id="LogIn" value="Payment" onclick="Validate()"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
          <?php
 include "footer2.php" ?>