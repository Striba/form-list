<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Главная страница</title>

 <!-- Bootstrap4 lib CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Подключение файла со своими стилями -->
<link href="/templates/css/style.css" rel="stylesheet" type="text/css"> 
<!-- jQuery lib-->
<script type="text/javascript" src="/templates/js/jquery-3.3.1.min.js"></script>
<!-- Подключение JS скрипта -->
<script type="text/javascript" src="/templates/js/main.js"></script>

</head>

<body>
        <div class="wrapper container-fluid">
            <div><h3 class="text-center">Assignment</h3></div>
        <div>
            <form action="#" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-xs-2 control-label">Call centr:</label>
                    <div class="col-xs-8">
                        <select id="callcenter" class="form-control"  name="callcenter" >
                            <?php foreach ($callcentersList as $id => $callcenterName): ?>
                            <option value="<?php echo $id; ?>"><?php echo $callcenterName; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Desk:</label>
                    <div class="col-xs-8">
                        <select class="form-control" id="deskName" name="deskName">
                            <?php foreach ($desksList as $id => $deskName): ?>
                                <option value="<?php echo $id; ?>"><?php echo $deskName; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Team:</label>
                    <div class="col-xs-8">
                        <select class="form-control" id="teamName" name="teamName">
                            <?php foreach ($teamsList as $id => $teamName): ?>
                                <option value="<?php echo $id; ?>"><?php echo $teamName; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">Sales:</label>
                    <div class="col-xs-8">
                        <select class="form-control" id="userName" name="userName">
                            <?php foreach ($usersList as $id => $userName): ?>
                                <option value="<?php echo $id; ?>"><?php echo $userName; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 colxs-10">
                        <input type="submit" class="btn btn-secondary" value="Close">
                        <input id="save" type="submit" class="btn btn-primary" value="Save">
                    </div>
                </div>
            </form>
        </div>
        </div>

</body>

</html>

