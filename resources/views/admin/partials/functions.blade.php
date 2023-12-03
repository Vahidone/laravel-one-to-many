



<script>


    let alertMessages;

    function alertMessageTimeout() {
        setTimeout(() => {
            alertMessages = document.getElementsByClassName('alert-message');

            // Verifico se ci sono elementi con la classe alert-message
            if (alertMessages.length > 0) {

                // faccio un ciclo su tutti gli elementi con la classe alert-message e aggiungo la classe "hide"
                for (alertMessage of alertMessages) {
                    alertMessage.classList.add("hide");
                }
            }
        }, 3000);
    }

    // Chiamare la funzione
    alertMessageTimeout();




</script>
