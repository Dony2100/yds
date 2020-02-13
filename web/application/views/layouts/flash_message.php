<?php if($this->session->flashdata('alert') != ''):
    $alert = $this->session->flashdata('alert');
endif; ?>

<?php
if(isset($alert) && $alert):
    $a_state = isset($alert['state']) && $alert['state'] ? $alert['state'] : "primary";
     
    switch ($a_state) {
        case "success":     $a_notif = "Success!";  break;
        case "info":        $a_notif = "Info:";     break;
        case "warning":     $a_notif = "Warning!";  break;
        case "danger":      $a_notif = "Failed!";   break;
        case "dark":        $a_notif = "Sorry...";  break;
        case "secondary":   $a_notif = "Message:";  break; 
        default:            $a_notif = "Atention!";
                            $a_state = "primary";   break;
    }

    $a_class="alert alert-".$a_state." alert-dismissible";?>
    <div class="<?=$a_class?>" data-auto-dismiss role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?=$a_notif?></strong> <?=isset($alert['message'])? $alert['message']:"";?>.
    </div>
<?php endif;?>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(1500, 0).slideUp(1500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>