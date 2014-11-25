<div class="row"  >
    <div class="col-lg-5 col-sm-5">
        <section class="panel1">
            
					<div class="form-group">
						<div class="col-sm-6">
						  <input type="text" id="normal-field" class="form-control number" name="number" value="<?php echo set_value('number');?>" ><br>
						  </div>
						  <div class="col-sm-6">
						  <a class="btn btn-info myformsubmit">Enter</a>
						</div>
					</div>	
        </section>
    </div>
</div>
<br>
 <div class="row">
        <div class="col-md-6 formcategory" style="display:none;">
          <div>
              For alert
          </div>
           <div class="col-md-6">
                <section class="panel2">
                    <div id="formcategory" class="form-group">
                                 <?php

                            echo form_dropdown('category',$category,set_value('category'),'id="select2" class="chzn-select form-control categoryvalue" 	data-placeholder="Choose a Category..."');
                        ?><br>
                            <a class="btn btn-info categoryformsubmit">Enter</a>
                      </div>
                </section>
            </div>
            <div class="col-md-6 formlisting" style="display:none;">
                <section class="panel3">
                    <div id="formcategory" class="form-group">
                                   <?php

                            echo form_dropdown('listing',$listing,set_value('listing'),'id="select1" class="chzn-select form-control" 	data-placeholder="Choose a Listing..."');
                        ?>
                           <br>
                            <a class="btn btn-info listingformsubmit">Enter</a>
                      </div>
                </section>
            </div>
     </div>
     <div  class="col-md-3">
        <div class="col-lg-6 col-sm-6">
            <section class="panel2">
                <div id="user" class="form-group">
                  <div class="userdetails">
                    
                  </div>
                </div>
            </section>
        </div>
     </div>
</div>
<br>
<div>
<div class="row">
    <div class="col-lg-8 col-sm-8">
        <section class="panel2">
            <div id="enquiries" class="form-group">
				<div class="col-sm-8 allenquiries">
                    
                </div>
              </div>
        </section>
    </div>
</div>
</div>
<script>
    $(".myformsubmit").click(function () {
        $.getJSON(
            "<?php echo base_url(); ?>index.php/site/submitnumber", {
                number: $(".number").val()
            },
            function (data) {
                console.log(data);
                nodata = data;
                // $("#store").html(data);
                allenquiries(data);
                userdetails(data);

            }
        );
//        return false;
    });
    
    $(".categoryformsubmit").click(function () {
        $.getJSON(
            "<?php echo base_url(); ?>index.php/site/submitcategoryenquiry", {
                categoryvalue: $(".categoryvalue").val(),
                userid: $(".userdetailid").val()
            },
            function (data) {
                console.log(data);
                nodata = data;
                // $("#store").html(data);
                allenquiries(data);
                userdetails(data);

            }
        );
//        return false;
    });
    
    
    function allenquiries(data) {
        $(".formcategory").show();
        $(".formlisting").show();
        $("#enquiries .allenquiries").html("");
        for(var i=0;i<data['allenquiries'].length;i++)
        {
            console.log(data['allenquiries'][i].id);
            var id=data['allenquiries'][i].id;
            var listingname=data['allenquiries'][i].listingname;
            var categoryname=data['allenquiries'][i].categoryname;
            var comment=data['allenquiries'][i].comment;
//            $("#enquiries .allenquiries").append(data['allenquiries'][i].id);
             $("#enquiries .allenquiries").append("<div class='well'><div>Listing:"+listingname+"</div><div>Category:"+categoryname+"</div><div>Comment:"+comment+"</div></div>");
        }
//        for (var key in userdetail) {
//  console.log(key);
//}
//        console.log(data(userdetail.id));

    };
    function userdetails(data) {
        $("#user .userdetails").html("");
            console.log(data['userdetail'].id);
            var id=data['userdetail'].id;
            var address=data['userdetail'].address;
            var city=data['userdetail'].city;
            var contact=data['userdetail'].contact;
            var dob=data['userdetail'].dob;
            var email=data['userdetail'].email;
            var firstname=data['userdetail'].firstname;
            var pincode=data['userdetail'].pincode;
             $("#user .userdetails").append("<table><tr><td>Name:</td><td><input type='text' name='name' value='"+firstname+"' class='form-control'><input type='hidden' name='id' value='"+id+"' class='form-control userdetailid'></td></tr><tr><td>Address:</td><td><input type='text' name='address' value='"+address+"' class='form-control'></td></tr><tr><td>City:</td><td><input type='text' name='city' value='"+city+"' class='form-control'></td></tr><tr><td>Contact:</td><td><input type='text' name='contact' value='"+contact+"' class='form-control'></td></tr><tr><td>DOB:</td><td><input type='date' class='form-control dob' name='dob' value='"+dob+"'></td></tr><tr><td>Email:</td><td><input type='email' name='email' value='"+email+"' class='form-control'></td></tr><tr><td>Pincode:</td><td><input type='text' name='pincode' value='"+pincode+"' class='form-control'></td></tr><tr><td><a class='btn btn-info uderdetailsformsubmit'>Submit</a></td><td></td></tr></table>");
        
//             $("#user .userdetails").append("<div>Name:"+firstname+"</div><div>Address:"+address+"</div><div>City:"+city+"</div><div>Contact:"+contact+"</div><div>DOB:"+dob+"</div><div>Email:"+email+"</div><div>Pincode:"+pincode+"</div>");

    };
</script>
