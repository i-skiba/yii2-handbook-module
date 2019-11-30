<?php
namespace concepture\yii2handbook\services\traits;

use Yii;
use concepture\yii2logic\forms\Model;

/**
 * Trait HandbookSupportTrait
 * @package concepture\yii2handbook\traits
 */
trait ModifySupportTrait
{
    /**
     * Устанавливает текущий домен
     * @param Model $model
     * @param bool $ignoreSetted
     */
    protected function setCurrentDomain(Model $model, $ignoreSetted = true)
    {
        if (! $ignoreSetted){
            return;
        }

        $model->domain_id = Yii::$app->domainService->getCurrentDomainId();
    }

    /**
     * Устанавливает текущую локаль
     * @param Model $model
     * @param bool $ignoreSetted
     */
    protected function setCurrentLocale(Model $model, $ignoreSetted = true)
    {
        if (! $ignoreSetted){
            return;
        }

        $model->locale = Yii::$app->localeService->getCurrentLocaleId();
    }
}

