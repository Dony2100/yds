<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
    
    $('button.btnBan').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id'); alert(id);
        $('#BanConModal').data('id', id).modal('show');
    });

    $('#btnBanYes').click(function () {
        var id = $('#BanConModal').data('id');
        $('[data-id=' + id + ']').remove();
        $('#BanConModal').modal('hide');
    });
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('backend/ajax_user_1711101824')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0, 1, 9 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
        ],
 
    });

    $(document).ready(function() {
        $('#country,#province').change(function(){

            var country = $('#country').val(); 
            var province = $('#prov').val();  //alert(country+' | '+province);

            $.post( "/backend/get_region_ajax", { country: country, province:province})
              .done(function( resp ) {                 //alert(resp);
                  if(province) {
                    $('#regency').html(resp);
                  }
                  else {
                    $('#province').html(resp);
                  }
              });

        });      
    })
 
});
 
</script>