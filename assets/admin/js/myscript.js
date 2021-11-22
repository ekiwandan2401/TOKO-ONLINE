const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		title: 'Data User',
		text: 'Berhasil' + flashData,
		type: 'success'
	});
}