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
class Inspectlet
{
    constructor()
    {
        this.timeout= 1000;
        this.timer= null;
        SCHLIX.Event.onDOMReady(this.onDOMReady, this, true);
    }
    
    onDOMReady()
    {   
        SCHLIX.Event.on('code_snippet', 'input', this.onCodeSnippetChange, this, true);
    }
    
    onCodeSnippetChange(e)
    {
        clearTimeout(this.timer);
        this.timer = setTimeout(function () {
            var code_snippet = SCHLIX.Dom.get('code_snippet').value;
            var js_pattern = /__insp.push\(\[(.*)\]\)/;
            var js_url = code_snippet.split(js_pattern)[1];
            if (js_url !== undefined)
            {   
                var embed_code = js_url.split(',')[1];
                SCHLIX.Dom.get('embed_code').value = embed_code.replace(/\s/g, "");
                SCHLIX.Dom.get('code_snippet').value = "";
                SCHLIX.Alert.info('EMbed Code updated'); 
            } 
            else 
            {
                SCHLIX.Alert.error('Some form field values are invalid');
            }
        }, this.timeout);
    }
    
}

var __inspectlet = new Inspectlet();

