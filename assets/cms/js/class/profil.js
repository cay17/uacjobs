class Profil {
    constructor(profil) {
        this['@id'] = profil['@id'];
        this['@type'] = profil['@type'];
        this.id = profil.id;
        this.name = profil.name;
        this.roles = profil.roles;
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" data-id="' + this.id + '" data-id="' + this.id + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdName = '<td colspan="3">' + this.name + '</td>';
        let tdRole = '<td>';
        for(let elt in this.roles){
           if(this.roles[elt].role === "ROLE_EDIT_ARTICLE")
               tdRole+="Gestion des articles<br/>";
           if(this.roles[elt].role === "ROLE_EDIT_MENU")
               tdRole+="Gestion des menus<br/>";
           if(this.roles[elt].role === "ROLE_EDIT_USERS")
               tdRole+="Gestion des utilisateurs<br/>";
           if(this.roles[elt].role === "ROLE_EDIT_GALERIE")
               tdRole+="Gestion de la galerie <br/>";
           if(this.roles[elt].role === "ROLE_EDIT_MESSAGE")
               tdRole+="Gestion de la messagerie";

        }
        tdRole += '</td>';
           let btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-id="' + this.id + '"><i class="fa fa-trash"></i></button>',
            btnEdit = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-edit" data-id="' + this.id + '"><i class="fa fa-pencil" aria-hidden="true"></i></button>'
            ;
        return '<tr id="' + this.id + '">' + tdCheckbox + tdName + tdRole + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEdit + '</div> </td></tr>';
    }
}
