<{includeq file="$dirpath/xoosla_header.tpl"}>
<form action="index.php" method="post" name="adminform" id="adminform" <{$onsubmit}> >
    <{securityToken}><{*//mb*}>
    <{includeq file="$dirpath/xoosla_intro.tpl"}>
    <{includeq file="$dirpath/xoosla_menu.tpl"}>
    <{if $toolbar}>
        <{includeq file="$dirpath/xoosla_toolbar.tpl"}>
    <{/if}>
    <table id="xo-candylist-sorter" cellspacing="1" class="outer tablesorter">
        <thead>
        <tr style="text-align: center;">
            <th style="width: 40px;"><{$smarty.const._XL_AD_XCA_ID}></th>
            <!--<th><{$smarty.const._XL_AD_XCA_MID}></th>-->
            <th style="width: 25%;"><{$smarty.const._XL_AD_XCA_MACRO}></th>
            <th><{$smarty.const._XL_AD_XCA_HTML}></th>
            <th style="width: 70px;"><{$smarty.const._XL_AD_XCA_ACTIVE}></th>
            <th style="width: 70px;"><{$smarty.const._XL_AD_XCA_WEIGHT}></th>
            <th style="width: 20px;"><input name="checkall" id="checkall"
                                            onClick="xoopsCheckAll( 'adminform', 'checkall');" type="checkbox"
                                            value=""></th>
        </tr>
        </thead>
        <tbody>
        <{foreach item=candy from=$candy}>
            <tr style="text-align: center;" class="<{cycle values='even,odd'}>">
                <td><{$candy.id}></td>
                <!--<td><{$candy.mid}></td>-->
                <td style="text-align: left;"><{$candy.macro}></td>
                <td style="text-align: left;"><{$candy.tpl}></td>
                <td><img id="loading_sml<{$candy.id}>" src="<{xooslaIcons spinner.gif}>" style="display:none;"
                         title="<{$smarty.const._XL_AD_SYS_LOADING}>" alt="<{$smarty.const._XL_AD_SYS_LOADING}>"><img
                            class="cursorpointer tooltip" style="cursor:pointer;" id="sml<{$candy.id}>"
                            onClick="system_setStatus( { op: 'publish', xca_id: <{$candy.id}> }, 'sml<{$candy.id}>', 'index.php' )"
                            src="<{if $candy.active}><{xooslaIcons 16/icon-16-yes.png}><{else}><{xooslaIcons 16/icon-16-no.png}><{/if}>"
                            alt="<{if $candy.active}><{$smarty.const._XL_AD_SYS_TURNOFF}><{else}><{$smarty.const._XL_AD_SYS_TURNON}><{/if}>"
                            title="<{if $candy.active}><{$smarty.const._XL_AD_SYS_TURNOFF}><{else}><{$smarty.const._XL_AD_SYS_TURNON}><{/if}>">
                </td>
                <td><{$candy.weight}></td>
                <td><{$candy.checkbox}></td>
            </tr>
            <{foreachelse}>
            <tr>
                <td class='even' class='center;' colspan='7'><{$smarty.const._XL_AD_PDN_NORECORDS}></td>
            </tr>
        <{/foreach}>
        </tbody>
        <tr class="foot" style="text-align: center;">
            <td colspan="8"><{if $navigation.links}><{$navigation.links}><{else}>&nbsp;<{/if}></td>
        </tr>
    </table>
    <{if $navigation}><{$navigation.records}><{/if}>
    <!--<{includeq file="$dirpath/xoosla_legend.tpl"}>-->
    <{includeq file="$dirpath/xoosla_footer.tpl"}>
    <input type="hidden" id="op" name="op" value="display">
    <input type="hidden" id="start" name="start" value="<{$start}>">
    <input type="hidden" name="boxchecked" value="0">
    <{$securityToken}>
</form>
