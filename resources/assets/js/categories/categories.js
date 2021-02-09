'use strict';

let tableName = '#categoriesTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: recordsURL,
    },
    columnDefs: [
        {
            'targets': [11],
            'orderable': false,
            'className': 'text-center',
            'width': '11%',
        },
    ],
    columns: [
        {
            data: 'category_id',
            name: 'category_id'
        },{
            data: 'category_id',
            name: 'category_id'
        },{
            data: 'name',
            name: 'name'
        },{
            data: 'name_lang',
            name: 'name_lang'
        },{
            data: 'description',
            name: 'description'
        },{
            data: 'description_lang',
            name: 'description_lang'
        },{
            data: 'icon',
            name: 'icon'
        },{
            data: 'image',
            name: 'image'
        },{
            data: 'path_blade',
            name: 'path_blade'
        },{
            data: 'link',
            name: 'link'
        },{
            data: 'active',
            name: 'active'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];

                return prepareTemplateRender('#categoriesTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Category');
});
