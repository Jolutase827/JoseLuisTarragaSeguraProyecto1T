(function () {
    const iniciosesion = document.getElementById("inicioSesion");
    const inicioSesion2 = document.getElementById("inicioSesion2");
    const cancelButton = document.getElementById("close");
    const favDialog = document.getElementById("favDialog");
    if(sessionStorage.getItem("iniciosesion")=="true"){
      favDialog.showModal();
      sessionStorage.setItem("iniciosesion","false");
    }
    inicioSesion2.addEventListener("click", function () {
      favDialog.showModal();
    });
    
    iniciosesion.addEventListener("click", function () {
      favDialog.showModal();
    });

    // Form cancel button closes the dialog box
    cancelButton.addEventListener("click", function () {
      favDialog.close();
    });
  })();