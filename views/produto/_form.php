<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categoria;

?>

          
            <section class="scrollable padder">
    <div class="m-b-md">
                <h3 class="m-b-none">Produtos</h3>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Cadastro</header>
                    <div class="panel-body">
                         <?php $form = ActiveForm::begin([
                'options' => ['enctype'=>'multipart/form-data']
            ]); ?>
    <?= $form->field($model, 'foto')->fileInput() ?>
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
                        <div class="form-group field-produto-nome required"> 
      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                            <span class="dropdown-label">Categoria</span> 
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-select">
                              <?php
                               foreach (Categoria::find()->all() as $categoria){
                                   echo '<li class=""><a href="#"><input type="radio" name="Produto[id_categoria]" checked="" value='.$categoria->id.'>'.$categoria->categoria.'</a></li>';
                               }
                              ?>
                              
                             
                          </ul>
                        </div>
                  
    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco_custo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>
                    
                        <div class="form-group">
                      <label class="col-sm-2 control-label">Novo</label>
                      <div class="col-sm-10">
                        <label class="switch">
                        <input type="checkbox" id="produto-novo" name="Produto[novo]" >
                          <span></span>
                        </label>
                      </div>
                    </div>
   <?= $model->isNewRecord?'':'<div class="form-group">
                      <label class="col-sm-2 control-label">Vendido</label>
                      <div class="col-sm-10">
                        <label class="switch">
                        <input type="checkbox" id="produto-vendido" name="Produto[vendido]" >
                          <span></span>
                        </label>
                      </div>
                    </div>' 
   
       
   
  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
                   
                    </div>
                  </section>
                </div>
              </div>
    </section>
          
 


   


         