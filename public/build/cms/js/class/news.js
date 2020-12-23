class News {
    constructor(news) {
        this['@id'] = news['@id'];
        this['@type'] = news['@type'];
        this.id = news.id;
        this.title = news.title;
        this.slug = news.slug;
        this.creatAt = news.creatAt;
        this.status = news.status;
        this.content = news.content;
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.slug + '" id="' + this.slug + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdTitle = '<td>' + this.title + '</td>',
            tdSlug = '<td>' + this.slug + '</td>',
            tdMenu = '<td>' + this.menuTitle + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.slug + '" data-id="' + this.id + '"><i class="fa fa-trash"></i></button>',
            btnEnable = '<button class="btn btn-outline-dark mr-3 mt-0 mb-0 js-enable ' + this.slug + '" data-id="' + this.id + '" data-status="' + this.status + '"> ' + (this.status ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i> ') + '</button>',
            btnEdit = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-edit" data-slug="' + this.slug + '" data-id="' + this.id + '" data-title="' + this.title + '"> <i class="fa fa-pencil" aria-hidden="true"></i></button>'
        ;
        return '<tr id="' + this.slug + '">' + tdCheckbox + tdTitle + '<td>01/01/2020</td>' + tdSlug + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + btnEdit + '</div> </td></tr>';
    }
}
