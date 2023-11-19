function myfunction(a) {
    var tabcontent = document.getElementsByClassName("stat-table");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    document.getElementById(a).style.display="block";
}
