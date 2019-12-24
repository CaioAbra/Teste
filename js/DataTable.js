var data = [
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA ",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "842748",
        "descCheck": "FUNCIONÁRIO MOTORISTA DIRETORIA",
        "ultimAlteracao": "17/09/2019"
    },
    {
        "ID": "477635",
        "descCheck": "LÍDER - 5X2 - Dn",
        "ultimAlteracao": "17/09/2019"
    }
]

$(document).ready(function () {
    $('#example').DataTable({
        "processing": true,
        "info": true,
        "stateSave": true,
        data: data,
        "columns": [
            {
                "data": function (data) {
                    return ' <td><input type="checkbox" class="checkthis" /></td>'
                }
            },
            { "data": "ID" },
            { "data": "descCheck" },
            {
                "data": function (data) {
                    return ' <td class"txt-green">ativo</td>'
                }
            },
            { "data": "ultimAlteracao" },
            {
                "data": function (data) {
                    return ' <td><i class="fas fa-chevron-right text-secondary"></i></td>'
                }
            }
        ]
    });

    // $("#example #checkall").click(function () {
    //     if ($("#example #checkall").is(':checked')) {
    //         $("#example input[type=checkbox]").each(function () {
    //             $(this).prop("checked", true);
    //         });

    //     } else {
    //         $("#example input[type=checkbox]").each(function () {
    //             $(this).prop("checked", false);
    //         });
    //     }
    // });
    // $("[data-toggle=tooltip]").tooltip();
});