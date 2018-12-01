var contatoView = (function ($, genericIzitoastMenssage, genericErrorHandlerModulo) {

    var p;
    var $this;
    var $form = $("#form_contato");
    var table = $("#table_contato_telefones");
    var $tableInstance;

    return p = {
        init : function () {
            $this = this;
            $this.initTableContato();
        },
        initTableContato : function(){
            $tableInstance = table.DataTable({
                processing: true,
                paging: true,
                lengthChange: true,
                serverSide: false,
                searching: true,
                ordering: false,
                info: true,
                responsive: true,
                autoWidth: false,
                scrollCollapse: true,
                language: language_datatable,
                ajax: "/contatos/"+idContato+"/telefones",
                sDom: '<"row" <"col col-md-6 text-left" i> <"col col-md-6 text-right" l>> <"row" <"col col-md-12" tr>> <"row" <"col col-md-12 text-right" p>>',
                "fnCreatedRow": function (nRow, aData, iDataIndex) {
                    $(nRow).attr('id', aData[0]);
                }
            });
        },
        extractContatoView : function () {
            return {
                id : $("#id_contato").val(),
                nome : $("#contato_nome").val(),
                link_facebook : $("#contato_link_facebook").val(),
                email : $("#contato_email").val(),
                link_linkedin : $("#contato_link_linkedin").val(),
                _token : $("#token").val()
            };
        },

        extractContatoTelefoneView : function () {
            return {
                id : $("#id_telefone").val(),
                id_contato : $("#id_contato").val(),
                numero : $("#telefone_numero").val(),
                id_tipo_telefone: $("#telefone_tipo").val(),
                _token : $("#token").val()
            };
        },
        clearFormContatoTelefone : function(){
            $("#telefone_numero").val("");
            $("#id_telefone").val("0");
        },
        buttonLoading : function (btn) {
            btn.button('loading');
        },
        buttonReset : function (btn) {
            btn.button('reset');
        },
        saveContatoSucesso : function (data) {
            genericErrorHandlerModulo.clearError($form);
            genericIzitoastMenssage.showConfirmMenssage(data.msg,function () {
                window.location = "/contatos/form/"+ data.contato.id;
            });
        },
        saveContatoErro : function (error) {
            genericErrorHandlerModulo.clearError($form);
            genericErrorHandlerModulo.setError(error, $form, '#contato_');
            genericIzitoastMenssage.showErrorMenssage(error);
        },
        saveContatoTelefoneSucesso : function (data) {
            $this.clearFormContatoTelefone();
            $tableInstance.ajax.reload();
            genericIzitoastMenssage.showSuccessMenssage(data.msg);
        },
        saveContatoTelefoneErro : function (error) {
            genericIzitoastMenssage.showErrorMenssage(error);
        },
        setFormSucesso: function (data) {
            $("#telefone_numero").val(data.numero);
            $("#id_telefone").val(data.id);
            $("#telefone_tipo").val(data.id_tipo_telefone);
        },
        setFormError: function (error) {
            genericIzitoastMenssage.showErrorMenssage(error);
        }
    };
})(jQuery, genericIzitoastMenssage, genericErrorHandlerModulo);