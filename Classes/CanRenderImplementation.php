<?php
namespace Ttree\Fusion\CanRender;

/*
 * This file is part of the Ttree.Fusion.CanRender package.
 *
 * (c) Handcrafted with love by ttree agency, ttree.ch
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use TYPO3\Flow\Annotations as Flow;
use TYPO3\TypoScript\TypoScriptObjects\AbstractTypoScriptObject;

/**
 * CanRenderImplementation
 */
class CanRenderImplementation extends AbstractTypoScriptObject
{
    /**
     * TypoScript Type which shall be rendered
     *
     * @return string
     */
    public function getType()
    {
        return $this->tsValue('type');
    }

    /**
     * Evaluate this TypoScript object and return the result
     *
     * @return mixed
     */
    public function evaluate()
    {
        return $this->tsRuntime->canRender('/type<' . $this->getType() . '>');
    }
}
