<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fan Club List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<?php
    
   // $genders = [1 => 'PHD', 2 => 'Post Graduate', 3 => 'Graduate', 4 => 'HSC', 5 => 'SSC', 6 => 'JSC'];
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    $limit = 1;
    
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $s = $db->prepare("SELECT * FROM t_adresse");
    $s->execute();
    $allResp = $s->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($allResp);
    $total_results = $s->rowCount();
    $total_pages = ceil($total_results/$limit);
    
    if (!isset($_GET['page'])) {
        $page = 1;
    } else{
        $page = $_GET['page'];
    }


    $start = ($page-1)*$limit;

    $stmt = $db->prepare("SELECT * FROM t_adresse ORDER BY id DESC LIMIT $start, $limit");
    $stmt->execute();

    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    
    $results = $stmt->fetchAll();
       
    $conn = null;
    
    // var_dump($results);
    
    $no = $page > 1 ? $start+1 : 1;


?>

<div class="container">
  <h2 class="">Fan Club List <span class="badge">Total: <?= $total_results; ?></span></h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>designation</th>
        <th>ville11</th>
   	  </tr>
    </thead>
    <tbody>
        <?php foreach($results as $result){?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $result->designation; ?></td>
            <td><?= $result->ville; ?></td>
           
			
          </tr>
        <?php $no++; } ?>
    </tbody>
  </table>
    <ul class="pagination">
        <li><a href="?page=1">First</a></li>
        
        <?php for($p=1; $p<=$total_pages; $p++){?>
            
            <li class="<?= $page == $p ? 'active' : ''; ?>"><a href="<?= '?page='.$p; ?>"><?= $p; ?></a></li>
        <?php }?>
        <li><a href="?page=<?= $total_pages; ?>">Last</a></li>
    </ul> 
</div>

</body>
</html>