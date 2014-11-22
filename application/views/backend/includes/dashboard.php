
<div class="row"  >
    <div class="col-lg-5 col-sm-5">
        <section class="panel1">
            <form >
					<div class="form-group">
						<div class="col-sm-6">
						  <input type="number" id="normal-field" class="form-control number" name="number" value="<?php echo set_value('number');?>" ><br>
						  </div>
						  <div class="col-sm-6">
						  <button type="submit" class="btn btn-info myformsubmit">Enter</button>
						</div>
					</div>	
				</form>
       
                <script>
                    $(".myformsubmit").click( function() {
                        alert($('.number').val());
                     $.getJSON(
                            "<?php echo base_url(); ?>index.php/site/submitnumber/" + $('.number').val(), {
                                id: "123"
                            },
                            function (data) {
                                //  alert(data);
                                console.log(data);
                                nodata=data;
                                // $("#store").html(data);
//                                changestoretable(data);

                            }

                        );
                        });
                    
                    
//                    $(".myformsubmit").click( function() {
//                            var number=$(".number").val();
//                            console.log(number);
//                            alert("hello".number);
////                            window.open("<?php echo site_url('site/submitnumber');?>?number="+number);
////                            return false;
//                        });
//                    $(document).ready(function() {
//                        
//                    });
                </script>
        </section>
    </div>
</div>

