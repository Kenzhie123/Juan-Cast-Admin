

function bannerImageClick()
{
    var poll_banner_image_overlay = document.getElementById('poll_banner_image_overlay');
    var poll_banner_image = document.getElementById('poll_banner_image');
    const pickerOpts = {
    types: [
        {
        description: "Images",
        accept: {
            "image/*": [".png", ".gif", ".jpeg", ".jpg"],
        },
        },
    ],
    excludeAcceptAllOption: true,
    multiple: false,
    };
    poll_banner_image_overlay.addEventListener('click',async ()=>{
        [fileHandle] = await window.showOpenFilePicker(pickerOpts);
        var bannerImage = await fileHandle.getFile();
        var bannerImageURL = URL.createObjectURL(bannerImage);
        poll_banner_image.style = `background-image:url(${bannerImageURL})`;
    })
    
}

function setListeners()
{
    var poll_type_select = document.getElementById('poll_type_select');
    var limit_votes_container = document.getElementById('limit_votes_container');

    poll_type_select.addEventListener('change',()=>{
        if(poll_type_select.selectedIndex == 1)
        {
            limit_votes_container.classList.remove('hidden');
        }
        else
        {
            limit_votes_container.classList.add('hidden');
        }
    })


    var password_enabled_false = document.getElementById('password_enabled_false');
    var password_enabled_true = document.getElementById('password_enabled_true');
    var password_container = document.getElementById('password_container');

    password_enabled_false.addEventListener('click',()=>{
        if(password_enabled_false.checked)
        {
            password_container.classList.add('hidden');
        }
    })
    password_enabled_true.addEventListener('click',()=>{
        if(password_enabled_true.checked)
        {
            password_container.classList.remove('hidden');
        }
    })

    bannerImageClick();
}

setListeners();