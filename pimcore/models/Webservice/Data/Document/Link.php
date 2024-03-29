<?php
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @category   Pimcore
 * @package    Webservice
 * @copyright  Copyright (c) 2009-2014 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

namespace Pimcore\Model\Webservice\Data\Document;

use Pimcore\Model;

class Link extends Model\Webservice\Data\Document {
    
    /**
     * @var integer
     */
    public $internal;

    /**
     * @var string
     */
    public $internalType;

    /**
     * @var string
     */
    public $direct;

    /**
     * @var string
     */
    public $linktype;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $href;


    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $anchor;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $accesskey;

    /**
     * @var string
     */
    public $rel;

    /**
     * @var string
     */
    public $tabindex;
}
