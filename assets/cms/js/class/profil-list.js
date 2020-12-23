class ProfilList {
    constructor(container) {
        this.container = $(container);
    }

    #api = new Api(($('body').data('apiDomainName') + '/api/profils/'));

    async getProfilList() {
        try {
            let data = await this.#api.get();
            if (parseInt(data['hydra:totalItems']) === 0)
                this.container.append('<tr><td colspan="4" class="text-center">Aucun élément</td></tr>');
            else
                data['hydra:member'].map((profil) => {
                        this.container.append((new Profil(profil)).showTag());
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
        $('.js-edit').on('click',{api: this.#api}, (e) => {
            $.cookie('edit_profil_id', $(e.currentTarget).data('id'));
            window.location.pathname = '/modifier-un-role';
        });

        $(".js-checkbox").change(function () {
            if (this.checked)
                $('.js-delete-checked').removeClass('disabled');
            else if ($(':checked').length === 0)
                $('.js-delete-checked').addClass('disabled');
        });
    }
}