class SubMenuList {
    constructor(container, parent, parentId) {
        this.container = $(container);
        this.parent = parent;
        this.parentId = parentId;
    }
    #api = new Api(($('body').data('apiDomainName') + '/api/menus/'));

    async getSubMenuList() {
        try {
            let data = await this.#api.getItem(this.parentId);
            console.log(data);
            if ((!Array.isArray(data.menus)) || (data.menus.length === 0))
                this.container.append('<tr><td colspan="5" class="text-center">Aucun élément</td></tr>');
            else
                data.menus.map((menu) => {
                    this.container.append((new SubMenu(menu)).showTag());
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
        $('.js-delete').click('click', {api: this.#api}, (e) => {
            (async function () {
                try {
                    await e.data.api.delete($(e.currentTarget).data('id'));
                    $('#' + $(e.currentTarget).data('slug')).remove();
                } catch (error) {
                    console.log(error);
                }
            }());
        });
        $('.js-edit').on('click', (e) => {
            $('input[name=title]').val($(e.currentTarget).data('title'));
            $('input[name=id]').val($(e.currentTarget).data('id'));
        });
        $(".js-checkbox").change(function () {
            if (this.checked)
                $('.js-delete-checked').removeClass('disabled');
            else if ($(':checked').length === 0)
                $('.js-delete-checked').addClass('disabled');
        });
    }
}