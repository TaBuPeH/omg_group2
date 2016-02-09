document.addEventListener("DOMContentLoaded", function(event) {


    var startButton = document.getElementById("chislo");

    startButton.addEventListener("click" , function() {

        var chisla = Array();

        while(chisla.length < 6)
        {
            var nomer = Math.round(Math.random()*46) + 1;

            if(chisla.indexOf(nomer) == -1)
            {
                chisla[chisla.length] = nomer;
                var id =chisla.length;
                document.getElementById(id).innerHTML = nomer ;
            }

        }

    });
  });
