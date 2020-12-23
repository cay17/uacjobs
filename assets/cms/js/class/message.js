class Message {
    constructor(message) {
        this['@id'] = message['@id'];
        this['@type'] = message['@type'];
        this.id = message.id;
        this.name = message.name;
        this.object = message.object;
        this.receiptAt = message.receiptAt;
        this.message = message.message;
        this.reponse = message.reponse;
        let r = this.receiptAt.split('T');
        this.date= r[0] + ' à ' + r[1].split('+')[0];
    }

    showTag() {
        if (typeof(this.name) !== 'undefined') {
            let reponse = '';
            let classTr = '';
            let checkbox = '<input class="form-check-input mt-1 ml-1 js-checkbox" name="' + this.id + '" id="' + this.id + '" type="checkbox"/>',
                tdCheckbox = '<td>' + checkbox + '</td>',
                tdName = '<td>' + this.name + '</td>',
                tdMessage = '<td>' + this.message + '</td>',
                tdObject = '<td>' + this.object + '</td>',
                tdReceiptAt = '<td>' + this.date + '</td>',
                btnDelete = '<button type="button" class="btn btn-outline-danger mr-3 mt-0 mb-0 js-delete" data-id="' + this.id + '"><i class="fa fa-trash-o"></i></button>',
                btnResponse = '<button class="btn btn-outline-primary mr-3 mt-0 mb-0 js-response" data-id="' + this.id + '"><i class="fa fa-mail-reply"></i></button>'
            ;
            if (typeof (this.reponse) !== 'undefined') {
                let r1 = this.reponse.receiptAt.split('T');
                let date= r1[0] + ' à ' + r1[1].split('+')[0];
                let tdMessageR = '<td>' + this.reponse.message + '</td>',
                    tdReceiptAtR = '<td>' + date + '</td>';
                classTr = 'class="table-success" data-toggle="collapse" href="#t' + this.reponse.id + '" role="button" aria-expanded="false" aria-controls="collapseExample"';
                reponse = '<tr id="t' + this.reponse.id + '" class="collapse" ><td>-</td><td>-</td>' + tdMessageR + '<td>-</td>' + tdReceiptAtR + '<td>-</td></tr>';
            }
            return '<tr id="' + this.id + '" ' + classTr + '>' + tdCheckbox + tdName + tdMessage + tdObject + tdReceiptAt + '<td><div class="btn-group btn-group-sm" role="group">' + btnResponse + btnDelete + '</div> </td></tr>' + reponse;
        }
    }
}
