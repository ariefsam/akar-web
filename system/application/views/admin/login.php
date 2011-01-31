<html>
    <head>
        <base href="<?php echo base_url()?>" />
        <title><?php echo $judul?></title>
    </head>
        <form action="admin/login/submit" method="post">
            Username: <input type="text" name="username" /><br />
            Password: <input type="password" name="password" /><br />
            <input type="submit" value="Login" name="submit" />
        </form>
</html>