class User {
    constructor(article) {
        this['@id'] = article['@id'];
        this['@type'] = article['@type'];
        this.id = article.id;
        this.name = article.name;
        this.lastname = article.lastname;
        this.status = article.status;
        this.mail = article.mail;
        this.role = article.roles;
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.id + '" id="' + this.id + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdName = '<td>' + this.name + ' ' + this.lastname + '</td>',
            tdMail = '<td>' + this.mail + '</td>',
            tdRole = '<td>' + this.role[0] + '</td>',
            tdStatus = this.status?'<td class="text-success">Activé</td>':'<td class="text-danger">Désactivé</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.id + '" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEnable = '<button class="btn btn-outline-dark mr-3 mt-0 mb-0 js-enable ' + this.id + '" data-id="' + this.id + '" data-status="' + this.status + '"> ' + (this.status ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i> ') + '</button>'
           ;
        return '<tr id="' + this.id + '">' + tdCheckbox + tdName + tdMail + tdRole + tdStatus + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + '</div> </td></tr>';
    }
}
