

    $(".contacts-links a").click(function() {
        let activeSearchPositon = $(this).text();
        //console.log(activeSearchPositon);

        let item = document.getElementsByClassName("listOfTeams");
        Array.from(item).forEach(function (ite){
            let title = ite.firstElementChild.textContent;
            title.toLowerCase();
            activeSearchPositon.toLowerCase();
            if(title.indexOf(activeSearchPositon) != -1){
                title = ite.parentElement.parentElement.parentElement.parentElement.style.display = "block";
            }else if(activeSearchPositon == "Alle Anzeigen"){
                //not the best solution, try to fix it
                title = ite.parentElement.parentElement.parentElement.parentElement.style.display = "block";
            } else {
                title = ite.parentElement.parentElement.parentElement.parentElement.style.display = "none";
            }
        })
    });


