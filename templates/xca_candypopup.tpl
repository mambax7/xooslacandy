<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
        'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<{$xoops_langcode}>" lang="<{$xoops_langcode}>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=<{$xoops_charset}>"/>
    <meta http-equiv="content-language" content="<{$xoops_langcode}>"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<{xoAppUrl /modules/system/style.css}>"/>
    <script type="text/javascript">
        /**
         *
         * @access public
         * @return void
         **/
        function add(html) {
            parent.parent.insertHTML('<{$id}>', html, '<{$editor}>');
            parent.parent.GB_hide();
        }
    </script>
</head>
<body>
<table style="width: 100%;" cellspacing="1" class="outer">
    <thead>
    <tr style="text-align: center;">
        <th style="width: 10%;"><{$smarty.const._XL_AD_XCA_ID}></th>
        <th style="width: 45%;"><{$smarty.const._XL_AD_XCA_MACRO}></th>
        <th style="width: 45%;"><{$smarty.const._XL_AD_XCA_HTML}></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <{foreach item=candy from=$candy}>
        <tr style="text-align: center;" class="<{cycle values='even,odd'}>">
            <td><{$candy.xca_id}></td>
            <td style="text-align: left;"><{$candy.xca_macro}></td>
            <td style="text-align: left;"><{$candy.xca_html}></td>
            <td style="text-align: center;"><a title="<{$smarty.const._XL_AD_XCA_INSERTMACRO}>" href="#"
                                               onclick="javascript:add('<{$candy.xca_macro}>');return false;">
                    <img src="<{xooslaIcons 16/icon-16-download.png}>" alt="<{$smarty.const._XL_AD_XCA_INSERTMACRO}>"/>
                </a></td>
        </tr>
        <{foreachelse}>
        <tr>
            <td class='even' class='center;' colspan='4'><{$smarty.const._XL_AD_XCA_NOTHINGFOUND}></td>
        </tr>
    <{/foreach}>
    </tbody>
    <tr class="foot" style="text-align: center;">
        <td colspan="4">&nbsp;</td>
    </tr>
</table>
<{$securityToken}>
</body>
</html>
