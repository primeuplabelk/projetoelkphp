<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto ELK - Converter</title>
    <?php 
        include('./DataBaseUtils/ConnectionBD.php');
        include('./PrimeUpLogstashConverter/PrimeUpLogstashConverterInputBuilder.php');
        include('./DataBaseUtils/dataManipulation.php');
    ?>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Projeto ELK</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Gabriel Mourao</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Gabriel Mourao</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Gabriel Mourao</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Ver tudo</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                       
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Gabriel Mourao <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href=""><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Gráficos</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-table"></i> Confs</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-edit"></i> JSON</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-desktop"></i> Elastic</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-wrench"></i> Logstash</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Primeup  <small>Elastic Stack Converter Tool</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Gabriel -  aHelen
                            </li>
                        </ol>
                    </div>
                </div> 
                <!-- /.row -->
                <form method="post" action="PrimeUpLogstashConverter/PrimeUpLogstashConverterInput.php">
                    <label>File Configuration</label><br><br>
                    <div class="form-group">
                        <label>Number of Files</label>
                        <label class="radio-inline">
                            <input type="radio" name="numeroFiles" id="optionsRadiosInline1" value="1" checked>1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="numeroFiles" id="optionsRadiosInline2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="numeroFiles" id="optionsRadiosInline3" value="3">3
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Conf Name (Único) </label>
                        <input id="confName" name="confName" class="form-control" placeholder="Conf Name (Único)" required>
                    </div>
                    <div class="form-group">
                        <label>Start Position</label>
                        <select id = "start_position" name = "start_position" class="form-control">
                            <option value="" >Choose Start Position</option>
                            <option value="beginning" >Beggining</option>
                            <option value="end" >End</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Raiz dos Logs</label>
                        <input id="path" name="path" class="form-control" placeholder="Caminho dos logs" required>
                    </div>
                    <div class="form-group">
                        <label>Ignore Older</label>
                        <input id ="ignore_older" name="ignore_older" class="form-control" placeholder="Ignore Older(Seconds)">
                    </div>
                    <div class="form-group">
                        <label>SinceDBPath</label>
                        <input id ="sincedb_path" name="sincedb_path" class="form-control" placeholder="Std -> /dev/null ">
                    </div>
                    <div class="form-group">
                        <label>Charset</label>
                        <select id="charset" name="charset" class="form-control">
                            <option value="" >Choose charset</option>
                            <option value="ANSI_X3.4-1968" >ANSI_X3.4-1968</option>
                            <option value="UTF-8" >UTF-8</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Subprefeitura</label>
                        <?php
                        $obj = retrieveConfList();
                        
                        
                        print "<select name='confLista' class='form-control'>";
                        for ($i = 0; $i < sizeof($obj); $i++) {
                            $val = $obj[$i]->{'conf_name'};
                            $idOption4 = $obj[$i]->{'id_conf'};
                            print "<option value = '$idOption'>$val</option>";
                        }
                        print "</select>";
                        ?>
                        <p class="help-block">Exemplo: Lapa</p>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Enviar</button>
                    

                </form>
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
