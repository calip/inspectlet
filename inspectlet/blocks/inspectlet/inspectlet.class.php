<?php
namespace Block;
/**
 * Inspectlet - Main Class
 * 
 * Inspectlet records videos of your visitors as they use your site, allowing you to see everything they do. See every mouse movement, scroll, click, and keypress
 * 
 * @copyright 2020 Beplas Studio
 *
 * @license MIT
 *
 * @package inspectlet
 * @version 1.0
 * @author  Beplas Studio <alip@beplasstudio.com>
 * @link    https://beplasstudio.com/
 */
class Inspectlet extends \SCHLIX\cmsBlock
{
    public function Run() {
        global $__inspectlet_loaded;
        if ($__inspectlet_loaded !== 'loaded') { // prevent the built-in duplicate blocks feature 
            $enable_inspectlet = $this->config['bool_enable_inspectlet'];
            $embed_code = $this->config['int_embed_code'];

            $__inspectlet_loaded = 'loaded';
            $this->loadTemplateFile('view.block', compact(array_keys(get_defined_vars())));
        }
    }
}
