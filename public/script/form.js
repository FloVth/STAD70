window.addEventListener("load", function(event){
    
    const contactForm = document.querySelector('form')
    const success = document.querySelector('.success')
    const fail = document.querySelector('.notSend')
    const send = document.querySelector('.send')
    const checkData = document.querySelector('.checkData')
    const checkbox = document.querySelector('#check')
    const prenom = document.querySelector('#prenom')
    const borderPrenom = prenom.parentNode
    const phone = document.querySelector('#phone')
    const borderPhone = phone.parentNode
    const email = document.querySelector('#email')
    const borderEmail = email.parentNode
    const sujet = document.querySelector('#sujet')
    const borderSujet = sujet.parentNode
    const message = document.querySelector('#message')
    const borderMessage = message.parentNode
    const nom = document.querySelector('#nom')
    const borderNom = nom.parentNode
    const societe = document.querySelector('#societe')
    const msg = document.querySelector('#msg')
    let valuePhone = ""
    let valueEmail = ""

    send.addEventListener('click',(e)=> {
        e.preventDefault()
        sendForm(e)
    })
    const sendForm = async (event) => {
            if(checkbox.checked == false){
                checkData.classList.add("borderRed")
                checkData.addEventListener("change", ()=>{
                    checkData.classList.remove("borderRed")
                })
            }
            if (prenom.value == ""){
                borderPrenom.classList.add("backgroundRed")
                borderPrenom.addEventListener("chnage", () => {
                    borderPrenom.classList.remove("backgroundRed")
                })
            }
            if (nom.value == ""){
                borderNom.classList.add("backgroundRed")
                borderNom.addEventListener("change",()=>{
                    borderNom.classList.remove("backgroundRed")
                })
            }
            if (!phone.value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)){
                borderPhone.classList.add("backgroundRed")
                borderPhone.addEventListener("change",()=>{
                    borderPhone.classList.remove("backgroundRed")
                })
            }
            if (!email.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
                borderEmail.classList.add("backgroundRed")
                borderEmail.addEventListener("change",()=>{
                    borderEmail.classList.remove("backgroundRed")
                })
            }
            if (sujet.value == ""){
                borderSujet.classList.add("backgroundRed")
                borderSujet.addEventListener("change",()=>{
                    borderSujet.classList.remove("backgroundRed")
                })
            }
            if (message.value == ""){
                borderMessage.classList.add("backgroundRed")
                borderMessage.addEventListener("change",()=>{
                    borderMessage.classList.remove("backgroundRed")
                })
            }
            if(checkbox.checked && prenom.value!="" && nom.value!="" && sujet.value!="" && message.value!="" && phone.value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im) && email.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
                const form = new FormData()
                form.append("firstName", prenom.value)
                form.append("name", nom.value)
                if(societe.value != ""){
                    form.append("company", societe.value)
                }
                else{
                    form.append("company", "")
                }
                form.append("phone", phone.value)
                form.append("email", email.value)
                form.append("subject", sujet.value)
                form.append ("message", message.value)
                form.append("msg", msg.value)
                const response = await fetch("http://dev-stad/mail",{ method: "POST", body: form })
                    .then(res =>res.json())
                    .then(data=>{
                    const formSent = data.response == "yes"
                    if(formSent){
                            showSuccessMessage()
                    }else{
                        showFailedMessage()
                    }
                })
                console.log("reponse", response)
            }
        }
    const testBlurPrenom = ()=>{
        if (prenom.value == ""){
            borderPrenom.classList.add("backgroundRed")
            prenom.value = "Votre prénom ne peut pas être vide"
        }
    }
    const onChangePrenom = () => {
        if (borderPrenom.classList.contains('backgroundRed')){
            if(prenom.value != ""){
                borderPrenom.classList.remove('backgroundRed')
            }
        }
    }
    const selectPrenom = () => {
        if (prenom.value == "Votre prénom ne peut pas être vide"){
            prenom.value=""
        }
    }
    const testBlurNom = () => {
        if (nom.value == ""){
            borderNom.classList.add("backgroundRed")
            nom.value = "Votre nom ne peut pas être vide"
        }
    }
    const onChangeNom = () => {
        if (borderNom.classList.contains('backgroundRed')){
            if(nom.value != ""){
                borderNom.classList.remove('backgroundRed')
            }
        }
    }
    const selectNom = () => {
        if (nom.value == "Votre nom ne peut pas être vide"){
            nom.value=""
        }
    }
    const testBlurPhone = ( ) =>{
        if (phone.value.length == 10){
            if(!phone.value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)){
                borderPhone.classList.add("backgroundRed")
                valuePhone = phone.value
                phone.value = "Votre numéro de téléphone ne doit être composé que de nombre"
            }
        }
        else{
            borderPhone.classList.add("backgroundRed")
            valuePhone = phone.value
            phone.value = "Votre numéro de téléphone n'est pas de la bonne longueur"
        }
    }
    const onChangePhone = ( ) => {
        if (borderPhone.classList.contains('backgroundRed')){
            if(phone.value.length == 10){
                if(phone.value.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)){
                    borderPhone.classList.remove("backgroundRed")
                }
            }
        }
    }
    const selectPhone = ()=>{
        if(phone.value == "Votre numéro de téléphone ne doit être composé que de nombre"){
            phone.value = valuePhone
        }
        else if(phone.value == "Votre numéro de téléphone n'est pas de la bonne longueur"){
            phone.value = valuePhone
        }
    } 
    const testBlurEmail = () => {
        if(!email.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
            borderEmail.classList.add("backgroundRed")
            valueEmail = email.value
            email.value="Votre email n'est pas bonne"
        }
    }
    const onChangeEmail = () => {
        if (borderEmail.classList.contains('backgroundRed')){
            if (email.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
                borderEmail.classList.remove("backgroundRed")
            }
        }
    }
    const selectEmail = () => {
        if (email.value == "Votre email n'est pas bonne"){
            email.value = valueEmail
        }
    }
    const testBlurSujet = ()=>{
        if (sujet.value == ""){
            borderSujet.classList.add("backgroundRed")
            sujet.value = "Votre sujet ne peut pas être vide"
        }
    }
    const onChangeSujet = () => {
        if (borderSujet.classList.contains('backgroundRed')){
            if(sujet.value != ""){
                borderSujet.classList.remove('backgroundRed')
            }
        }
    }
    const selectSujet = () => {
        if (sujet.value == "Votre sujet ne peut pas être vide"){
            sujet.value=""
        }
    }
    const testBlurMessage = ()=>{
        if (message.value == ""){
            borderMessage.classList.add("backgroundRed")
            message.value = "Votre message ne peut pas être vide"
        }
    }
    const onChangeMessage = () => {
        if (borderMessage.classList.contains('backgroundRed')){
            if(message.value != ""){
                borderMessage.classList.remove('backgroundRed')
            }
        }
    }
    const selectMessage = () => {
        if (message.value == "Votre message ne peut pas être vide"){
            message.value=""
        }
    }
    prenom.addEventListener("blur", ()=>testBlurPrenom())
    prenom.addEventListener("input", ()=>onChangePrenom())
    prenom.addEventListener("click", ()=>selectPrenom())
    nom.addEventListener("blur", ()=>testBlurNom())
    nom.addEventListener("input", ()=>onChangeNom())
    nom.addEventListener("click", ()=>selectNom())
    phone.addEventListener("blur", ()=>testBlurPhone())
    phone.addEventListener("input", ()=>onChangePhone())
    phone.addEventListener("click", ()=>selectPhone())
    email.addEventListener("blur", ()=>testBlurEmail())
    email.addEventListener("input", ()=>onChangeEmail())
    email.addEventListener("click", ()=>selectEmail())
    sujet.addEventListener ("blur", ()=> testBlurSujet())   
    sujet.addEventListener ("input", ()=> onChangeSujet())
    sujet.addEventListener ("click", ()=> selectSujet())
    message.addEventListener ("blur", ()=> testBlurMessage())   
    message.addEventListener ("input", ()=> onChangeMessage())
    message.addEventListener ("click", ()=> selectMessage())
    
    
    
    const showSuccessMessage = () => {
        success.classList.add("print")
    }
    const showFailedMessage = () => {
        fail.classList.add("print")
    }
}, false)
