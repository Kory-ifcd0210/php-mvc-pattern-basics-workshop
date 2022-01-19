
var form= document.getElementById('employeeForm');

form.addEventListener('submit', function(e){
    e.preventDefault();
    e.stopPropagation();
})