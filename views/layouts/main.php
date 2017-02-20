<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HeadAsset;
use app\assets\BottomAsset;
use yii\widgets\Alert;
use app\models\Setup;
use app\models\User;
use app\models\Perfil;
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model app\models\Sala */


HeadAsset::register($this);
$modelUsers =  User::findByUsername(Yii::$app->user->identity->username) 
?>
<?php BottomAsset::register($this);    ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en" class="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="" />

        <title>Bazar | DasPrimas</title>
        <?php $this->head() ?>

        <link href="/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="/js/datatables/datatables.css" type="text/css"/>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">



        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
     

    </head>
    

        <?php $this->beginBody() ?>
        <?= Html::csrfMetaTags() ?>
       
        <section class="vbox">
            <header class="bg-dark dk header navbar navbar-fixed-top-xs">
                <div class="navbar-header aside-md">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
                        <i class="fa fa-bars"></i> 
                    </a>
                    <a href="#" class="navbar-brand" data-toggle="fullscreen">
                        <img src="/images/logo.png" class="m-r-sm">Bazar das Primas</a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                        <i class="fa fa-cog"></i> 
                    </a>
                </div>
             
                <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
                    <li class="hidden-xs">


                    </li>
                    <li class="dropdown hidden-xs">


                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="thumb-sm avatar pull-left">
                            <img src="/images/<?= Perfil::find($modelUsers->id)->where(['=', 'id', $modelUsers->id])->one()->foto ?>">
                            </span><?= Perfil::find()->where(['=', 'id', $modelUsers->id])->one()->nome ?>
                          
                               
                        </a>
                        <ul class="dropdown-menu animated fadeInRight">
                            <span class="arrow top"></span>
                            <li> <a href="#">Settings</a> 
                            </li>
                            <li>
                                <a href="/perfil/trocasenha">Trocar Senha</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge bg-danger pull-right">3</span> Notifications</a>
                            </li>
                            <li>
                                <a href="docs.html">Help</a> 
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/site/logout" data-toggle="">Logout</a> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <section>
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside class="bg-dark lter aside-md hidden-print" id="nav">
                        <section class="vbox">

                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="/produto/" class="active">
                                                    <i class="fa fa-bolt icon">
                                                        <b class="bg-danger"></b>
                                                    </i>  <span>Produto</span>
                                                </a>
                                            </li>
 
                                           
                                            <li class="">
                                                <a href="/caixa/index/" class="active">
                                                    <i class="fa fa-dashboard icon">
                                                        <b class="bg-danger"></b>
                                                    </i>  <span>Caixa</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/categoria">
                                                    <i class="fa fa-bars icon">
                                                        <b class="bg-success"></b>
                                                    </i>

                                                    <span>Categoria</span>
                                                </a>

                                            </li>


                                        </ul>
                                    </nav>
                                    <!-- / nav -->
                                </div>
                            </section>
                            <footer class="footer lt hidden-xs b-t b-dark">

                                <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i>  <i class="fa fa-angle-right text-active"></i> 
                                </a>

                            </footer>
                        </section>
                    </aside>
                    <!-- /.aside -->
                    <section id="content">
                       

                <?= $content ?>



   <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
                            </section>
                            <aside class="bg-light lter b-l aside-md hide" id="notes">
                                <div class="wrapper">Notification</div>
                            </aside>
                        </section>
                    </section>
                </section>

                







          
        <?php if (isset($this->blocks['modals'])): ?>
            <?= $this->blocks['modals'] ?>
        <?php else: ?>
            <!-- no modals -->
        <?php endif; ?>
            
        <?php $this->endBody() ?>
               <script src="/js/colorpicker.js" type="text/javascript"></script>
               <script src="../../js/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
               <script src="/js/datatables/jquery.dataTables.min.js"></script>
               <script src="../../js/jquery.PrintArea.js" type="text/javascript"></script>
         <script>
             
    jQuery(function(){
        jQuery("#time-cor_primaria, #time-cor_secundaria").css('width', '7%');
        
 jQuery('#time-cor_primaria').ColorPicker({
	
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#time-cor_primaria').css('backgroundColor', '#' + hex);
               $('#time-cor_primaria').val('#' + hex);
	}
});
         jQuery('#time-cor_secundaria').ColorPicker({
	
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#time-cor_secundaria').css('backgroundColor', '#' + hex);
               $('#time-cor_secundaria').val('#' + hex);
	}
});
});
      function printArea() {

            jQuery("#divPrint").printArea();
        }
         </script>
       
    
</html>
<?php $this->endPage() ?>
