var contatoModulo = (function ($) {

    var p;

    return p = {
        save : function (contato, s, e) {
            if (contato.id > 0) {
                this.update(contato, s, e);
            } else {
                this.insert(contato, s, e);
            }
        },
        insert : function (contato, s, e) {
            $.ajax({
                url : '/contatos',
                dataType : 'json',
                type : 'post',
                data : contato,
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        saveTelefone: function(telefoneContatoInfo, s, e){
            if (telefoneContatoInfo.id > 0) {
                this.updateContatoTelefone(telefoneContatoInfo, s, e);
            } else {
                this.insertContatoTelefone(telefoneContatoInfo, s, e);
            }
        },
        insertContatoTelefone : function (telefoneContatoInfo, s, e) {
            $.ajax({
                url : '/contatos/telefone',
                dataType : 'json',
                type : 'post',
                data: telefoneContatoInfo,
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        updateContatoTelefone : function (telefoneContatoInfo, s, e) {
            $.ajax({
                url : '/contatos/telefone/'+ telefoneContatoInfo.id,
                dataType : 'json',
                type : 'put',
                data: telefoneContatoInfo,
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        getContatoTelefonePorId : function (idTelefoneContato, s, e) {
            $.ajax({
                url : '/contatos/telefone/'+ idTelefoneContato,
                dataType : 'json',
                type : 'get',
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        deleteTelefoneContato : function (idTelefoneContato, s, e) {
            $.ajax({
                url : '/contatos/telefone/'+ idTelefoneContato,
                dataType : 'json',
                type : 'delete',
                data : {_token : $("#token").val()},
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        update : function (contato, s, e) {
            $.ajax({
                url : '/contatos/' + contato.id,
                dataType : 'json',
                type : 'put',
                data : contato,
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        },
        deletecontato : function (id, s, e) {
            $.ajax({
                url : '/contatos/' + id,
                dataType : 'json',
                type : 'delete',
                data : {_token : $("#token").val()},
                error : function (error) {
                    e(error);
                },
                success : function (data) {
                    s(data);
                }
            });
        }
    };


})(jQuery);
