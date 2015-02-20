<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php";?>">
    <div>
        <label for="email">Email: </label>
        <input type="text" nme="email"/>
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" nme="username"/>
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="text" nme="password"/>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>