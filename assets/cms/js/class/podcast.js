class Podcast {
    constructor(article) {
        this['@id'] = article['@id'];
        this['@type'] = article['@type'];
        this.id = article.id;
        this.title = article.title;
        this.lien = article.lien;
        this.creatAt = article.creatAt;
        this.status = article.status;
        let r = this.creatAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.lien + '" id="' + this.lien + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdTitle = '<td>' + this.title + '</td>',
            tdSlug = '<td>' + this.lien + '</td>',
            tddate = '<td>' + this.date + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.lien + '" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEnable = '<button class="btn btn-outline-dark mr-3 mt-0 mb-0 js-enable ' + this.lien + '" data-id="' + this.id + '" data-status="' + this.status + '"> ' + (this.status ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i> ') + '</button>',
            btnEdit = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-edit" data-slug="' + this.lien + '" data-id="' + this.id + '" data-title="' + this.title + '"> <i class="fa fa-pencil" aria-hidden="true"></i></button>'
        ;
        return '<tr id="' + this.lien + '">' + tdCheckbox + tdTitle + tddate + tdSlug + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + btnEdit + '</div> </td></tr>';
    }
}
