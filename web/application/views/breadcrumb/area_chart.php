<!-- Area Chart Example-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-area-chart"></i> New Data Monthly</div>
    <div class="card-body">
        <canvas id="jmlvsbln" width="100%" height="35%"></canvas>
    </div>
    <div class="card-footer small text-muted">Number of new data submitted monthly</div>
</div>
<div class="row">
    <div class="col-lg-6">
        <!-- Example Bar Chart Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pie-chart"></i> Data Status</div>
            <div class="card-body">
                <canvas id="jmlvsstatus" width="100%" height="95"></canvas>
            </div>
            <div class="card-footer small text-muted">Distribution of data status for the last of 18 months</div>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- Example Pie Chart Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-pie-chart"></i> Data Classification</div>
            <div class="card-body">
                <canvas id="jmlvsclass" width="100%" height="95"></canvas>
            </div>
            <div class="card-footer small text-muted">Distribution of data classification</div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-area-chart"></i> Data Verification Rank</div>
    <div class="card-body">
        <canvas id="jmlvsauthor" width="100%" height="35"></canvas>
    </div>
    <div class="card-footer small text-muted">Rank of data verified number by authors</div>
</div> 

<?php
foreach ($jmlvsbln as $val) {
    $jml[] = (int) $val['jml'];
    $bln[] = date("M", mktime(0, 0, 0, $val['bln'], 10)) . "-" . $val['thn'];
}
$labels = json_encode($bln);
$data = json_encode($jml);

foreach ($jmlvsclass as $val) {
    $jml2[] = (int) $val['jml'];
    $class[] = ucwords(strtolower($val['class']));
}
$lbl2 = json_encode($class);
$data2 = json_encode($jml2);

$sta0 = 0; $sta1 = 0; $sta2 = 0;
foreach ($jmlvsstatus as $val) {
    if($val['status']==1 || $val['status']==11) {$sta0+=$val['jml'];}
    elseif($val['status']==2 || $val['status']==12) {$sta1+=$val['jml'];}
    else {$sta2+=$val['jml'];}
}
$jml4 = [$sta0, $sta1, $sta2];
$status = ["TRUE", "FALSE", "OTHER"];
$col4 = ["green", "maroon", "orange"];
$lbl4 = json_encode($status);
$data4 = json_encode($jml4);
$color4 = json_encode($col4);

foreach ($jmlvsauthor as $k => $val) {
    if ($val > 0) {
        $jml3[] = (int) $val;
        $name[] = $k;
    }
}
$lbl3 = json_encode($name);
$data3 = json_encode($jml3);
?>

<script src="<?php echo base_url() ?>theme/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>theme/vendor/chart.js/chartjs-plugin-piechart-outlabels.min.js"></script>
<script type="text/javascript">
    var labels = <?= $labels ?>;
    var data = <?= $data ?>;
    var barc = document.getElementById('jmlvsbln').getContext('2d');
    var myChart = new Chart(barc, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: '# new data',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'
                                , 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'
                                , 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                },
                {
                    label: '',
                    data: data,
                    backgroundColor: 'transparent',
                    // Changes this dataset to become a line
                    type: 'line'
                }],
        },
        options: {
            scaleShowValues: true,
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                xAxes: [{
                        ticks: {
                            autoSkip: false
                        }
                    }]
            }
        }
    });

    var config = {
        type: 'outlabeledPie',
        data: {
            datasets: [{
                    data: <?= $data2 ?>,
                    backgroundColor: [
                        'salmon', 'violet', 'red', 'green', 'orange', 'fuchsia', 'maroon', 'purple', 'indigo'
                    ],
                    label: 'Classification',
                    borderWidth: 0
                }],
            labels: <?= $lbl2 ?>,
            plugins: {
                legend: false,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 45,
                    font: {
                        resizable: true,
                        minSize: 12,
                        maxSize: 18
                    }
                }
            }

        },
        options: {
            legend: {
                display: false
            },
            responsive: true
        }
    };
    
    var config2 = {
        type: 'outlabeledPie',
        data: {
            datasets: [{
                    data: <?= $data4 ?>,
                    backgroundColor: <?= $color4 ?>,
                    label: 'Classification',
                    borderWidth: 0
                }],
            labels: <?= $lbl4 ?>,
            plugins: {
                legend: false,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 45,
                    font: {
                        resizable: true,
                        minSize: 12,
                        maxSize: 18
                    }
                }
            }

        },
        options: {
            legend: {
                display: false
            },
            responsive: true
        }
    };    

    window.onload = function () {
        var piecls = document.getElementById('jmlvsclass').getContext('2d');
        window.myPie = new Chart(piecls, config);

        var piestt = document.getElementById('jmlvsstatus').getContext('2d');
        window.myPie = new Chart(piestt, config2);
    };    

    var labels = <?= $lbl3 ?>;
    var data = <?= $data3 ?>;
    var barc2 = document.getElementById('jmlvsauthor').getContext('2d');
    var myChart = new Chart(barc2, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: '# of verified',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)', 
                        'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            scaleShowValues: true,
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                xAxes: [{
                        ticks: {
                            autoSkip: false
                        }
                    }]
            }
        }
    });
</script>      