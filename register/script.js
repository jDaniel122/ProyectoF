        //VALIDAR BOTONES NUMERICOS
        let result  = document.getElementById("id_estudiante");
        function display(num){
            result.value += num;
        }
        let del = ()=>{
            result.value = result.value.slice(0,-1)
        }
        //MODAL
        let cerrar= document.querySelectorAll(".close")[0];
        let abrir=  document.querySelectorAll(".cta")[0];
        let modal=  document.querySelectorAll(".modal")[0];
        let modalc= document.querySelectorAll(".modal-container")[0];


        abrir.addEventListener("click", function(e){
            e.preventDefault();
        }); 

        