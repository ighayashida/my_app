<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
	<title> <?php echo "G1Brazil - ". $title_for_layout; ?> </title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>
    <?php echo $this->Html->css('estilo'); ?>
</head>
<body>

    <div id="header">
        <div class="wrap">
            <h1 class="logo">Gamerz<b>One</b> Brazil - 2013</h1>
               <?php echo $this->element('menu'); ?>
        </div>
    </div>

    <div id="content">
        <div class="wrap">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>

    <div id="footer">
        <div class="wrap">
            Copyright 2013 - Todos os Direitos Reservados
        </div>
    </div>
  
</body>
</html>
