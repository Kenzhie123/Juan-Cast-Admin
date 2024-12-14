function setListeners()
{
    var environment_select_form = document.getElementById('environment_select_form');
    var environment_select = document.getElementById('environment_select');
    environment_select.addEventListener('change',()=>{
        if(environment_select.selectedIndex == 0)
        {
            environment_select.classList.remove('environment_select_dev')
            environment_select.classList.add('environment_select_prod');
        }
        else
        {
            environment_select.classList.remove('environment_select_prod')
            environment_select.classList.add('environment_select_dev');
        }

        environment_select_form.submit()
        
    })
}

setListeners();