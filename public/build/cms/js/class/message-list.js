class MessageList {
    constructor(container) {
        this.container = $(container);
    }

    #api = new Api(($('body').data('apiDomainName') + '/api/messages/'));

    async getMessageList() {
        try {
            let data = await this.#api.get();
            if (parseInt(data['hydra:totalItems']) === 0)
                this.container.append('<tr><td colspan="7" class="text-center">Aucun élément</td></tr>');
            else
                data['hydra:member'].map((message) => {
                        this.container.append((new Message(message)).showTag());
                });
            this.addEvent();
        } catch (e) {
            console.log(e);
        }
    }

    addEvent() {
        $('.js-delete').on('click', {api: this.#api}, (e) => {
            (async function () {
                try {
                    await e.data.api.delete($(e.currentTarget).data('id'));
                    $('#' + $(e.currentTarget).data('id')).remove();
                } catch (error) {
                    console.log(error);
                }
            }());
        });
        $('.js-response').on('click',{api: this.#api}, (e) => {
            $.cookie('edit_message_id', $(e.currentTarget).data('id'));
            window.location.pathname = 'backend/messages/repondre-au-message';
        });

        $(".js-checkbox").change(function () {
            if (this.checked)
                $('.js-delete-checked').removeClass('disabled');
            else if ($(':checked').length === 0)
                $('.js-delete-checked').addClass('disabled');
        });
    }
}