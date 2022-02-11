//
// Utilitarios * 05ene21 - 14ene21
//
function onlyNumberKey(evt) {
	var iKeyCode = (evt.which) ? evt.which : evt.keyCode
	if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
		return false;
	return true;
}    
//
function formatMoney(amount, decimalCount = 2, decimal = ",", thousands = ".") {
	
  try {
    decimalCount = Math.abs(decimalCount);
    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

    const negativeSign = amount < 0 ? "-" : "";

    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
    let j = (i.length > 3) ? i.length % 3 : 0;
	
	var value = negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");

	$('#txtPrecio').val(value);
    return true;
	
  } catch (e) {
    console.log(e)
  }
  //formatMoney(document.getElementById("d").value)
};
//
function formatMonto(amount, decimalCount = 2, decimal = ",", thousands = ".") {
	//debugger;	
	try {
		decimalCount = Math.abs(decimalCount);
		decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

		const negativeSign = amount < 0 ? "-" : "";

		let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
		let j = (i.length > 3) ? i.length % 3 : 0;
		
		var monto = negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");

		$("#totalFactura").val(monto);
		
		//return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
		
		return true;
		
	} catch (e) {
		console.log(e)
	}	
};
//
function number_format_js(number, decimals, dec_point, thousands_point) {
	// debugger;
	if (number == null || !isFinite(number)) {
		throw new TypeError("number is not valid");
	}

	if (!decimals) {
		var len = number.toString().split('.').length;
		decimals = len > 1 ? len : 0;
	}

	if (!dec_point) {
		dec_point = '.';
	}

	if (!thousands_point) {
		thousands_point = ',';
	}

	number = parseFloat(number).toFixed(decimals);

	number = number.replace(".", dec_point);

	var splitNum = number.split(dec_point);
	splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
	number = splitNum.join(dec_point);

	return number;
}
// 
function replaceAll(text, busca, reemplaza) {
  while (text.toString().indexOf(busca) != -1)
    text = text.toString().replace(busca, reemplaza);
  return text;
}