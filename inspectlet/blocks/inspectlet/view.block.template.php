<?php
/**
 * Inspectlet - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($enable_inspectlet): ?>
    <?php if ($embed_code): ?>
        <!-- Begin Inspectlet Asynchronous Code -->
        <script type="text/javascript">
        (function() {
        window.__insp = window.__insp || [];
        __insp.push(['wid', <?= ___h($embed_code)?>]);
        var ldinsp = function(){
        if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=<?= ___h($embed_code)?>&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        setTimeout(ldinsp, 0);
        })();
        </script>
        <!-- End Inspectlet Asynchronous Code -->
    <?php else: ?>
        <!-- NOTE - Inspectlet was not set up correctly - please add code snippet -->
        <script>console.error("Inspectlet has not been set from configuration");</script>
    <?php endif ?>
<?php endif ?>