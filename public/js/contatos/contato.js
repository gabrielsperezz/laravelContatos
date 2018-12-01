(function ($, contatoView, contatoModulo) {

    $(document).ready(function () {

        contatoView.init();

        $("#salvar").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var btn = $(this);
            var Contato = contatoView.extractContatoView();

            contatoView.buttonLoading(btn);
            contatoModulo.save(Contato, function (data) {

                contatoView.buttonReset(btn);
                contatoView.saveContatoSucesso(data);

            }, function (error) {

                contatoView.buttonReset(btn);
                contatoView.saveContatoErro(error);

            });

        });

        $("#salvar_telefone").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var btn = $(this);

            var telefoneInfo = contatoView.extractContatoTelefoneView();

            contatoView.buttonLoading(btn);
            contatoModulo.saveTelefone( telefoneInfo,function (data) {

                contatoView.buttonReset(btn);
                contatoView.saveContatoTelefoneSucesso(data);

            }, function (error) {

                contatoView.buttonReset(btn);
                contatoView.saveContatoTelefoneErro(error);

            });

        });

        $("#table_contato_telefones").on("click", ".remover_telefone", function () {
            var id = $(this).data('id-telefone');
            contatoModulo.deleteTelefoneContato(id,function (data) {
                contatoView.saveContatoTelefoneSucesso(data);
            },function (error) {
                contatoView.saveContatoTelefoneErro(error);
            });
        });

        $("#table_contato_telefones").on("click", ".editar_telefone", function () {
            var id = $(this).data('id-telefone');
            contatoModulo.getContatoTelefonePorId(id,function (data) {
                contatoView.setFormSucesso(data);
            },function (error) {
                contatoView.setFormError(error);
            });
        });


    });

})(jQuery, contatoView, contatoModulo);