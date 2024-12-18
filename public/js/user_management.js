
function init()
{
    var user_trs = document.querySelectorAll('.user_tr');
    var order_by_select = document.getElementById('order_by_select');
    var user_list_tbody = document.getElementById('user_list_tbody');
    sortTableRows(user_trs,order_by_select,user_list_tbody)
}


function sortByCurrency(row_list, colIndex)
{
    row_list.sort((a,b)=>{
        return parseInt(b.children[colIndex].textContent.replaceAll(',',''))- parseInt(a.children[colIndex].textContent.replaceAll(',',''))
    })
}

function sortByText(row_list,colIndex)
{
    row_list.sort((a,b)=>{
        if(b.children[colIndex].textContent < a.children[colIndex].textContent) return 1;
        else if(b.children[colIndex].textContent > a.children[colIndex].textContent) return -1;
        else return 0;
    })
}

function sortTableRows(user_trs,order_by_select,user_list_tbody)
{
    var row_list = [];

    user_trs.forEach((row)=>{
        row_list.push(row);
    })
    
    if(order_by_select.selectedIndex == 0)
    {
        //Sort by star
        var colIndex = 5;
        sortByCurrency(row_list,colIndex)
    }
    else if(order_by_select.selectedIndex == 1)
    {
        //Sort by sun
        var colIndex = 6;
        sortByCurrency(row_list,colIndex)
    }
    else if(order_by_select.selectedIndex == 2)
    {
        //Sort by full name
        var colIndex = 1;
        
    }
    else if(order_by_select.selectedIndex == 3)
    {
        //Sort by email
        var colIndex = 2;
        sortByText(row_list,colIndex);
    }
    else if(order_by_select.selectedIndex == 4)
    {
        //Sort by username
        var colIndex = 3;
        sortByText(row_list,colIndex);
    }
    
    
    user_list_tbody.innerHTML = "";
    row_list.forEach((row)=>{
        
        user_list_tbody.append(row);
    })
}

function setListeners()
{
    var search_field = document.getElementById('search_field');
    var search_field_select = document.getElementById('search_field_select');
    var user_list_tbody = document.getElementById('user_list_tbody');
    var user_trs = document.querySelectorAll('.user_tr');
    var order_by_select = document.getElementById('order_by_select');


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

    order_by_select.addEventListener('change',()=>{
        sortTableRows(user_trs,order_by_select,user_list_tbody)
    })
}
init();
setListeners();
