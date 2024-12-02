function setListeners()
{
    var search_field = document.getElementById('search_field');
    var search_field_select = document.getElementById('search_field_select');
    var user_trs = document.querySelectorAll('.user_tr');

    search_field.addEventListener('keydown',()=>{
        user_trs.forEach((user_tr)=>{
            if(!user_tr.children[search_field_select.selectedIndex].textContent.includes(search_field.value))
            {
                user_tr.classList.add('hidden');
            }
            else
            {
                user_tr.classList.remove('hidden');
            }
        })
    })

    search_field.addEventListener('blur',()=>{
        user_trs.forEach((user_tr)=>{
            if(!user_tr.children[search_field_select.selectedIndex].textContent.includes(search_field.value))
            {
                user_tr.classList.add('hidden');
            }
            else
            {
                user_tr.classList.remove('hidden');
            }
        })
    })
}

setListeners();