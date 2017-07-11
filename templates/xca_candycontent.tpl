<{includeq file="$dirpath/xoosla_header.tpl"}>
<form action="index.php" method="post" name="adminform" id="adminform">
    <{securityToken}><{*//mb*}>
    <{includeq file="$dirpath/xoosla_menu.tpl"}>
    <{includeq file="$dirpath/xoosla_intro.tpl"}>
    <{if $content}>
        <{$content}>
    <{/if}>
    <input type="hidden" id="op" name="op" value="display"/>
    <{includeq file="$dirpath/xoosla_footer.tpl"}>
</form>
