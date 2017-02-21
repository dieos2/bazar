<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Produto;
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
                             <div class="form-group">
                        <label class="col-sm-2 control-label">Produto</label>
                        <div class="col-sm-10">
                          <div class="m-b">
                            <select id="select2-option" style="width:260px">
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
                    <td>iPhone 5 32GB White & Silver (GSM) Unlocked</td>
                    <td>$749.00</td>
                    <td>$749.00</td>
                  </tr>';
                    }
?>
                  
                </tbody>
              </table>
                             </div>
                        </div>
                     
                  </section>
                </div>
            </section>
        </section>


<script>
jQuery(function(){
    jQuery("#select2-option").click(function(){
        debugger;
             $.ajax({
  url: "/vendaproduto/create?idProduto="+jQuery(this).val()+"&idVenda=<?php echo $model->id;?>",
  
}).done(function(data) {
 
});
      
   }); 
});</script>
