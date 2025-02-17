const removeOption = (selectElement) => {
    let i, L = selectElement.options.length - 1;
    for (i = L; i >= 0; i--) {
        selectElement.remove(i);
    }
}
 const calApi = (url,dropDownA,dropDownB, form=null, auto_submit =false) => {
    const path = window.location.origin + url + dropDownA.value
     console.log("Api url:"+ path)
    $.ajax({
        url: path, success: function (result) {
            removeOption(dropDownB)
            let el2 = document.createElement("option")
            el2.textContent=''
            el2.setAttribute('selected','selected')
            result.forEach((e) => {
                console.log(e)
                let el = document.createElement("option")
                el.textContent = e.SectionName
                el.value = e.id

                dropDownB.append(el)

            })
            dropDownB.append(el2)

            /*now add an event-listener on DROPDOWN B to submit form on change*/
            if (form && auto_submit){
                dropDownB.addEventListener('change', () => {
                    form.submit()
                })
            }

        }
    });

}



