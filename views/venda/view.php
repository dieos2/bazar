<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Produto;
use app\models\Setup;
/* @var $this yii\web\View */
/* @var $model app\models\venda */


?>
<style>
    #outdiv
{
    background-color: #000;
    width:100%;
    height: 200px;
	border: solid;
	
}
</style>
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
                <div id="conteudoqrcode">

           
               
            </div>   <div id="result"></div>
            </div>
                    
        </div>
    </div>
  </div>
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript"></script>
<script>
   var idVenda = <?php echo $model->id;?>;
jQuery(function(){
      
        $('#myModal').on('show.bs.modal', function (e) {
            jQuery("#conteudoqrcode").html('<div id="outdiv"></div>');
              load();
             
});
  $('#myModal').on('hide.bs.modal', function (e) {
        jQuery("#outdiv").hide();
              //  off();
});

    
    jQuery("#select2-option").click(function(){
 

var idProduto = jQuery(this).val();
        adicionaProdutoVenda(idProduto,idVenda );

      
   }); 
});
function adicionaProdutoVenda(idProduto, idVenda){
                 $.ajax({
  url: "/vendaproduto/create?idProduto="+idProduto+"&idVenda="+idVenda,
  
}).done(function(data) {
     $('#myModal').modal('toggle');
 location.reload();
});
}
</script>
