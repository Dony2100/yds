<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').removeAttr('width').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "autoWidth": false,
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('temp_data/ajax_temp_2822222431')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        //"fixedColumns": true,
        "columnDefs": [
            {                  
                "targets": [ 5 ],
                "width": 200
            },
            {
                "targets": [ 0,1,15 ],
                "orderable": false //set not orderable
            }
        ]
        


 
    });
    
});

</script>