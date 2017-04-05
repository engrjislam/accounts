<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title><?php echo $web_info['com_name'];?></title>
        <link rel="stylesheet" media="all" href="<?php echo base_url();?>asset/css/login.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body class="login">
        <div id="login">
            <div class="login_logo"><?php echo $web_info['com_name'];?> </div>
            <div class="notification" id="login_notification"> 
            <script type="text/javascript" language="JavaScript">
                // &lt;![CDATA[
                $(function(){});
                    try {
                        $(function() {
                            $('.error_highlight input:first').focus();
                        });
                    } catch (e) {
                    }
                ;
                // ]]&gt;
            </script> 
            </div>
            <form action="" method="post">
                <div id="form_52bfee3124adf" class="form"> 
                <script>
                    $(function(){
                        $(".error").delay(5000).hide(5000);
                    });
                </script>
                <?php if(isset($info)){ ?>
                    <div class="error"> 
                <?php echo $info; ?> 
                    </div>
                <?php } ?>
                <table>
                    <tbody>
                          <tr> <td colspan="2" class="value"><input type="text" placeholder="username" size="25" value="" id="user_name" name="user_name" required></td> </tr>
                          <tr> <td colspan="2" class="value"><input type="password" placeholder="password" size="25" value="" id="password" name="password" required></td> </tr>
                          <tr> <td class="actions"> <div class="actions_inner"> <input type="submit" id="Login" class="submit" value="Login" name="Login"> </div> </td> </tr>
                    </tbody>
                </table>
                <input type="hidden" value="5a6e566c62413d3d" id="forward" name="forward">
                </div>
            </form>
            <a id="forgotten_pwd" href="<?php echo base_url();?>index.php/pwd_reset">Forgot password?</a> 
        </div>
    </body>
</html>
