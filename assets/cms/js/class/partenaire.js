class Partenaire {
    constructor(article) {
        this['@id'] = article['@id'];
        this['@type'] = article['@type'];
        this.id = article.id;
        this.name = article.name;
        this.type = article.type;
        this.desc = article.description;
        this.facebook = article.facebook;
        this.linkedin = article.linkedin;
        this.twitter = article.twitter;
        this.web = article.web;
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.name + '" id="' + this.id + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdTitle = '<td>' + this.name + '</td>',
            tdSlug = '<td>' + this.type + '</td>',
            tdCategorie = '<td>' + this.desc + '</td>',
            tddate = '<td>' + this.facebook + '</td>',
            tdTwitter = '<td>' + this.twitter + '</td>',
            tdLinkedin = '<td>' + this.linkedin + '</td>',
            tdweb = '<td>' + this.web + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-slug="' + this.name + '" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEdit = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-edit" data-slug="' + this.name + '" data-id="' + this.id + '" data-title="' + this.title + '"> <i class="fa fa-pencil" aria-hidden="true"></i></button>'
        ;
        return '<tr id="' + this.id + '">' + tdCheckbox + tdTitle + tdSlug + tdCategorie + tddate + tdTwitter + tdLinkedin + tdweb + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEdit + '</div> </td></tr>';
    }
}
