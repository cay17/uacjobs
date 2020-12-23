class GaleryList {
    constructor(container, modal, grid) {
        this.container = $(container);
        this.modal = $(modal);
        this.grid = $(grid);
    }

    #api = new Api(($('body').data('apiDomainName') + '/api/galeries/'));

    async getGaleryList() {
        try {
            let data = await this.#api.get();
            if (parseInt(data['hydra:totalItems']) === 0)
                this.container.append('<tr><td colspan="7" class="text-center">Aucun élément</td></tr>');
            else
                data['hydra:member'].map((galery) => {
                        this.container.append((new Galery(galery)).showTag());
                        this.grid.append((new Galery(galery)).showTagg());
                        this.modal.append((new Galery(galery)).showTagm());
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
            window.location.pathname = '/message/repondre-au-message';
        });

        $(".js-checkbox").change(function () {
            if (this.checked)
                $('.js-delete-checked').removeClass('disabled');
            else if ($(':checked').length === 0)
                $('.js-delete-checked').addClass('disabled');
        });
    }
}