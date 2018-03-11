const input_file = "https://docs.google.com/spreadsheets/d/e/2PACX-1vTRX59hw2VwLwtKzB2dmoQZ4tRc26LHMn4Qae0YG3Ni3Sk8h2GezzB4yZ8zRwoZza0nSwp27flD8pX5/pub?output=xlsx";

		//document.write("Cargando infografía, espera por favor...");

		let oReq = new XMLHttpRequest();
		oReq.open("GET", input_file, true);
		oReq.responseType = "arraybuffer";

		oReq.onload = function (e) {
			let arraybuffer = oReq.response;
			/*             not responseText!!              */

			/* convert data to binary string */
			let data = new Uint8Array(arraybuffer);
			let arr = new Array();
			for (let i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
			let bstr = arr.join("");
			/* Call XLSX */
			let workbook = XLSX.read(bstr, {type: "binary"});
			/* DO SOMETHING WITH workbook HERE */
			let firstSheet = workbook.SheetNames[0];

			let parsed = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);
		  console.log(parsed);

		   for (i = 0; i < parsed.length; i++) { 
			 document.getElementById("gallery").innerHTML += ('<div class="trabajo ' + parsed[i]["Tag"] + '"><div class="c_20"><div class="mediaBox ima"><img src="' + parsed[i]["URL"] + '" title="'+ parsed[i]["Título"] +'"/></div></div><div class="c_80"><div class="txtBox"><h4>' + parsed[i]["Título"] + '</h4><div class="auxBox"><p>' + parsed[i]["Descripción"] + '</p></div><div class="tag">' + parsed[i]["Tipo(impreso/web)"] + '</div><div class="tag">' + parsed[i]["Tag"] + '</div></div><a class="link" href"'+ parsed[i]["URL"] +'" title="'+ parsed[i]["Título"] +'" target="_blank" name="Trabajo - ' + parsed[i]["Título"] + '"></a></div></div>');
		   }
		};

		oReq.send();