const companyBtn = document.getElementById('companyBtn');
const studentBtn =  document.getElementById('studentBtn');
const companyForm = document.getElementById('companyForm');
const studentForm = document.getElementById('studentForm');

companyBtn.addEventListener('click', function (){
    studentForm.style.display = 'none';
    companyForm.style.display = 'block';
})

studentBtn.addEventListener('click', function (){
    studentForm.style.display = 'block';
    companyForm.style.display = 'none';
})
