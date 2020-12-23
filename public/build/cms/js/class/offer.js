class Offer {
    constructor(article) {
        this['@id'] = article['@id'];
        this['@type'] = article['@type'];
        this.id = article.id;
        this.title = article.title;
        this.desc = article.description;
        this.type = article.type;
        this.link = article.linkPostuler;
        this.creatAt = article.creatAt;
        this.user = article.user;
        let r = this.creatAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.id + '" id="' + this.id + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdName = '<td>' + this.title + '</td>',
            tdDesc = '<td>' + this.desc + '</td>',
            tdDate = '<td>' + this.date + '</td>',
            tdType = '<td>' + this.type + '</td>',
            tdLink = this.link === "null"?'<td class="">Pas de lien</td>':'<td class="">' + this.link + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.id + '" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEnable = '<button class="btn btn-outline-dark mr-3 mt-0 mb-0 js-enable ' + this.id + '" data-id="' + this.id + '" data-status="' + this.status + '"> ' + (this.status ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i> ') + '</button>'
           ;
        return '<tr id="' + this.id + '">' + tdCheckbox + tdName + tdDesc + tdType + tdDate + tdLink + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + '</div> </td></tr>';
    }
}
