<?php
/**
 * @package   yii2-validators
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @version   1.0.3
 */
namespace kartik\validators;

use kartik\base\AssetBundle;

/**
 * Card Validation asset bundle.
 */
class CardValidatorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\validators\ValidationAsset'
    ];

    public $publishOptions = [
        'forceCopy'=>true,
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/card-validator']);
        parent::init();
    }
}