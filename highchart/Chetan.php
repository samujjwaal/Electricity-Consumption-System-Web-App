<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Chetan</title>
        <!-- 1. Add JQuery and Highcharts in the head of your page -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
         
        <!-- 2. You can add print and export feature by adding this line -->
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
         
         
        <!-- 3. Add the JavaScript with the Highchart options to initialize the chart -->
        <script type="text/javascript">
        jQuery(document).ready(function() { 
 
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'column'
                },
                title: {
                    text: 'Weekly Power Consumption'                 
                },
                subtitle: {
                  text: 'Year 2018'
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Power Consumption (kW)'
                    }
                },
                series: []
            };
            // JQuery function to process the csv data
            $.get('Chetan1.csv', function(data) {
                // Split the lines
                var lines = data.split('\n');
                $.each(lines, function(lineNo, line) {
                    var items = line.split(',');
                     
                    // header line contains names of categories
                    if (lineNo == 0) {
                        $.each(items, function(itemNo, item) {
                            //skip first item of first line
                            if (itemNo > 0) options.xAxis.categories.push(item);
                        });
                    }
                     
                    // the rest of the lines contain data with their name in the first position
                    else {
                        var series = { 
                            data: []
                        };
                        $.each(items, function(itemNo, item) {
                            if (itemNo == 0) {
                                series.name = item;
                            } else {
                                series.data.push(parseFloat(item));
                            }
                        });
                         
                        options.series.push(series);
 
                    }
                     
                });
                //putting all together and create the chart
                var chart = new Highcharts.Chart(options);
            });         
             
        });
        </script>
         
    </head>
    <body>
         
        <!-- 3. Add the container -->
        <div id="container" style="width: 100%; height: 600px; margin: 0 auto"></div>      
                 
    </body>
</html>