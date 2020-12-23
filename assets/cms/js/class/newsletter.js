class Newsletter {
    constructor(message) {
        this['@id'] = message['@id'];
        this['@type'] = message['@type'];
        this.id = message.id;
        this.content = message.content;
        this.object = message.object;
        this.creatAt = message.creatAt;
        let r = this.creatAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
            let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.id + '" id="' + this.id + '" type="checkbox"/>',
                tdCheckbox = '<td>' + checkbox + '</td>',
                tdMessage = '<td>' + this.content + '</td>',
                tdObject = '<td>' + this.object + '</td>',
                tdReceiptAt = '<td>' + this.date + '</td>',
                btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>'
            ;
            return '<tr id="' + this.id + '">' + tdCheckbox + tdMessage + tdObject + tdReceiptAt + '<td><div class="btn-group btn-group-sm" role="group">' + btnDelete + '</div> </td></tr>';
    }
}
