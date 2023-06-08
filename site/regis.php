<?php require 'header.php' ?>

<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post" action="verwerk_regis.php">
            <ul class="regisul">
                <li class="regisli">
                    <label for="txtUsername">Username</label><br>
                    <input type="text" id="txtUsername" name="txtUsername" placeholder="Username" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtFirstname">Firstname</label><br>
                    <input type="text" id="txtFirstname" name="txtFirstname" placeholder="Firstname" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtPrefixes">Prefixes</label><br>
                    <input type="text" id="txtPrefixes" name="txtPrefixes" placeholder="Prefixes" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtLastname">Lastname</label><br>
                    <input type="text" id="txtLastname" name="txtLastname" placeholder="Lastname">
                </li>
                <li class="regisli">
                    <label for="txtEmail">Email</label><br>
                    <input type="text" id="txtEmail" name="txtEmail" placeholder="Email" autofocus>
                </li>
                <li class="regisli">
                    <label for="txtPassword">Password</label><br>
                    <input type="text" id="txtPassword" name="txtPassword" placeholder="Password">
                </li>
                <li class="regisli">
                    <label for="txtGeslacht"> Geslacht </label><br>
                    <input type="text" id="txtGeslacht" name="txtGeslacht" placeholder="geslacht">
                </li>
                <li class="regisli">
                    <label for="txtGeslacht"> Geslacht </label><br>
                    <select id="txtGeslacht" name="txtGeslacht">
                        <option value="manager">Manager</option>
                        <option value="regular">Regular</option>
                        <option value="admin">Admin</option>
                    </select>
                </li>
                <li class="regisli">
                    <button type="submit"> RIGESTER </button>
                </li>
            </ul>
        </form>
    </div>
</main>

<?php require 'footer.php' ?>

</body>

</html>