function change_statue(mail, element) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            var response = xmlhttp.responseText;
            // Handle the response from the PHP script here
            console.log(response);

            // Update the link text
            element.innerHTML = "Envoyé";

            // Remove the href attribute
            element.removeAttribute("href");
            element.style.pointerEvents = "none";
            element.style.cursor = "default";
        }
    };
    xmlhttp.open("GET", "/../Connectini/requestpro.php?email=" + encodeURIComponent(mail), true);
    // Replace "requestpro.php" with the correct path to your PHP script

    xmlhttp.send();
}
