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

        $return = '';

        if($bindchat_livechat_siteid) {
            include template('bindchat_livechat:widget');
        }
        return $return;
    }
}

?>
