
<?php if($this->dx_auth->get_user_id() !== NULL): ?>
<script type="text/javascript">
var table;
$(document).ready(function() {
 
    //datatables
    table = $('#laporan-internal').removeAttr('width').DataTable({ 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "autoWidth": false,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('lapor/ajax_main_1711111320')?>",
            "type": "POST",
            "data": function(data){
                data.status = $('#status').val();
                data.prioritas = $('#prioritas').val();
                data.assignee = $('#assignee').val();
                data.judul = $('#judul').val();
                data.nama = $('#nama').val();
                data.email = $('#email').val();
            }
        },
        //Set column definition initialisation properties.
        // "fixedColumns": true,
        "columnDefs": [
            {
                "targets": [ 0,1,8 ],
                "orderable": false //set not orderable
            }
        ]
    });

    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

});

</script>

<?php else: ?>


<script type="text/javascript">
var table;
$(document).ready(function() {
 
    //datatables
    table = $('#laporan-public').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('lapor/get_laporan')?>",
            "type": "POST",
            "data": function ( data ) {
                data.status = $('#status').val();
                data.prioritas = $('#prioritas').val();
                data.assignee = $('#assignee').val();
                data.judul = $('#judul').val();
                data.nama = $('#nama').val();
                data.email = $('#email').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
 
});
 
</script>

<?php endif ?>