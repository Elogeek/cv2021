
<button type="submit" id="btnConnect"> <i class="fas fa-user"></i></button>


<div id="connect">
    <div id="myConnect">
        <form action="/php/connect.php" method="get">
            <div>
                <input type="text" name="name" placeholder="Username">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="connexion">
            </div>
        </form>
        <form action="/php/register.php" method="post">
            <div>
                <input type="text" name="name" placeholder="Username">
            </div>
            <div>
                <input type="password" name="password" id="pass" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="inscription">
            </div>
        </form>
    </div>
</div>