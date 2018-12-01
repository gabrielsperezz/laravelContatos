(function ($, contatoModulo,genericIzitoastMenssage) {

    $(document).ready(function () {

        var contatoTable = $("#table_contatos").DataTable({
            processing : true,
            paging : true,
            lengthChange : true,
            searching : true,
            ordering : false,
            info : true,
            responsive : true,
            autoWidth : false,
            scrollCollapse : true,
            language : language_datatable
        });

        $(".remover").click(function (e) {
            var id = $(this).data('id-contato');
            contatoModulo.deletecontato(id,function (data) {
                genericIzitoastMenssage.showConfirmMenssage(data.msg,function () {
                    window.location = "/contatos/busca";
                });
            },function (error) {
                genericIzitoastMenssage.showErrorMenssage(error);
            })
        });



    });

})(jQuery, contatoModulo,genericIzitoastMenssage);