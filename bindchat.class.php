<?php
/**
 *	[必聊网在线客服(bindchat_livechat.{modulename})] (C)2013-2099 Powered by 必聊网.
 *	Version: V1.0.0
 *	Date: 2013-6-17
 *	Email: bindchatinc@gmail.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


class plugin_bindchat_livechat {

    /**
     * Return BindChat inline SCRIPT in footer
     * @return string
     */
    function global_footer(){
        global $_G;
        $plugin_bindchat_livechat = $_G['cache']['plugin']['bindchat_livechat'];

        $bindchat_livechat_siteid = htmlspecialchars($plugin_bindchat_livechat['bindchat_livechat_siteid']);
        $bindchat_livechat_sitedomain  = htmlspecialchars($plugin_bindchat_livechat['bindchat_livechat_sitedomain']);

        if($bindchat_livechat_siteid) {

            //include template('bindchat_livechat:widget');
$return = <<<EOF
<!--Start of BindChat Live Chat Script -->
<script type="text/javascript">
  (function (w, d, e, g, r, a, m) {
      w['BindChatObject'] = r;
      w[r] = w[r] || function () {
          (w[r].q = w[r].q || []).push(arguments)
      }, w[r].t = 1 * new Date();
      a = d.createElement(e),
      m = d.getElementsByTagName(e)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.bindchat.com/api/js/all.js', 'bindchat');

  bindchat('create', '{$bindchat_livechat_siteid}', '{$bindchat_livechat_sitedomain}');
</script>
<noscript>
<a href="http://www.bindchat.com/sites/contact/{$bindchat_livechat_siteid}" target="_blank">Feedback?</a> 
powered by <a href="http://www.bindchat.com/welcome">Bindchat</a>
</noscript>
<!--End of BindChat Live Chat Script -->
EOF;
        }
        return $return;
    }
}

?>
