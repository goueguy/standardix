let toolbarOptions = [
        ['bold','italic','underline','strike'],
        [{'header':1},{'header':2}],
        [{'list':'ordered'},{'list':'bullet'}],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'font': [] }],
        [{ 'align': [] }]];
    let change = (quilInput) =>{
        return new Quill(quilInput, {
            theme: 'snow',
            modules:{
                toolbar:toolbarOptions
            }
        });
    }
    let dossier = change("#dossier");
    let profil = change("#profil");
    let avantages = change("#avantages");
    let description = change("#description");
    function send(){
        let descriptionField = document.querySelector("#descriptionField");
        let avantagesField = document.querySelector("#avantagesField");
        let profilField = document.querySelector("#profilField");
        let dossierField = document.querySelector("#dossierField");
        descriptionField.value = description.getText();
        avantagesField.value = avantages.getText();
        profilField.value = profil.getText();
        dossierField.value = dossier.getText();
        //alert(dossierCandidature);
}
