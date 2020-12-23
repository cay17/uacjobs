class Article {
    constructor(article) {
        this['@id'] = article['@id'];
        this['@type'] = article['@type'];
        this.id = article.id;
        this.title = article.title;
        this.slug = article.slug;
        this.creatAt = article.creatAt;
        this.status = article.status;
        this.content = article.content;
        this.type = article.type;
        let r = this.creatAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.slug + '" id="' + this.slug + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdTitle = '<td>' + this.title + '</td>',
            tdSlug = '<td>' + this.slug + '</td>',
            tdMenu = '<td>' + this.type + '</td>',
            tddate = '<td>' + this.date + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.slug + '" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEnable = '<button class="btn btn-outline-dark mr-3 mt-0 mb-0 js-enable ' + this.slug + '" data-id="' + this.id + '" data-status="' + this.status + '"> ' + (this.status ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i> ') + '</button>',
            btnEdit = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-edit" data-slug="' + this.slug + '" data-id="' + this.id + '" data-title="' + this.title + '"> <i class="fa fa-pencil" aria-hidden="true"></i></button>'
        ;
        return '<tr id="' + this.slug + '" class="'+ this.type +'">' + tdCheckbox + tdTitle + tddate + tdSlug + tdMenu + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + btnEdit + '</div> </td></tr>';
    }
}
