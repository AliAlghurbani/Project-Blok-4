<?php require 'header.php' ?>

<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post" action="verwerk_addressen.php">
            <ul class="regisul">
                <li class="regisli">
                    <label for="txtStraat"> Street </label><br>
                    <input class="txtInput" type="text" id="txtStraat" name="txtStraat" placeholder="Straat">
                </li>
                <li class="regisli">
                    <label for="txtHuisnummer"> House number </label><br>
                    <input class="txtInput" type="text" id="txtHuisnummer" name="txtHuisnummer" placeholder="House number">
                </li>
                <li class="regisli">
                    <label for="txtPostcode"> Postcode </label><br>
                    <input class="txtInput" type="text" id="txtPostcode" name="txtPostcode" placeholder="Postcode">
                </li>
                <li class="regisli">
                    <label for="txtPlaats"> Place </label><br>
                    <input class="txtInput" type="text" id="txtPlaats" name="txtPlaats" placeholder="Place">
                </li>
                <li class="regisli">
                    <label for="txtLand"> Country </label><br>
                    <input class="txtInput" type="text" id="txtLand" name="txtLand" placeholder="Country">
                </li>
                <li class="regisli">
                    <label for="telefoonnummer"> Telefone number </label><br>
                    <input class="txtInput" type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Telefone number">
                </li>
                <li class="regisli">
                    <label for="mobielnummer"> Mobile number </label><br>
                    <input class="txtInput" type="text" id="mobielnummer" name="mobielnummer" placeholder="Mobile number">
                </li>
                <li class="regisli">
                    <label for="txtNotitie"> Notitie </label><br>
                    <input class="txtInput" type="text" id="txtNotitie" name="txtNotitie" placeholder="Notitie">
                </li>
                <li class="regisli">
                    <label for="register_datum"> Register date </label><br>
                    <input class="txtInput" type="text" id="register_datum" name="register_datum" placeholder="YYYY-MM-DD">
                </li>
                <li class="regisli">
                    <button class="Btn" type="submit"> ADD ADDRESS </button>
                </li>
            </ul>
        </form>
    </div>
</main>

<?php require 'footer.php' ?>

</body>

</html>