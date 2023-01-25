<?php
////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////


$title = 'Title';
$pageName = 'Page Name';
include('control.php');
$cont = '';

$results = pullData();
  if($results->num_rows > 0){
    while($row = mysqli_fetch_assoc($results)){
       $cont .= '
          
       <tr>
          <td>'.$row["groID"].'</td>
          <td>'.$row["groItem"].'</td>
          <td>'.$row["grocShop"].'</td>
          <td>'.$row["groQuantity"].'</td>
        </tr>
       ';
    }
  }

$content = 
'
<div class="row">
<div class="col-md-12">

    <div class="card m-2">
        <div class="card-body">
            <table id="example1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Item No</th>
                        <th>Item</th>
                        <th>Shop Puchased</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                   '.$cont.'
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
';

$footer = '    
<footer>
<div class="container">
    <div>2023 © Authorized Personnel Only.</div>
    <div>
        <nav class="nav">
            <a href="mailto:faizel.desai@nkgwete.co.za" class="nav-link">All Rights Reserved By <span style="#00B2F2">Nkgwete</span> <span style="#8ACA38"> IT </span>  <span style="#00B2F2">Solutions</span></a>
        </nav>
    </div>
</div>
</footer>
';

include 'Template.php';

?>

