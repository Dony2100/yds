<? $this->load->view('header');?>
<? $this->load->view('navbar');?>


    <link href="<?php echo base_url('theme/vendor/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">

	<div class="container">
		<table id="table" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Role</th>
	                <th>Username</th>
	                <th>Email</th>
	                <th>Last update</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Role</th>
	                <th>Username</th>
	                <th>Email</th>
	                <th>Last update</th>
	            </tr>
	        </tfoot>
	    </table>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="<?php echo base_url('theme/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
	<script type="text/javascript">

	    var save_method; //for save method string
	    var table;

		$(document).ready(function() {
		    $('#table').DataTable( {
		        "processing": true,
		        "serverSide": true,
	            "ajax": {
	                "url": '<?php echo site_url('backend/json'); ?>',
	                "type": "POST"
	            },
	            //Set column definition initialisation properties.
        "columnDefs": [
		        { 
		            "targets": [ 0 ], //first column / numbering column
		            "orderable": false, //set not orderable
		        },
		        ],

	        });

	    });
	</script>

<? $this->load->view('footer');?>