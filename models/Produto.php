<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property string $preco
 * @property string $data
 * @property integer $id_user
 * @property string $foto
 * @property integer $novo
 * @property double $vendido
 * @property string $preco_custo
 * @property integer $id_categoria
 *
 * @property Categoria $idCategoria
 * @property User $idUser
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'preco', 'data', 'id_user', 'vendido', 'preco_custo', 'id_categoria'], 'required'],
            [['preco', 'vendido', 'preco_custo'], 'number'],
            [['data'], 'safe'],
            [['id_user', 'novo', 'id_categoria'], 'integer'],
            [['nome'], 'string', 'max' => 150],
            [['descricao'], 'string', 'max' => 500],
            [['foto'], 'string', 'max' => 250],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id_categoria' => 'id']],
        ]; 
    } 

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
            'data' => 'Data',
            'id_user' => 'Id User',
            'foto' => 'Foto',
            'novo' => 'Novo',
            'vendido' => 'Vendido',
            'preco_custo' => 'Preco Custo',
            'id_categoria' => 'Id Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
  
     /** 
     * @return \yii\db\ActiveQuery 
     */ 
    public function getVendaProdutos() 
    { 
        return $this->hasMany(VendaProduto::className(), ['id_produto' => 'id']);
    } 
}
