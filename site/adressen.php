<?php require 'header.php' ?>

<main class="regismain">
    <div class="regiscontainer">
        <form class="regisform" method="post" action="verwerk_regis.php">
            <ul class="regisul">
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
                    <label for="txtNotitie"> Notitie </label><br>
                    <input type="text" id="txtNotitie" name="txtNotitie" placeholder="Notitie">
                </li>
                <li class="regisli">
                    <label for="txtDate"> Date  </label><br>
                    <input type="text" id="txtDate" name="txtDate" placeholder="Date">
                </li>
                <li class="regisli">
                    <button type="submit"> ADD ADDRESS </button>
                </li>
            </ul>
        </form>
    </div>
</main>

<?php require 'footer.php' ?>

</body>

</html>