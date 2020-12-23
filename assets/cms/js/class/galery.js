class Galery {
    constructor(galery) {
        this['@id'] = galery['@id'];
        this['@type'] = galery['@type'];
        this.id = galery.id;
        this.title = galery.title;
        this.creatAt = galery.creatAt;
        this.file = galery.file;
        let r = this.creatAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" data-id="' + this.id + '" type="checkbox"/>',
            tdCheckbox = '<td>' + checkbox + '</td>',
            tdTitle = '<td>' + this.title + '</td>',
            tdCreatAt = '<td>' + this.date + '</td>',
            btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
            btnEnable = '<button type="button" class="btn btn-outline-dark mr-3 mt-0 mb-0" data-toggle="modal" data-target="#I' + this.id + '"> <i class="fa fa-eye" aria-hidden="true"></i> </button>';
        return '<tr id="' + this.id + '">' + tdCheckbox + tdTitle + tdCreatAt + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + btnEnable + '</div> </td></tr>';
    }
    showTagm() {
        return '<div class="modal fade" id="I' + this.id + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">  <div class="modal-dialog modal-dialog-centered" role="document">  <img class="img-fluid" src="' + $("body").data("apiDomainName") + '/media/' + this.file.filePath + '" alt=""/></div> </div>';
    }
    showTagg() {
        let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" data-id="' + this.id + '" type="checkbox"/>',
        tdCheckbox = checkbox,
        tdTitle = this.title ,
        tdCreatAt = this.date,
        btnDelete = '<button type="button" class="btn btn-link text-danger p-0 m-0 js-delete" data-id="' + this.id + '"><i class="fa fa-trash"></i></button>',
        btnEnable = '<button type="button" class="btn btn-link  p-0 m-0" data-toggle="modal" data-target="#I' + this.id + '"> <i class="fa fa-eye" aria-hidden="true"></i> </button>';
        console.log('ok5');
        return '<div class="col-lg-3" id="' + this.id + '">\n' +
            '                    <ul class="list-unstyled">\n' +
            '                        <li>\n' +
            '                            <ul class="list-inline d-flex">\n' +
            '                                <li class="list-inline-item">\n' +
            '                                    <img src="' + $("body").data("apiDomainName") + '/media/' + this.file.filePath + '" alt="Image"\n' +
            '                                         class="img-thumbnail"/>\n' +
            '                                </li>\n' +
            '                                <li class="list-inline-item">\n' + tdCheckbox +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                        </li>\n' +
            '                        <li>\n' +
            '                            <ul class="list-inline">\n' +
            '                                <li class="list-inline-item">\n' +
            '                                    <ul class="list-unstyled">\n' +
            '                                        <li>\n' + tdTitle + '\n' +
            '                                        </li>\n' +
            '                                        <li>\n' + tdCreatAt + '\n' +
            '                                        </li>\n' +
            '                                    </ul>\n' +
            '                                </li>\n' +
            '                                <li class="list-inline-item">\n' + btnDelete +
            '                                </li>\n' +
            '                                <li class="list-inline-item">\n' + btnEnable +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                        </li>\n' +
            '                    </ul>\n' +
            '                </div>';
    }
}
