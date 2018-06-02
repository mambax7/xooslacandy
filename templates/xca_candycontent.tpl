<{include file="$dirpath/xoosla_header.tpl"}>
<form action="index.php" method="post" name="adminform" id="adminform">
    <{securityToken}><{*//mb*}>
    <{include file="$dirpath/xoosla_menu.tpl"}>
    <{include file="$dirpath/xoosla_intro.tpl"}>
    <{if $content}>
        <{$content}>
    <{/if}>
    <input type="hidden" id="op" name="op" value="display">
    <{include file="$dirpath/xoosla_footer.tpl"}>
</form>
