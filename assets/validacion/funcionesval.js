//
function formatoPrecio(value) {
	return Number(value).toLocaleString("es-ES", {
		maximumFractionDigits: 2,
		minimumFractionDigits: 2,
	});
}
//
function formatoMontoEntero(value) {
	return Number(value).toLocaleString("es-ES", {
		maximumFractionDigits: 0,
		minimumFractionDigits: 0,
	});
}
//
function getSemanaID(id, jsonData) {
	for (var i = 0; i < jsonData.length; i++) {
		if (jsonData[i]["id_Semana"] == id) {
			return true;
			break;
		}
	}
	return false;
}
//
