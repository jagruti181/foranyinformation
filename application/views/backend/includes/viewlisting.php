<div class=" row" style="padding:1% 0;">
	<div class="col-md-8">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createlisting'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
	
	<div class="col-md-2">
	
		<a class="btn btn-primary"  href="<?php echo site_url('site/uploadlistingcsv'); ?>"><i class="icon-upload"></i>Upload Listing</a> &nbsp; 
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Listing Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("Listing Details");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="name">Name</th>
                        <th data-field="address">Address</th>
                        <th data-field="area">Area</th>
                        <th data-field="email">Email</th>
                        <th data-field="contactno">Contact No</th>
                        <th data-field="pointer">Pointer</th>
                        <th data-field="action"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
                   <?php $this->chintantable->createpagination();?>
            </div>
		</section>
		<script>
            function drawtable(resultrow) {
                if(!resultrow.address)
                {
                    resultrow.address="";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.address + "</td><td>" + resultrow.area + "</td><td>" + resultrow.email + "</td><td>" + resultrow.contactno + "</td><td>" + resultrow.pointer + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editlisting?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletelisting?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>