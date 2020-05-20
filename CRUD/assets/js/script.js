//Class 8.6 DELETE CONFIRMATION MESSAGE
document.addEventListener('DOMContentLoaded',function() {
    //alert("loaded");
    var links = document.querySelectorAll(".delete");
    for (i=0;i<links.length;i++){
        links[i].addEventListener('click',function(e){
            if(!confirm("Are you sure to delete?")){
                e.preventDefault();
            }
        });
    }
});