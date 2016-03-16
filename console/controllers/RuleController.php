<?php
namespace console\controllers;

use yii\console\Controller;
class RuleController extends Controller
{
    public function actionInit()
    {
        $auth = \Yii::$app->authManager;
        
        // 添加规则
        $rule = new \rbac\AuthorRule;
        $auth->add($rule);
        
        // 添加 "updateOwnPost" 权限并与规则关联
        $updateOwnPost = $auth->createPermission('updateOwnPost');
        $updateOwnPost->description = 'Update own post';
        $updateOwnPost->ruleName = $rule->name;
        $auth->add($updateOwnPost);
        
//         // "updateOwnPost" 权限将由 "updatePost" 权限使用
//         $auth->addChild($updateOwnPost, $updatePost);
        
//         // 允许 "author" 更新自己的帖子
//         $auth->addChild($author, $updateOwnPost);
    }
}

?>