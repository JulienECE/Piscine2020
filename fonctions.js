    function salutation() {
      var pseudo = prompt ("Entrez votre Pseudo, svp");
      if (pseudo == null || pseudo == ""){
        alert("Pseudo incorrect, veuillez réessayer");
      }
      else{
        var mdp = prompt ("Entrez votre mdp, svp");
        if (mdp == null || mdp == ""){
        alert("Mot de passe incorrect, veuillez réessayer");
        }
        else{
          location.href="file:///C:/Users/julie/Desktop/Piscine2020-master/Piscine2020/Home.html"
        }
      }
    }
  