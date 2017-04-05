<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
            <title><?php echo $web_info['com_name'];?></title>
            <link rel="stylesheet" media="all" href="<?php echo base_url();?>asset/css/login.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body class="login">


        <div id="login">

            <div class="login_logo"><?php echo $web_info['com_name'];?>
               
            </div>

            <div class="notification" id="login_notification">
                <script type="text/javascript" language="JavaScript">
// &lt;![CDATA[
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
                <div id="form_52bffe08678fb" class="form">
                        <script>
                        $(function(){
                            $(".error").delay(5000).hide(5000);
                        });
                        </script>
                        <?php
                        if(isset($info)){
                        ?>
                        <div class="error">
                        <?php echo $info; ?>
                        </div>
                        <?php
                         }
                        ?>
                    <table>
                        <tbody>
                            <tr>
                                <td class="section" colspan="2" style="text-align: center;"><h3>Reset Password</h3></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="value"><input type="text" required="" placeholder="username" size="30" value="" id="uname" name="uname"></td>
                            </tr>
                            <tr>
                                <td class="actions" colspan="2"><div class="actions_inner"><input type="submit" id="Submit" class="submit" value="Submit" name="Submit"></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <a id="forgotten_pwd" href="<?php echo base_url();?>index.php/login">Login Now!</a>


        </div>

    </body></html>
