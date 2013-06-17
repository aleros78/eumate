{* Smarty *}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <title>Portal Home</title>
    {include file='header_tag.tpl'}
</head>
<body>
<div id="top_header">
    {include file='header.tpl'}
</div>
<div id="wrapper">
    <div id="box">
        <div id="main">
            <div id="left_cl">
                <div id="top"></div>
                <div class="content">
                    {renderAction controller=Posto action=descrizione}
                    {content index=0}
                </div>
            </div>
            <div id="right_cl">
                {renderAction controller=Ajax action=messaggi}
                {renderAction controller=Messaggi action=formMessaggi}
            </div>
            <div class="clearer"></div>
        </div>
    </div>
    <div class="push_footer"></div>
</div>
<div id="bottom_footer">
    {include file='footer.tpl'}
</div>
</body>
</html>