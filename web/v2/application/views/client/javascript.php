<script type="text/javascript">
    
    $('button.btnDelete').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $('#DelConModal').data('id', id).modal('show');
    });

    $('#btnDelteYes').click(function () {
        var id = $('#DelConModal').data('id');
        $('[data-id=' + id + ']').remove();
        $('#DelConModal').modal('hide');
    });

    var table;

    $(document).ready(function () {

        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('client/ajax_client_1711110534') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0,1,11], //first column / numbering column
                    "orderable": false, //set not orderable
                },
            ],

        });

    });
    
</script>