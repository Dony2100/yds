<?php if($this->uri->segment(2) !== "detail"): ?>
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
            "url": "<?php echo site_url('main_data/ajax_main_1711111320')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        //"fixedColumns": true,
        "columnDefs": [
            {                  
                "targets": [ 4 ],
                "width": 350
            },
            {
                "targets": [ 0,8 ],
                "orderable": false //set not orderable
            }
        ]
 
    });

    $(document).ready(function() {
        var country = $('#country').val();
        if(country>0) var province = "<?=$province?>";
        if(province>0) var regency = "<?=$regency?>";  //alert(country+' | '+province+' | '+regency);
        
        if(country>0){
            $.post( "/Main_data/get_region_ajax", { country: country, selected: province }).done(function( resp ) { 
                $('#province').html(resp);
            });
            if(province>0){
                $.post( "/Main_data/get_region_ajax", { country: country, province: province, selected: regency }).done(function( resp ) { 
                    $('#regency').html(resp);
                });                
            }
        }
        
        $('#country,#province').change(function(){

            var country = $('#country').val(); 
            var province = $('#prov').val();  //alert(country+' | '+province);

            $.post( "/Main_data/get_region_ajax", { country: country, province:province})
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
<?php endif ?>