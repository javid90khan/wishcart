<?php
$current_page = basename($_SERVER['SCRIPT_FILENAME']); 
if($current_page != 'login.php' && $current_page != 'register.php')
{
	include 'session.php';
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="lib/jquery.min.js"></script>
    <script type="text/javascript" src="lib/raphael.js"></script>
    <script type="text/javascript" src="lib/jquery.enumerable.js"></script>
    <script type="text/javascript" src="lib/jquery.tufte-graph.js"></script>
    <link rel="stylesheet" href="lib/tufte-graph.css" type="text/css" media="screen" charset="utf-8" />

    <style>
      body { font-family: georgia; font-size 14px; }
      .test-case { float: left; text-align: center; margin-right: 50px;}
      a, a:visited { color: black; }
      h2 { font-size: 1.2em; clear: both;}
      table { text-align: left; margin-bottom: 10px;}
      .graph .label { font-size: 0.8em; }
      .bar-A { color: #82293B; }
      .bar-B { color: #E57536; }
    </style>

    <script type="text/javascript">
      $(document).ready(function () {
        commonTestData = [
          
        ]

        stackedTestData = [
          
        ]

        commonNegativeTestData = [
          
        ]

        stackedNegativeTestData = [
          
        ]

        $('#defaults-graph').tufteBar({
          data: commonTestData 
        });

        $('#static-properties-graph').tufteBar({
          
        });

        $('#dynamic-properties-graph').tufteBar({
                  });

        $('#negative-graph').tufteBar({
          data: commonNegativeTestData 
        });

        $('#stacked-defaults-graph').tufteBar({
          data: [
            
          ]
        });

        $('#stacked-dynamic-graph').tufteBar({
          data: stackedTestData,
          barWidth:  function(i) { return 0.5 + (i % 2) * 0.2 },
          barLabel:  function(i) { return $(this[0]).sum() },
          axisLabel: function(i) { return this[1].label }, 
          color:     function(i, stackedIndex) { 
            return (this[1].colors || ['#82293B', '#E57536', '#FFBE33'])[stackedIndex % 3] 
          }
        });

        $('#stacked-negative-graph').tufteBar({
          data: stackedNegativeTestData 
        });

        $('#legend-defaults-graph').tufteBar({
          data: stackedTestData,
          legend: {
            data: ["A", "B", "C"]
          }
        });

        $('#legend-dynamic-graph').tufteBar({
          data: stackedTestData,
          legend: {
            data: ["A", "B", "C"],
            label: function(i) { return this + i },
            color: function(i) { 
              return ['#82293B', '#E57536', '#FFBE33'][i % 3] 
            }
          }
        });
        
        $('#legend-colors-graph').tufteBar({
          data: stackedTestData,
          colors: ['#82293B', '#E57536', '#FFBE33'],
          legend: {
            data: ["A", "B", "C"]
          }
        });

        $('#css-colors-graph').tufteBar({
          data: commonTestData,
          color: function() { 
            $('body').append("<div id='colorhack' class='bar-" + this[1].label + "'></div>");
            var barcolor = $('#colorhack').css("color");
            $('#colorhack').remove();
            return barcolor 
          }
        });
        
        var pass;
        pass = false;
        try {
          $('#error-graph').tufteBar({
            data: [
              [1.0],
              ["Bogus"]
            ]
          });
        } catch(e) {
          pass = (e == "Non-numeric value provided for y: Bogus");
        }
        $('#result-bar').text(pass ? 'Pass' : 'Fail');

        pass = false;
        try {
          $('#error-graph').tufteBar({
            data: [
              [1.0],
              [[0, "Bogus"]]
            ]
          });
        } catch(e) {
          pass = (e == "Non-numeric value provided for y: 0,Bogus");
        }
        $('#result-stacked').text(pass ? 'Pass' : 'Fail');

        $([
          
        ]).each(function (index) {
          input = this[0];
          expected = this[1];
          actual = $.tufteBar.formatNumber(input);

          if ($.tufteBar.formatNumber(this[0]) == this[1])
            pass = true;
          else
            pass = false;

          $('#format-number').append('<tr><td>' + input + '</td><td>' + expected + '</td><td>' + actual + '</td><td>' + (pass ? 'Pass' : 'Fail') + '</td></tr>');
        });

        (function(table) {
          table.before("<div id='data-table-1-graph' class='graph' style='width:200px; height: 150px'></div>")

          $('#data-table-1-graph').tufteBar({
            data: table.find('tr:gt(0)').collect(function() { 
              column = function(e, n) { return $(e).find('td:nth-child(' + n + ')').text(); };
              return [column(this, 2) * 1, {label: column(this, 1)}]
            }),
            axisLabel: function() { return this[1].label }
          });
        })($('#data-table-1'));
      });
    </script>

</head>
<body>
<div class = "content">
<div id = "nav">
	<a href = "admin.php">Home | </a>
	<a href = "top_selling.php">Top Selling|</a>
	<a href = "admin_birth.php">Birthday| </a>
	<a href = "admin_chris.php">Christmas|</a>
	<a href = "admin_diwali.php">Diwali|</a>
	<a href = "add_product.php">Add poduct|</a>
	<a href = "change.php">Change Password|</a>
	<a href = "logout.php">Logout </a>
</div>
<br />