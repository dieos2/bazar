<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Produto;
use app\models\Setup;
/* @var $this yii\web\View */
/* @var $model app\models\venda */


?>
  <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Caixa</a></li>
                <li class="active">Aberto</li>
              </ul>
                 <div class="row">
                <div class="col-md-12">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Produtos  <span class="label  pull-right"> 
</header>
                       <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                             <div class="input-group">
                           <div class="col-sm-2">
                            <a href="#" class="btn btn-dark btn-rounded" data-toggle="modal" data-target="#myModal" >Escanear</a>
                        </div>
                        
                        <div class="col-sm-10">
                          <div class="m-b">
                            <select id="select2-option"  style="width:260px">
                                 <?php
                               foreach (Produto::find()->all() as $produto){
                                  echo '<option value="'.$produto->id.'">'.$produto->nome.'</option>'; 
                               }
                               ?>
                              
                            </select>
                            
                          </div>
                       
                        </div>
                       
                    </div>  
                             
                            </div>
                        </div>
                               <div class="row">
                             <div class="col-md-12">
                                     <div class="line"></div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="60">QT</th>
                    <th>DESCRIÇÂO</th>
                    <th width="140">UNI PREÇO</th>
                    <th width="90">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($model->produtos as $produto){
                        echo '<tr>
                    <td>1</td>
                    <td>'.$produto->nome.'</td>
                    <td>'.Setup::FormataMoeda($produto->preco).'</td>
                    <td>'.Setup::FormataMoeda($produto->preco).'</td>
                  </tr>';
                    }
?>
                  <tr>
                      <td colspan="3"></td>
                      <td class="text-danger"><?php echo Setup::FormataMoeda($model->totalVenda) ?></td>
                  </tr>
                </tbody>
              </table>
                             </div>
                        </div>
                     
                  </section>
                </div>
            </section>
        </section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
        <div class="modal-body" style="height: 400px;">
            <div id="mainbody">
<div id="outdiv">
</div>
                <div id="result"></div>
                <img class="selector" id="qrimg" src="cam.png" onclick="setimg()" align="right"/>
                <img class="selector" id="webcamimg" src="vid.png" onclick="setwebcam()" align="left" />
      </div>  </div>
    </div>
  </div>
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
<script>
jQuery(function(){
    
    jQuery("#select2-option").click(function(){
        debugger;
             $.ajax({
  url: "/vendaproduto/create?idProduto="+jQuery(this).val()+"&idVenda=<?php echo $model->id;?>",
  
}).done(function(data) {
 location.reload();
});
      
   }); 
});</script>
