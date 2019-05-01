<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Export to CSV using PHP and MySQL by CodexWorld</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.container{padding: 10px;}
</style>
</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="exportData.php" class="btn btn-success pull-right">Export Members</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>appliance</th>
                      <th>12hr</th>
                      <th>13hr</th>
					  <th>14hr</th>
					  <th>15hr</th>
					  <th>16hr</th>
					  <th>17hr</th>
					  <th>18hr</th>
					  <th>19hr</th>
					  <th>20hr</th>
					  <th>21hr</th>
					  <th>22hr</th>
					  <th>23hr</th>
                      <th>0hr</th>
					  <th>1hr</th>
					  <th>2hr</th>
					  <th>3hr</th>
					  <th>4hr</th>
					  <th>5hr</th>
					  <th>6hr</th>
					  <th>7hr</th>
					  <th>8hr</th>
					  <th>9hr</th>
					  <th>10hr</th>
                      <th>11hr</th>
					  
					  
                    </tr>
                </thead>
                <tbody>
                <?php
				session_start();
$naam=$_SESSION["username"];
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM $naam");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['appliance']; ?></td>
					  <td><?php echo $row['12hr']; ?></td>
					  <td><?php echo $row['13hr']; ?></td>
					  <td><?php echo $row['14hr']; ?></td>
					  <td><?php echo $row['15hr']; ?></td>
					  <td><?php echo $row['16hr']; ?></td>
					  <td><?php echo $row['17hr']; ?></td>
					  <td><?php echo $row['18hr']; ?></td>
					  <td><?php echo $row['19hr']; ?></td>
					  <td><?php echo $row['20hr']; ?></td>
					  <td><?php echo $row['21hr']; ?></td>
					  <td><?php echo $row['22hr']; ?></td>
					  <td><?php echo $row['23hr']; ?></td>
					  <td><?php echo $row['0hr']; ?></td>
					  <td><?php echo $row['1hr']; ?></td>
					  <td><?php echo $row['2hr']; ?></td>
					  <td><?php echo $row['3hr']; ?></td>
					  <td><?php echo $row['4hr']; ?></td>
					  <td><?php echo $row['5hr']; ?></td>
					  <td><?php echo $row['6hr']; ?></td>
					  <td><?php echo $row['7hr']; ?></td>
					  <td><?php echo $row['8hr']; ?></td>
					  <td><?php echo $row['9hr']; ?></td>
					  <td><?php echo $row['10hr']; ?></td>
					  <td><?php echo $row['11hr']; ?></td>
                    
					</tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>