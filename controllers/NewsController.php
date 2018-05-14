<?php
namespace app\controllers;
use app\models\News;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $query = News::find();
      $pagination = new Pagination([
        'defaultPageSize' => 3,
        'totalCount' => $query->count(),
      ]);
      $rows = $query->orderBy('id')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
      return $this->render('index', [
        'rows' => $rows,
        'pagination' => $pagination,
      ]);
    }
    public function actionArticle($id)
    {
      if (($item = News::findOne($id)) !== null) {
          return $this->render('article',['item'=>$item]);
      }
      throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>