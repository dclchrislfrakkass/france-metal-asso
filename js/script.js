var checkbox = document.querySelectorAll("[type=checkbox]");

var checkboxlenght = checkbox.length;

for (i = 0; i<checkboxlenght; i++){
    checkbox[i].addEventListener("change", function (){
        if (document.querySelectorAll(":checked").length > 3){
            this.checked = false;
            alert('3 votes maximum svp');
        }  
    }, false);
};