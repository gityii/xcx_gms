<?php
namespace api\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;


class ArticleController extends ActiveController
{
    //http://xcx.api.com/index.php/article
    public $modelClass = 'common\models\Post';

}