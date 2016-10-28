
myApp.usuarioViewModel = function(){
    
    var self = this;
    var proxy = new proxyUrl();
    
    self.mUsuario = new mUsuario();
    
    self.validarUsurio= function(){

        $.ajax({
            type: 'POST',
            url: 'http://localhost/srvlectura/usuario/validar',//proxy.svcUsuario + 'validar',
            dataType: 'json',
            contentType: 'application/json',
            beforeSend: function () {
                //$("#loadingTx").html("Cargando datos, espere un momento por favor...");
            },
            data:ko.toJSON({
                "nomUsuario":"bestrada",
                "clave":"123"
             }),
            success:function(response){
                alert('1')
                console.log(response);
            },
            error:function(response){
                console.log(response);
            },
            complete:function(){
                
            }
            
        });
    };
    
};

var viewModel;
$(function () {
    viewModel = new myApp.usuarioViewModel();
    ko.applyBindings(viewModel);
});