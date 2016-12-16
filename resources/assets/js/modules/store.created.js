module.export = function() {
	if ($('#storeid').val.length > 0) {
		this.form.id = $('#storeid').val();
	}
}
