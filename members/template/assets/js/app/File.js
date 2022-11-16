const inputFile = document.querySelector('#csv_file');
const inputFileTotal = document.querySelector('#csv_file_total');
const listoImportar = 'Listo para importar ';
const importar = 'Importar archivo';

inputFile.addEventListener('change', () => {
	document.querySelector('#name_file').innerText =
		listoImportar + inputFile.files[0].name;
	document.querySelector('#label_file').style.display = 'none';
	document.querySelector('#import_csv_btn').innerText = importar;
});

inputFileTotal.addEventListener('change', () => {
	document.querySelector('#name_file_total').innerText =
		listoImportar + inputFileTotal.files[0].name;
    document.querySelector('#label_file_total').style.display = 'none';
    document.querySelector('#import_csv_btn_total').innerText = importar;
});
