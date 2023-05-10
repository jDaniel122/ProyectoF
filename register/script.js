
        let result  = document.getElementById("id_estudiante");
        function display(num){
            result.value += num;
        }
        let del = ()=>{
            result.value = result.value.slice(0,-1)
        }