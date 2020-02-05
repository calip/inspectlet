<?php
/**
 * Inspectlet - Config
 * 
 * Inspectlet records videos of your visitors as they use your site, allowing you to see everything they do. See every mouse movement, scroll, click, and keypress
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php 
global $HTMLHeader;
$script_src = CURRENT_SUBSITE_URL_PATH . '/blocks/inspectlet/inspectlet.admin.js';
$HTMLHeader->JAVASCRIPT($script_src);
?>
<h4><?= ___('Inspectlet Settings') ?></h4>
<schlix-config:checkbox config-key="bool_enable_inspectlet" label="<?= ___('Enable Inspectlet') ?>" />
<schlix-config:integerbox id="embed_code" config-key="int_embed_code" required="required" label="<?= ___('Embed Code') ?>"   />
<hr />
<strong><?= ___('Code Snippet') ?></strong>
<schlix-config:textarea id="code_snippet" config-key="str_code_snippet" style="min-height:100px" placeholder="{...}" />
<p><?= ___('Enter your Inspectlet embed code to Code Snippet. you can find <a href="https://www.inspectlet.com/" target="_blank">Inspectlet</a> here.') ?></p>