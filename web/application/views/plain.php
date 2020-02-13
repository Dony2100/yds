<script type="text/javascript">
    
$(function () {
    $("#widget").dxButton();
});    
    
    
    $(function () {
        var showHelloWorld = function () {
            alert("Hello world!");
        };

        $("#widget").dxButton({
            onClick: showHelloWorld,
            text: "Click me!"
        });
    });
</script>

<div id="widget">
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

