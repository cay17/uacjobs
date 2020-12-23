class Api {
    constructor(link) {
        this.link = link;
    }

    async get(page = 1) {
        return await $.ajax({
            url: this.link + (Number.isInteger(page) ? '?page=' + page : ''),
            method: "GET",
            datatype: "json",
            contentType: 'application/json; charset=utf-8'
        })
            .done((data) => data);
    }

    async post(entity) {

        return await $.ajax({
            url: this.link,
            method: "POST",
            datatype: "json",
            data: JSON.stringify(entity),
            contentType: 'application/json; charset=utf-8'
        })
            .done((data) => data);
    }

    async delete(id) {

        return await $.ajax({
            url: this.link + id,
            method: "DELETE",
            datatype: "json",
            contentType: 'application/json; charset=utf-8'
        })

            .done((data) => data);

    }

    async getItem(id) {
        return await $.ajax({
            url: this.link + id,
            method: "GET",
            datatype: "json",
            data: JSON.stringify({}),
            contentType: 'application/json; charset=utf-8'
        })

            .done((data) => data);

    }

    async put(entity) {
        if (typeof entity.id != 'undefined')
            return await $.ajax({
                url: this.link + entity.id,
                method: "PUT",
                datatype: "json",
                data: JSON.stringify(entity),
                contentType: 'application/json; charset=utf-8'
            })

                .done((data) => data);


    }

}
