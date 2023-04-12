<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
    <style>
        #container {
  height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 1200px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
    </style>
</head>
<body>
    <button class="btn btn-dark ml-5 mt-5"><a href="?mod=chart&action=chart_money" class="text-light">Trở về</a></button>
    <div class="float-right mt-5 mr-5 inline-bl">
        <form action="?mod=chart" method="get">
            <!-- <input type="date" name="day" id="" value="<?php echo date('Y-m-d') ?>"> -->
            <input type="hidden" name="mod" value="chart">
            <input type="hidden" name="action" value="chart_month">
            <input type="month"  name="month" value="<?php echo date('Y-m') ?>">
            <!-- <select  name="month" id="" style="padding: 2px 0 3px 2px;">
                <?php for ($i = 1; $i <= 12 ; $i++) { ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo 'Tháng '.$i; ?>
                    </option>
                <?php } ?>    
            </select> -->

            <button class="btn" type="submit" name="btn_month" value="Submit" id="sm-s">Chọn</button>
        </form>
        <!-- <button class="btn btn-primary ml-2"><a href="?mod=chart&action=chart_day" class="text-light">Ngày</a></button>
        <button class="btn btn-primary ml-2"><a href="?mod=chart&action=chart_month" class="text-light">Tháng</a></button>
        <button class="btn btn-primary ml-2"><a href="?mod=chart&action=chart_year" class="text-light">Năm</a></button> -->
        
    </div>    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
    <div id="container"></div>
    <!-- <p class="highcharts-description">
        Chart showing use of rotated axis labels and data labels. This can be a
        way to include more labels in the chart, but note that more labels can
        sometimes make charts harder to read.
    </p> -->
    </figure>
    <script>
        Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Thống kê doanh thu theo tháng'
  },
  // subtitle: {
  //   text: '2022'
  // },
  xAxis: {
    type: 'category',
    labels: {
    //   rotation: -45,
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Tổng tiền'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
   
    pointFormat: 'Số tiền thu được :<b>{point.y:.f}</b>'
  },
  series: [{
    name: 'Số tiền thu được',
    data: [
        <?php
        foreach($money as $a){
        ?>
        [<?php echo json_encode($a['ngay']); ?>, <?php echo $a['doanh_thu']; ?>],
        <?php    
        }
        ?>
      
      
    ],
    dataLabels: {
      enabled: true,
      rotation: -90,
      color: '#FFFFFF',
      align: 'right',
      format: '{point.y:.f}', // one decimal
      y: 10, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
    </script>
    
</body>
</html>