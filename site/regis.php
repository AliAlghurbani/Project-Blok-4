<?php require 'header.php' ?>

<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post" action="verwerk_regis.php">
            <ul class="regisul">
                <li class="regisli">
                    <label for="role"> Role </label><br>
                    <select id="role" name="role" class="menuRole">
                        <option value="manager">Manager</option>
                        <option value="regular">Regular</option>
                        <option value="admin">Admin</option>
                    </select>
                </li>
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
                    <label for="txtStraat"> Street </label><br>
                    <input type="text" id="txtStraat" name="txtStraat" placeholder="Straat">
                </li>
                <li class="regisli">
                    <label for="txtHuisnummer"> House number </label><br>
                    <input type="text" id="txtHuisnummer" name="txtHuisnummer" placeholder="House number">
                </li>
                <li class="regisli">
                    <label for="txtPostcode"> Postcode </label><br>
                    <input type="text" id="txtPostcode" name="txtPostcode" placeholder="Postcode">
                </li>
                <li class="regisli">
                    <label for="txtPlaats"> Place </label><br>
                    <input type="text" id="txtPlaats" name="txtPlaats" placeholder="Place">
                </li>
                <li class="regisli">
                    <label for="txtLand"> Country </label><br>
                    <input type="text" id="txtLand" name="txtLand" placeholder="Country">
                </li>
                <li class="regisli">
                    <label for="telefoonnummer"> Telefone number </label><br>
                    <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Telefone number">
                </li>
                <li class="regisli">
                    <label for="mobielnummer"> Mobile number </label><br>
                    <input type="text" id="mobielnummer" name="mobielnummer" placeholder="Mobile number">
                </li>
                <li class="regisli">
                    <label for="txtNotitie"> Note </label><br>
                    <input type="text" id="txtNotitie" name="txtNotitie" placeholder="Note">
                </li>
                <li class="regisli">
                    <label for="register_datum"> Register date </label><br>
                    <input type="text" id="register_datum" name="register_datum" placeholder="YYYY-MM-DD">
                </li>
                <li class=" regisli">
                    <label for="aantalmensen"> Aantal mensen </label><br>
                    <input type="text" id="aantalmensen" name="aantalmensen" placeholder="Aantal mensen">
                </li>
                <li class="regisli">
                    <label for="txtAfdeling"> Afdeling </label><br>
                    <input type="text" id="txtAfdeling" name="txtAfdeling" placeholder="Afdeling number">
                </li>
                <li class="regisli">
                    <label for="indienst">Employee</label><br>
                    <input type="radio" id="employeeYes" name="indienst" value="true">
                    <label for="employeeYes">Yes</label>
                    <input type="radio" id="employeeNo" name="indienst" value="false">
                    <label for="employeeNo">No</label>
                </li>
                <li class="regisli">
                    <label for="geslacht">Gender</label><br>
                    <input type="radio" id="male" name="geslacht" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="geslacht" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="geslacht" value="other">
                    <label for="other">Other</label>
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