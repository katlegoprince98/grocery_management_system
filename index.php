<?php
////////////////////////////////////////////////////////////////////////////////
/*
session_start();
if (isset($_SESSION['user_name'])) 
{
    $user = $_SESSION['user_name'];
}
else
{
    ?>
        <script>
        window.alert("Invalid Session Token!");
        window.location = "https://admin.vumeladocs.co.za/index.php?logout";
        </script>
    <?php
}
*/
///////////////////////////////////////////////////////////////////////////////


$title = 'Title';
$pageName = 'Page Name';
$content = 
'
<div class="row">
<div class="col-md-12">

<h1>Hello World</h1>

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

