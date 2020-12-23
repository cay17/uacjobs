class PodcastList {
    constructor(container) {
        this.container = $(container);
    }

    #api = new Api(($('body').data('apiDomainName') + '/api/podcasts/'));

    async getArticleList() {
        try {
            let data = await this.#api.get();
            if (parseInt(data['hydra:totalItems']) === 0)
                this.container.append('<tr><td colspan="5" class="text-center">Aucun élément</td></tr>');
            else
                data['hydra:member'].map((article) => {
                        this.container.append((new Podcast(article)).showTag());
                });
            this.addEvent();
        } catch (e) {
            console.log(e);
        }
    }

    addEvent() {
        $('.js-enable').on('click', {api: this.#api}, ((e) => {
            if ($(e.currentTarget).data('status') === true) {
                $(e.currentTarget).data('status', false);
                $(e.currentTarget).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>').attr('data-status', 'false');
                let data = {
                    id: $(e.currentTarget).data('id'),
                    status: false
                };
                (async function () {
                    try {
                        await e.data.api.put(data);
                    } catch (error) {
                        console.log(error);
                    }
                }());
            } else {
                $(e.currentTarget).data('status', true);
                $(e.currentTarget).html('<i class="fa fa-eye" aria-hidden="true"></i>').attr('data-status', 'false');
                let data = {
                    id: $(e.currentTarget).data('id'),
                    status: true
                };
                (async function () {
                    try {
                        await e.data.api.put(data);
                    } catch (error) {
                        console.log(error);
                    }
                }());
            }
        }));
        $('.js-delete').on('click', {api: this.#api}, (e) => {
            (async function () {
                try {
                    await e.data.api.delete($(e.currentTarget).data('id'));
                    $('#' + $(e.currentTarget).data('slug')).remove();
                } catch (error) {
                    console.log(error);
                }
            }());
        });
        $('.js-edit').on('click',{api: this.#api}, (e) => {
            $.cookie('edit_podcast_id', $(e.currentTarget).data('id'));
            $.cookie('edit_podcast_title', $(e.currentTarget).data('title'));
            window.location.pathname = '/backend/editer-un-podcast/';
        });

        $(".js-checkbox").change(function () {
            if (this.checked)
                $('.js-delete-checked').removeClass('disabled');
            else if ($(':checked').length === 0)
                $('.js-delete-checked').addClass('disabled');
        });
    }
}