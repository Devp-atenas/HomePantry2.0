// Funciones.js - 23ago21 - 25ago21
function Reset() {
    $("#cargando").css("display", "none");
    $("#mainMoneyMarket").css("display", "none");
    $("#totalRegistros").html("");
    $('.selectpicker').selectpicker('deselectAll');
    $('.selectpicker').selectpicker('refresh');
    $('#cboMoneda').selectpicker('val', ['2']);
    $('#cboMoneda').selectpicker('refresh');
    $('#cboFiltros').selectpicker('val', ['0']);
}
//
$(function() {
    //debugger;
    $("#cboSemanas").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        Limpieza();
        fillRet();
    });
    $("#cboRetailers").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        Limpieza();
        fillEtd();
    });
    $("#cboEstados").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idEtd = $('#cboEstados').val();
        if (idEtd == null || idEtd == "" || idEtd.length == 0 || idEtd == undefined) {
            return false;
        }
        Limpieza();
        fillTnd();
    });
    $("#cboTiendas").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd == null || idTnd == "" || idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        Limpieza();
        fillCat();
    });
    $("#cboCategorias").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd == null || idTnd == "" || idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat == null || idCat == "" || idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        Limpieza();
        fillFab();
    });
    $("#cboFabricantes").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd == null || idTnd == "" || idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat == null || idCat == "" || idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        let idFab = $('#cboCategorias').val();
        if (idFab == null || idFab == "" || idFab.Length == 0 || idFab == undefined) {
            return false;
        }
        Limpieza();
        fillMar();
    });
    $("#cboMarcas").on("hide.bs.select", function(e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem == null || idSem == "" || idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet == null || idRet == "" || idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd == null || idTnd == "" || idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat == null || idCat == "" || idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        let idFab = $('#cboCategorias').val();
        if (idFab == null || idFab == "" || idFab.Length == 0 || idFab == undefined) {
            return false;
        }
        let idMar = $('#cboCategorias').val();
        if (idMar == null || idMar == "" || idMar.Length == 0 || idMar == undefined) {
            return false;
        }
        Limpieza();
        fillCod();
    });

});
//
function Limpieza() {
    $("#mainMoneyMarket").css("display", "none");
}
//
function reemplazaTodo(text, busca, reemplaza) {
    while (text.toString().indexOf(busca) != -1)
        text = text.toString().replace(busca, reemplaza);
    return text;
}
//
function createVar(){
    sessionStorage.setItem('idSem', 0);
    sessionStorage.setItem('idRet', 0);
    sessionStorage.setItem('idEtd', 0);
    sessionStorage.setItem('idTnd', 0);
    sessionStorage.setItem('idCat', 0);
    sessionStorage.setItem('idFab', 0);
    sessionStorage.setItem('idMar', 0);
    sessionStorage.setItem('idBar', 0);
    sessionStorage.setItem('idMnd', 0);
    sessionStorage.setItem('nuevo', 0);
}