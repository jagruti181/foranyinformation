
<div class="row"  >
    <div class="col-lg-5 col-sm-5">
        <section class="panel1">
            <form >
					<div class="form-group">
						<div class="col-sm-6">
						  <input type="number" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>"><br>
						  </div>
						  <div class="col-sm-6">
						  <button type="submit" class="btn btn-info">Enter</button>
						</div>
					</div>	
				</form>
       
                <script>
                    $(document).ready(function() {
                        $(".myformsubmit").click( function() {
                            var fromdate=$(".fromdate").val();
                            var todate=$(".todate").val();
                            var reporttype=$(".reporttype").val();
                            window.open("<?php echo site_url('report/submitmonthlysalesreport');?>?fromdate="+fromdate+"&todate="+todate+"&reporttype="+reporttype,'_blank');
                            return false;
                        });
                    });
                </script>
        </section>
    </div>
</div>

