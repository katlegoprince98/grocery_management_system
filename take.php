<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'><link rel="stylesheet" href="./style.css">
    
    <link rel="stylesheet" href="../user/assets/css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../user/assets/media/image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../user/assets/media/image/favicon/favicon-16x16.png" sizes="16x16">
</head>
    <body style="margin-top:-40px; background-color: #8aca38;">
        <div  style="background-color: #00B2F2; width: 80%; margin: auto;">
        <img id="backArrow" style="width: 70px; height: 50px;" class="btn" onclick="history.back()" src="../user/assets/media/svg/Vector.svg" alt="back">
        <header style="padding: 5px;">
            <center>
                <div><img style="width: 150px; height: 75px;" src="../user/assets/media/image/logo.png"></div>
            </center>
        </header>
        <h2 style="text-align: center; color: #fff; padding: 10px;">Nkgwete-IT Grocery Management</h2>
        
        <form style="margin: 0;" action="control.php" method="post"  id="submission_form">
            <fieldset>
            
            <div class="well form-horizontal" style="margin: 30px;">

            <!-- Form Name -->
            <legend>Takeout</legend>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Department</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select name="department" class="form-control selectpicker">
                            <option value=" ">Select Department</option>
                            <option value="Downstairs">Downstairs</option>
                            <option value="Upstairs">Upstairs</option>
                            <option value="R&D">R&D</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Employee</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select name="Employee" class="form-control selectpicker">
                            <option value=" ">Select Employee</option>
                            <option value="Mtho">Mtho</option>
                        </select>
                    </div>
                </div>
            </div>

            <legend>Items taken</legend>


            <!-- Cremora-->
            <div class="form-group">
            <label class="col-md-4 control-label">Cremora</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Cremora" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Coffee-->
            <div class="form-group">
            <label class="col-md-4 control-label">Coffee</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="coffee" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Milk-->
            <div class="form-group">
            <label class="col-md-4 control-label">Milk</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Employee" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Sugar-->
            <div class="form-group">
            <label class="col-md-4 control-label">Sugar</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="sugar" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Tomato Sauce-->
            <div class="form-group">
            <label class="col-md-4 control-label">Tomato Sauce</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="tomatosauce" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Butter-->
            <div class="form-group">
            <label class="col-md-4 control-label">Butter</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Butter" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Rooibos-->
            <div class="form-group">
            <label class="col-md-4 control-label">Rooibos</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Rooibos" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Joko-->
            <div class="form-group">
            <label class="col-md-4 control-label">Joko</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Joko" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Ricoffy-->
            <div class="form-group">
            <label class="col-md-4 control-label">Ricoffy</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Ricoffy" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Nescafe-->
            <div class="form-group">
            <label class="col-md-4 control-label">Nescafe</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Employee" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Juice-->
            <div class="form-group">
            <label class="col-md-4 control-label">Juice</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Juice" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Coldrink-->
            <div class="form-group">
            <label class="col-md-4 control-label">Cold drink</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Coldrink" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Biscuit-->
            <div class="form-group">
            <label class="col-md-4 control-label">Biscuit</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <select name="Biscuit" class="form-control selectpicker">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" name="submit" class="btn btn-warning">Save & Submit <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                    </div>

            </div>
        
            </fieldset>
        </form>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    </body>
</html>