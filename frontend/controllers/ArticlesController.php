<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Articles;

class ArticlesController extends Controller
{
    public function actionArticles()
    {
        $articles = Articles::find()->all();
        return $this->render('articles', ['articles' => $articles]);
    }

    public function actionArticle()
    {
        $article = Articles::find()->where(['id' => Yii::$app->request->get()['id']])->one();
        return $this->render('article', ['article' => $article]);
    }
}